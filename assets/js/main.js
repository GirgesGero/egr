/**
 * DISTRICT 1 — MAIN APPLICATION SCRIPT
 * Ultra-Smooth & Lightweight Mouse Wheel Engine (Lenis + GSAP Ticker Sync)
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // 0. Universal Fail-Safe Preloader Dismiss (Instant on Interior Pages)
  const sitePreloader = document.getElementById('site-preloader');
  if (sitePreloader) {
    const isFrontPageWithScrubber = !!document.getElementById('hero-frame-canvas');
    if (!isFrontPageWithScrubber) {
      const pBar = document.getElementById('preloader-bar');
      const pCount = document.getElementById('preloader-count');
      if (pBar) pBar.style.width = '100%';
      if (pCount) pCount.textContent = '100%';
      setTimeout(() => {
        sitePreloader.classList.add('loaded');
        setTimeout(() => {
          sitePreloader.style.display = 'none';
        }, 300);
      }, 100);
    } else {
      setTimeout(() => {
        if (!sitePreloader.classList.contains('loaded')) {
          sitePreloader.classList.add('loaded');
          setTimeout(() => {
            sitePreloader.style.display = 'none';
          }, 300);
        }
      }, 2500);
    }
  }

  // 1. Ultra-Lightweight & Fluid Lenis Smooth Scroll Engine
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    try {
      lenis = new Lenis({
        duration: 1.0,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        orientation: 'vertical',
        gestureOrientation: 'vertical',
        smoothWheel: true,
        wheelMultiplier: 1.25, // Light, instant, buttery mouse-wheel response
        touchMultiplier: 1.8,
        infinite: false
      });

      // Synchronize Lenis with GSAP ScrollTrigger
      if (typeof ScrollTrigger !== 'undefined') {
        lenis.on('scroll', ScrollTrigger.update);
      }

      if (typeof gsap !== 'undefined') {
        gsap.ticker.add((time) => {
          lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);
      } else {
        function raf(time) {
          lenis.raf(time);
          requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
      }

      window.lenis = lenis;
    } catch (err) {
      console.warn('Lenis scroll notice:', err);
    }
  }

  // Smooth Anchor Navigation
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#' && targetId.length > 1) {
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          if (window.lenis) {
            window.lenis.scrollTo(targetEl, { offset: -70, duration: 1.2 });
          } else {
            targetEl.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
    });
  });

  // 2. Navbar Scroll Shadow & Blur State
  const header = document.getElementById('site-header');
  function handleHeaderScroll() {
    if (!header) return;
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // 3. Mobile Nav Drawer Toggle
  const mobileToggle = document.getElementById('mobile-nav-toggle');
  const navLinks = document.getElementById('nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      navLinks.classList.toggle('mobile-active');
      const icon = mobileToggle.querySelector('i');
      if (icon) {
        if (navLinks.classList.contains('mobile-active')) {
          icon.className = 'fa-solid fa-xmark';
        } else {
          icon.className = 'fa-solid fa-bars-staggered';
        }
      }
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('mobile-active');
        const icon = mobileToggle.querySelector('i');
        if (icon) icon.className = 'fa-solid fa-bars-staggered';
      });
    });

    document.addEventListener('click', (e) => {
      if (!navLinks.contains(e.target) && !mobileToggle.contains(e.target)) {
        navLinks.classList.remove('mobile-active');
        const icon = mobileToggle.querySelector('i');
        if (icon) icon.className = 'fa-solid fa-bars-staggered';
      }
    });
  }

  // 4. Interactive 3D Flip Cards (Hover on Desktop, Click/Tap on Mobile)
  const flipBoxes = document.querySelectorAll('.facility-exact-box, .flip-card');
  flipBoxes.forEach(box => {
    box.addEventListener('click', (e) => {
      if (e.target.closest('button') || e.target.closest('a')) return;
      box.classList.toggle('flipped');
    });
  });

  // 5. VIP Consultation Modal Logic
  const modalOverlay = document.getElementById('vip-modal-overlay');
  const openModalBtns = document.querySelectorAll('.open-vip-modal');
  const closeModalBtn = document.getElementById('modal-close-btn');

  if (openModalBtns.length > 0 && modalOverlay) {
    openModalBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        modalOverlay.classList.add('active');
      });
    });
  }

  if (closeModalBtn && modalOverlay) {
    closeModalBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
    });
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
      }
    });
  }

  // 6. Investor FAQ Accordion Interactive Logic
  const faqItems = document.querySelectorAll('.faq-item-card');
  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question-btn');
    if (questionBtn) {
      questionBtn.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Close all other items for clean single-focus accordion behavior
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
            const otherBtn = otherItem.querySelector('.faq-question-btn');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          }
        });
        // Toggle current item
        if (isActive) {
          item.classList.remove('active');
          questionBtn.setAttribute('aria-expanded', 'false');
        } else {
          item.classList.add('active');
          questionBtn.setAttribute('aria-expanded', 'true');
        }
      });
    }
  });
});
