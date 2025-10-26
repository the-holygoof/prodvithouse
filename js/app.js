

document.addEventListener('DOMContentLoaded', () => {
    initTestimonialsPerformance();
      if (window.initTiltGlare) {
      initTiltGlare('.card', { innerGlare: false }); // single glare for perf
    }
  });
  

  
  function initTestimonialsPerformance() {
    const section = document.querySelector('.testimonials-section');
    if (!section) return;
  
    const containers = Array.from(
      section.querySelectorAll('.testim-container-forward, .testim-container-backward')
    );
    if (!containers.length) return;
  
    // // Per-container visibility observer
    // const io = new IntersectionObserver(
    //   (entries) => {
    //     entries.forEach((entry) => {
    //       const el = entry.target;
    //       if (entry.isIntersecting && entry.intersectionRatio > 0) {
    //         el.classList.remove('paused', 'stopped');
    //         el.classList.add('will-change-transform');
    //         el.classList.remove('will-change-auto');
    //       } else {
    //         el.classList.add('paused');
    //         el.classList.add('will-change-auto');
    //         el.classList.remove('will-change-transform');
    //       }
    //     });
    //   },
    //   { root: null, rootMargin: '100px 0px', threshold: [0, 0.01, 0.1] }
    // );
  
    // containers.forEach((el) => io.observe(el)); 
  
    // // Stop entirely if section offscreen for 3s
    // let stopTimer = null;
    // const sectionIO = new IntersectionObserver(
    //   (entries) => {
    //     entries.forEach((entry) => {
    //       if (!entry.isIntersecting) {
    //         if (stopTimer) clearTimeout(stopTimer);
    //         stopTimer = setTimeout(() => {
    //           containers.forEach((el) => {
    //             el.classList.add('stopped');
    //             el.classList.add('will-change-auto');
    //             el.classList.remove('will-change-transform');
    //             el.classList.remove('paused');
    //           });
    //         }, 3000);
    //       } else {
    //         if (stopTimer) clearTimeout(stopTimer);
    //         containers.forEach((el) => {
    //           el.classList.remove('stopped');
    //           el.classList.remove('paused');
    //           el.classList.add('will-change-transform');
    //           el.classList.remove('will-change-auto');
    //         });
    //       }
    //     });
    //   },
    //   { threshold: 0 }
    // );
  
    // sectionIO.observe(section);
  
    // Pause during active scroll; resume after short idle
    let resumeTimeout = null;
    const pauseOnScroll = () => {
      containers.forEach((el) => {
        el.classList.add('paused');
        el.classList.add('will-change-auto');
        el.classList.remove('will-change-transform');
      });
      if (resumeTimeout) clearTimeout(resumeTimeout);
      resumeTimeout = setTimeout(() => {
        containers.forEach((el) => {
          // Only resume if visible; IO callback will correct state shortly
          el.classList.remove('paused');
          el.classList.add('will-change-transform');
          el.classList.remove('will-change-auto');
        });
      }, 150);
    };
  
    window.addEventListener('scroll', pauseOnScroll, { passive: true });
    window.addEventListener('resize', pauseOnScroll, { passive: true });
  
    // // Respect reduced motion
    // if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    //   containers.forEach((el) => {
    //     el.classList.add('stopped');
    //     el.classList.add('will-change-auto');
    //     el.classList.remove('will-change-transform');
    //   });
    // }
  
    // // Page hidden: pause
    // document.addEventListener('visibilitychange', () => {
    //   if (document.hidden) {
    //     containers.forEach((el) => {
    //       el.classList.add('paused');
    //       el.classList.add('will-change-auto');
    //       el.classList.remove('will-change-transform');
    //     });
    //   } else {
    //     containers.forEach((el) => {
    //       el.classList.remove('paused');
    //       el.classList.add('will-change-transform');
    //       el.classList.remove('will-change-auto');
    //     });
    //   }
    // });
  }
  