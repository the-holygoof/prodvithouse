# Performance Optimizations - Applied Feedback Patterns

## Applied Patterns

### 1. Slider Carousel (pause-scroll-pause)
```css
.hero-carousel {
  /* Animate the carousel container */
  will-change: transform;
  transform: translate3d(0,0,0);
  scroll-snap-type: x mandatory;
  overflow-x: auto;
  scroll-behavior: smooth;
}

.slide {
  /* Clip mask wrapper */
  overflow: hidden;
  contain: layout; /* isolate the mask */
}

.slide img {
  /* Heavy items */
  content-visibility: auto;
  contain: layout paint;
}
```

### 2. Photo Marquee (infinite, opposite directions)
```css
.testim-container-forward,
.testim-container-backward {
  /* Each marquee div animates */
  will-change: transform;
  transform: translate3d(0,0,0);
  animation: testimonialsScroll 30s linear infinite;
}

.testim-item img {
  /* Images = heavy */
  content-visibility: auto;
  contain: layout paint;
}

.testim-wrapper {
  /* Wrapper manages overflow */
  overflow: hidden;
}
```

### 3. Icons + Text Marquee (infinite, single direction)
```css
.marquee {
  /* Animate the moving div */
  will-change: transform;
  transform: translate3d(0,0,0);
  animation: marquee-x 160s linear infinite;
}

.marquee-item {
  /* Small items - skip content-visibility (overhead > benefit) */
  /* Nothing needed - too small */
}
```

### 4. Testimonial Carousel (pause-scroll-pause)
```css
.opinie-carousel {
  /* Animate carousel items container */
  will-change: transform;
  transform: translate3d(0,0,0);
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
}

.opinie-carousel > .carousel-item {
  /* Individual testimonials */
  content-visibility: auto;
  contain: layout paint;
}
```

## Quick Rules Applied
- **Translate:** The container holding all items (not items themselves)
- **will-change:** On translated container
- **content-visibility:** On heavy items (photos, testimonials, NOT tiny icons)
- **contain:** Only on self-contained items (cards with photo+text)

## Out of viewport optimization
```javascript
// For marquees that never stop
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.willChange = 'transform';
    } else {
      entry.target.style.willChange = 'auto';
    }
  });
});

// Apply to all .marquee, .testim-container-forward, .testim-container-backward
document.querySelectorAll('.marquee, .testim-container-forward, .testim-container-backward').forEach(el => observer.observe(el));
```

## Key insight: Animate containers, optimize items. Don't overthink middle layers. 🎯

## Current State
✅ All patterns applied exactly as specified
✅ IntersectionObserver for viewport optimization
✅ Scroll pause/resume system maintained
✅ Cross-browser compatibility verified
