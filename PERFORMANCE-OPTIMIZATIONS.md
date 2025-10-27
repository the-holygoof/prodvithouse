# Performance Optimizations

## What Was Done

### 1. Scroll Animation Manager (40 lines - simplified)
**`js/scroll-animation-manager.js`**
- Pauses ALL animations during scroll
- Resumes after 200ms idle
- Respects `prefers-reduced-motion`
- **Removed IntersectionObserver** - was causing jittering

### 2. Carousel Fixes
**`js/carousels.js`**
- ✅ `busy` flag prevents fast-click issues
- ✅ `updateDisabled()` runs on init + resize + scroll
- ✅ Disabled state handled by existing `.btn` utility
- ✅ Ping-pong autoplay (safer than infinite loop)

**Button CSS:**
- Fixed click area: `clip-path: none !important`
- Ensures full button clickable (not just glyph)
- Min size 2rem × 2rem
- `pointer-events: auto`, `z-index: 310`
- Preserves `rounded-full` appearance

### 3. Removed Aggressive Optimizations
**What was removed to fix jittering:**
- ❌ `will-change: transform` on carousels (caused repaints)
- ❌ `content-visibility: auto` (caused layout shifts)
- ❌ `contain: layout paint` (Safari issues)
- ❌ IntersectionObserver (caused scroll jank)
- ❌ GPU hints on `.kroplowka` cards (transition conflicts)

**What remains:**
- ✅ Simple scroll pause/resume
- ✅ CSS animation-play-state pausing
- ✅ Smooth scroll behavior
- ✅ Basic transform optimizations where needed

## Global Pause System
```css
.scroll-paused * {
  animation-play-state: paused !important;
  transition: none !important;
}
```

## Testing
1. Scroll → all animations pause
2. Stop → resume after 200ms
3. Off-screen marquees get `will-change: auto`
4. Button clicks work anywhere on button
5. Disabled buttons visually change color
6. Safari/Chrome compatibility verified

## Fixed Issues
- ✅ Hero slider content now above gradient (z-index: 50)
- ✅ Opinie carousel buttons working (selector fixed)
- ✅ Safari white page fixed (removed problematic CSS)
- ✅ Chrome image loading fixed (reverted aggressive positioning)

## File Sizes
- scroll-animation-manager.js: **40 lines** (was 247, then 62, now simplified)
- Removed aggressive optimizations that caused jittering
- Cross-browser compatibility maintained
- Performance balanced with stability

## Lessons Learned
- ❌ `content-visibility: auto` causes layout shifts and image decode delays
- ❌ `will-change: transform` on scroll containers causes repaint jank
- ❌ IntersectionObserver during scroll adds overhead
- ❌ Too many GPU layers cause Safari flickering
- ✅ Simple pause/resume is fastest and most stable
- ✅ Let browser handle optimizations naturally
