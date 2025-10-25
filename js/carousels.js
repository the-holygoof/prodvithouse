(function() {
  // Utilities
  const clamp = (v, min, max) => Math.max(min, Math.min(max, v));
  const prefersReduced = matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Generic carousel controller
  function makeCarousel({ section, scrollerSel, prevSel, nextSel, itemSel, colSel, autoplayMs = 3000, pauseOnHoverSel = '.card, .opinie-item, .opinie-prev, .opinie-next' }) {
    const scroller = section.querySelector(scrollerSel);
    if (!scroller) return;
    const prev = section.querySelector(prevSel);
    const next = section.querySelector(nextSel);
    const items = Array.from(scroller.querySelectorAll(itemSel));
    const cols  = colSel ? Array.from(scroller.querySelectorAll(colSel)) : [];

    const isMobile = () => matchMedia('(max-width: 640px)').matches;
    const slideWidth = () => items[0]?.clientWidth || scroller.clientWidth;

    function computeColumnOffsets() {
      if (!cols.length) return [];
      const sRect = scroller.getBoundingClientRect();
      const left0 = scroller.scrollLeft;
      const offsets = cols.map(col => left0 + (col.getBoundingClientRect().left - sRect.left));
      return Array.from(new Set(offsets)).sort((a,b)=>a-b);
    }

    function page(delta) {
      if (cols.length && isMobile()) {
        const offsets = computeColumnOffsets();
        if (!offsets.length) return;
        const currentLeft = scroller.scrollLeft;
        let idx = 0;
        for (let i = 0; i < offsets.length; i++) if (offsets[i] <= currentLeft + 1) idx = i;
        const nextIdx = clamp(idx + delta, 0, offsets.length - 1);
        scroller.scrollTo({ left: offsets[nextIdx], behavior: prefersReduced ? 'auto' : 'smooth' });
      } else {
        const target = clamp(scroller.scrollLeft + slideWidth() * delta, 0, scroller.scrollWidth - scroller.clientWidth);
        scroller.scrollTo({ left: target, behavior: prefersReduced ? 'auto' : 'smooth' });
      }
    }

    function updateDisabled() {
      const start = scroller.scrollLeft <= 0;
      const end = scroller.scrollLeft >= (scroller.scrollWidth - scroller.clientWidth - 1);
      if (prev) prev.disabled = start;
      if (next) next.disabled = end;
    }

    // Events
    prev?.addEventListener('click', () => page(-1));
    next?.addEventListener('click', () => page(1));

    scroller.addEventListener('scroll', () => {
      if (!scroller.__ticking) {
        scroller.__ticking = true;
        requestAnimationFrame(() => { scroller.__ticking = false; updateDisabled(); });
      }
    });
    addEventListener('resize', updateDisabled, { passive: true });
    updateDisabled();

    // Autoplay
    let dir = 1;
    let id = null;
    const startAutoplay = () => {
      if (id || prefersReduced) return;
      id = setInterval(() => {
        const atStart = scroller.scrollLeft <= 0;
        const atEnd   = scroller.scrollLeft >= (scroller.scrollWidth - scroller.clientWidth - 1);
        if (atEnd) dir = -1; else if (atStart) dir = 1;
        page(dir);
      }, autoplayMs);
    };
    const stopAutoplay = () => { if (id) clearInterval(id); id = null; };

    // Pause on hover over interactive cards/items
    const hoverTargets = pauseOnHoverSel ? Array.from(section.querySelectorAll(pauseOnHoverSel)) : [];
    hoverTargets.forEach(el => {
      el.addEventListener('mouseenter', stopAutoplay);
      el.addEventListener('mouseleave', startAutoplay);
    });

    // Visibility / reduced motion
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) stopAutoplay(); else startAutoplay();
    });

    // Initial
    if (!prefersReduced) startAutoplay();
    return { page, startAutoplay, stopAutoplay };
  }

  // Opinie: 3 items desktop, 1 item mobile (by column)
  const opinieSection = document.querySelector('.section-opinie.section-gradient .wrapper')?.closest('.section-opinie.section-gradient') || document.querySelector('.opinie-buttons-wrapper'); 
  if (opinieSection && opinieSection.querySelector('.opinions-carousel')) {
    makeCarousel({
      section: opinieSection,
      scrollerSel: '.opinions-carousel',
      prevSel: '.opinie-prev',
      nextSel: '.opinie-next',
      itemSel: '.carousel-item',
      colSel: '.opinie-item, .card', // step per card/column on mobile
      autoplayMs: 3000,
      pauseOnHoverSel: '.opinie-item, .card'
    });
  }

  // Hero slider: one slide at once (no per-column paging)
  const heroSection = document.querySelector('.slider')?.closest('section') || document.querySelector('.slider')?.parentElement || document.querySelector('.slider-buttons-wrapper'); 
  if (heroSection) {
    // Add static controls if not present (optional; or wire existing hero-prev/hero-next buttons)
    let prev = heroSection.querySelector('.hero-prev');
    let next = heroSection.querySelector('.hero-next');
    // If you already render controls in hero template, ignore this creation.
    const scroller = heroSection.querySelector('.hero-carousel');
    if (scroller) {
      scroller.classList.add('hero-carousel');
      makeCarousel({
        section: heroSection,
        scrollerSel: '.hero-carousel',
        prevSel: '.hero-prev',
        nextSel: '.hero-next',
        itemSel: '.carousel-item.slide',
        colSel: null,
        autoplayMs: 3000,
        pauseOnHoverSel: '.heroslider-content, .hero-prev, .hero-next' // or inner hero content to pause
      });
    }
  }
})();

