/**
 * DISTRICT 1 — PURE BACKGROUND VIDEO WINDOW & PARALLAX REVEAL CONTROLLER
 * Full Mobile (iOS Safari & Android Chrome) & Desktop Compatibility:
 * - Hardware-accelerated inline mobile autoplay (playsinline, webkit-playsinline)
 * - Touch & scroll wake-up fallback for mobile battery-saver modes
 * - IntersectionObserver battery-saving sleep/wake cycle
 * - Responsive smooth GSAP ScrollTrigger parallax
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  const video = document.getElementById('floor-promo-video');
  const section = document.getElementById('floors-section');

  if (!video || !section) return;

  // 1. Enforce strict silent inline mobile playback attributes
  video.muted = true;
  video.defaultMuted = true;
  video.setAttribute('muted', '');
  video.setAttribute('playsinline', '');
  video.setAttribute('webkit-playsinline', '');
  video.setAttribute('x5-playsinline', '');

  // 2. Resilient Playback Trigger for Mobile & Desktop
  let isPlaying = false;

  const attemptPlay = () => {
    if (isPlaying) return;
    const promise = video.play();
    if (promise !== undefined) {
      promise.then(() => {
        isPlaying = true;
      }).catch(() => {
        isPlaying = false;
        // On mobile restriction, listen for initial user touch/scroll anywhere on page
        const handleUserWakeup = () => {
          video.play().then(() => { isPlaying = true; }).catch(() => {});
          window.removeEventListener('touchstart', handleUserWakeup);
          window.removeEventListener('scroll', handleUserWakeup);
          window.removeEventListener('click', handleUserWakeup);
        };
        window.addEventListener('touchstart', handleUserWakeup, { passive: true, once: true });
        window.addEventListener('scroll', handleUserWakeup, { passive: true, once: true });
        window.addEventListener('click', handleUserWakeup, { passive: true, once: true });
      });
    }
  };

  // Initial attempt
  attemptPlay();

  // 3. IntersectionObserver: Play when visible, pause when offscreen
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          attemptPlay();
        } else {
          video.pause();
          isPlaying = false;
        }
      });
    }, { threshold: 0.08 });

    observer.observe(section);
  }

  // 4. GSAP ScrollTrigger Cinematic Zoom (Eliminates vertical shifts and prevents edge gaps)
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    gsap.fromTo(video, 
      { scale: 1.0 },
      {
        scale: 1.05,
        ease: 'none',
        scrollTrigger: {
          trigger: '#floors-section',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true
        }
      }
    );
  }

  console.log('District 1 Mobile-Optimized Pure Video Window Ready!');
});
