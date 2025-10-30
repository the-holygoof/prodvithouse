
document.addEventListener('DOMContentLoaded', () => {
  // Initialize tilt/glare effects for cards
  if (window.initTiltGlare) {
    initTiltGlare('.karta-outside', { 
      innerGlare: false,
      resumeDelayMs: 260,    // Longer pause after scroll
      glareRx: 180,          // Reduced glare size for performance
      glareRy: 190,
      glareAlphaOuter: 0.15  // Lower opacity
    });
  }
  
  // All scroll/visibility management is now handled by scroll-animation-manager.js
  // No need for separate testimonials logic
});