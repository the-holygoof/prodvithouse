// filename: public/js/init-tilt-glare.js

(function () {
  const DEFAULTS = {
    scaleX: 5,
    scaleY: 7,
    glareRx: 180,            // Reduced for performance
    glareRy: 190,
    glareAlphaOuter: 0.15,   // Lower opacity
    innerGlare: false,
    resumeDelayMs: 260,      // Longer pause after scroll
    pointerThrottleMs: 16,   // ~60fps
    disableOnTouch: true     // Avoid scroll+hover conflicts
  };

  const BASELINE_CSS = `
    .karta-outside { transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0); transition: transform 160ms ease; }
    .karta-outside.is-hovering { transition: all 36ms linear; }
    .glare { opacity: 0; transition: opacity 140ms ease; }
    .karta-outside.is-hovering .glare, .karta-outside:hover .glare { opacity: 0.5; }

    .karta-outside { position: relative; z-index: 20; }
    .karta-outside > .glare { z-index: 180; }
    .karta-outside > .cloth-corner { z-index: 140; }
    .karta-outside > .cloth-corner > *:not(.glare) { z-index: 150; }

    /* Pause state: keeps compositor free during scroll */
    .tilt-paused .karta-outside { transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0) !important; }
    .tilt-paused .karta-outside .glare { opacity: 0 !important; }

    /* Only hint will-change during active hover */
    .karta-outside.will-transform { will-change: transform; }

    @media (prefers-reduced-motion: reduce) { .karta-outside, .karta-outside.is-hovering, .glare { transition: none !important; } }
  `;

  function injectBaselineOnce() {
    if (document.getElementById('tilt-glare-baseline')) return;
    const style = document.createElement('style');
    style.id = 'tilt-glare-baseline';
    style.textContent = BASELINE_CSS;
    document.head.appendChild(style);
  }

  function clamp01(v) { return Math.max(0, Math.min(1, v)); }

  function computeTilt(rect, clientX, clientY, scaleX, scaleY) {
    const x = clientX - rect.left;
    const y = clientY - rect.top;
    const nx = clamp01(x / (rect.width || 1));
    const ny = clamp01(y / (rect.height || 1));
    const rotX = ny * -(scaleY * 2) + scaleY;
    const rotY = nx *  (scaleX * 2) - scaleX;
    return { nx, ny, rotX, rotY };
  }

  function setTransform(card, rotX, rotY) {
    // Use transform only; no other style changes during move
    card.style.transform = `perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(10px)`;
  }

  function setGlare(el, nx, ny, rx, ry, alpha) {
    if (!el) return;
    const atX = Math.round(nx * 100);
    const atY = Math.round(ny * 100);
    el.style.background = `radial-gradient(${rx}px ${ry}px at ${atX}% ${atY}%, rgba(255,255,255,${alpha}), rgba(255,255,255,0) 85%)`;
  }

  function ensureGlare(container) {
    let glare = container.querySelector(':scope > .glare');
    if (!glare) {
      glare = document.createElement('div');
      glare.className = 'glare pointer-events-none absolute inset-0';
      glare.setAttribute('aria-hidden', 'true');
      const cs = getComputedStyle(container);
      if (cs.position === 'static') container.classList.add('relative');
      if (!container.classList.contains('overflow-clip')) container.classList.add('overflow-clip');
      container.insertBefore(glare, container.firstChild);
    }
    return glare;
  }

  function initTiltGlare(selector, opts = {}) {
    injectBaselineOnce();
    const settings = { ...DEFAULTS, ...opts };

    const reduceMotionMQ = window.matchMedia('(prefers-reduced-motion: reduce)');
    const isReducedMotion = reduceMotionMQ.matches;

    // Global pause/resume integrated with ScrollAnimationManager
    let resumeTimeout = null;
    let isPaused = false;

    const pauseTilt = () => {
      if (isPaused) return;
      isPaused = true;
      document.documentElement.classList.add('tilt-paused');
    };

    const resumeTiltSoon = () => {
      if (resumeTimeout) clearTimeout(resumeTimeout);
      resumeTimeout = setTimeout(() => {
        // Only resume if scroll manager allows it
        if (!window.ScrollAnimationManager || !window.ScrollAnimationManager.isScrolling()) {
          isPaused = false;
          document.documentElement.classList.remove('tilt-paused');
        }
      }, settings.resumeDelayMs);
    };

    // Scroll events are now primarily handled by ScrollAnimationManager
    // But keep local handling for immediate response
    window.addEventListener('scroll', () => { pauseTilt(); resumeTiltSoon(); }, { passive: true });
    window.addEventListener('resize', () => { pauseTilt(); resumeTiltSoon(); }, { passive: true });
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) pauseTilt(); else resumeTiltSoon();
    });

    // Touch devices: disable tilt to keep scroll smooth (can be toggled off)
    const isTouchDevice = settings.disableOnTouch && (('ontouchstart' in window) || navigator.maxTouchPoints > 0);

    const cards = Array.from(document.querySelectorAll(selector));
    cards.forEach((card) => {
      if (card.__tiltGlareInit) return;
      card.__tiltGlareInit = true;

      const outerGlare = ensureGlare(card);
      let rect = null;
      let lastNx = 0.3;
      let lastNy = 0.2;
      let lastTs = 0;
      let leaving = false;
      let pointerDown = false;

      const refreshRect = () => { rect = card.getBoundingClientRect(); };

      const onEnter = () => {
        if (isReducedMotion || isTouchDevice || isPaused) return;
        // Check if card is marked as visible by ScrollAnimationManager
        if (card.classList.contains('force-paused')) return;
        
        leaving = false;
        refreshRect();
        card.classList.add('is-hovering');
        card.classList.add('will-transform'); // short-lived hint
        card.classList.remove('will-auto');
      };

      const onMove = (e) => {
        if (isReducedMotion || isTouchDevice || isPaused) return;
        if (pointerDown) return;
        // Don't update if scrolling or element is paused
        if (card.classList.contains('force-paused')) return;

        const ts = e.timeStamp || performance.now();
        if (ts - lastTs < settings.pointerThrottleMs) return;
        lastTs = ts;

        const clientX = e.clientX ?? (e.touches && e.touches[0]?.clientX);
        const clientY = e.clientY ?? (e.touches && e.touches[0]?.clientY);
        if (clientX == null || clientY == null) return;
        if (!rect) refreshRect(); // read once per hover / after resize only

        const { nx, ny, rotX, rotY } = computeTilt(rect, clientX, clientY, settings.scaleX, settings.scaleY);
        lastNx = nx; lastNy = ny;
        setTransform(card, rotX, rotY);
        setGlare(outerGlare, nx, ny, settings.glareRx, settings.glareRy, settings.glareAlphaOuter);
      };

      const onLeave = () => {
        leaving = true;
        card.classList.remove('is-hovering');
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0)';
        setGlare(outerGlare, lastNx, lastNy, settings.glareRx, settings.glareRy, settings.glareAlphaOuter);

        window.setTimeout(() => {
          if (!leaving) return;
          const nx = 0.3, ny = 0.2;
          setGlare(outerGlare, nx, ny, settings.glareRx, settings.glareRy, settings.glareAlphaOuter);
          rect = null;
          card.classList.remove('will-transform'); // remove layer hint after hover
          card.classList.add('will-auto');
        }, 140);
      };

      const onPointerDown = () => { pointerDown = true; };
      const onPointerUp = () => { pointerDown = false; };

      card.addEventListener('pointerenter', onEnter, { passive: true });
      card.addEventListener('pointermove', onMove);
      card.addEventListener('pointerleave', onLeave, { passive: true });
      card.addEventListener('focus', onEnter, { passive: true });
      card.addEventListener('blur', onLeave, { passive: true });
      card.addEventListener('pointerdown', onPointerDown, { passive: true });
      card.addEventListener('pointerup', onPointerUp, { passive: true });
      card.addEventListener('pointercancel', onPointerUp, { passive: true });

      const ro = new ResizeObserver(refreshRect);
      ro.observe(card);
      card.__tiltGlareRO = ro;
    });

    return {};
  }

  window.initTiltGlare = initTiltGlare;
})();
