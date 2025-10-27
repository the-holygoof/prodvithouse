/**
 * Lightweight Scroll Animation Manager
 * Pauses animations on scroll, resumes after idle
 */
(function() {
  let timer = null;
  let scrolling = false;

  // Pause everything
  function pause() {
    if (scrolling) return;
    scrolling = true;
    document.documentElement.classList.add('scroll-paused', 'tilt-paused');
    window.dispatchEvent(new CustomEvent('carousel:pause'));
  }

  // Resume visible only
  function resume() {
    scrolling = false;
    document.documentElement.classList.remove('scroll-paused');
    window.dispatchEvent(new CustomEvent('carousel:resume'));
  }

  // Scroll handler
  function onScroll() {
    pause();
    clearTimeout(timer);
    timer = setTimeout(() => requestAnimationFrame(resume), 200);
  }

  // Track visibility for infinite marquees
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.willChange = 'transform';
      } else {
        e.target.style.willChange = 'auto';
      }
    });
  }, { rootMargin: '50px' });

  // Init
  function init() {
    if (matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.documentElement.classList.add('reduced-motion', 'scroll-paused');
      return;
    }

    // Observe infinite marquees
    document.querySelectorAll('.marquee, .testim-container-forward, .testim-container-backward').forEach(el => io.observe(el));

    window.addEventListener('scroll', onScroll, { passive: true });
    document.addEventListener('visibilitychange', () => document.hidden ? pause() : setTimeout(resume, 100));
  }

  window.ScrollAnimationManager = { pause, resume, isScrolling: () => scrolling };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
