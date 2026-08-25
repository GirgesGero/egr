/**
 * DISTRICT 1 — CINEMATIC VIDEO EXPLORER & PAPER CUTOUT APERTURE REVEAL
 * 
 * Features:
 * 1. Autoplay / pause on scroll via IntersectionObserver
 * 2. GSAP ScrollTrigger Parallax & Aperture Depth Effect
 * 3. Chapter seeking & live chapter sync with video timestamp
 * 4. Interactive Progress Bar scrubbing
 * 5. Audio Mute / Unmute & Fullscreen management
 * 6. Live HUD updates matching project milestones
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  const video        = document.getElementById('floor-promo-video');
  const card         = document.getElementById('floor-video-card');
  const container    = document.getElementById('paper-cutout-container');
  const progTrack    = document.getElementById('video-progress-track');
  const progBar      = document.getElementById('video-progress-bar');
  const btnPlay      = document.getElementById('btn-play-pause');
  const playIcon     = document.getElementById('play-pause-icon');
  const btnMute      = document.getElementById('btn-vid-mute');
  const muteIcon     = document.getElementById('mute-icon');
  const btnFull      = document.getElementById('btn-vid-fullscreen');
  const chapterBtns  = document.querySelectorAll('.chapter-btn');
  const displayTitle = document.getElementById('floor-display-title');
  const displayDesc  = document.getElementById('floor-display-desc');

  if (!video || !card) return;

  // Chapter Descriptions Database
  const chapterDetails = [
    {
      time: 0,
      title: 'الواجهة الرئيسية والارتفاع الكامل (33.6 متراً)',
      desc: 'صرح معماري بارتفاع 33.6 متراً يضم حجر الترافرتين الطبيعي والزجاج المزدوج العازل بتصميم أيقوني فريد.'
    },
    {
      time: 12,
      title: 'المول التجاري وشبكة كواسر الشمس المزدوجة (L1 - L3)',
      desc: '3 مستويات تجارية متكاملة مع مصفوفة كواسر شمسية بيضاء، وشرفات معلقة ومجمع مطاعم فاخر.'
    },
    {
      time: 24,
      title: 'جناح الهايبر ماركت والمدخل المستقل (Ground Floor)',
      desc: 'هايبر ماركت متكامل بمساحات واسعة ومداخل مباشرة مع أنظمة دخول ذكية للمشاة والمركبات.'
    },
    {
      time: 38,
      title: 'الأبراج الإدارية والعيادات الطبية الذكية (L4 - L8)',
      desc: '5 طوابق إدارية وطبية بمساحة 10,960 م²، بمصاعد VIP مستقلة وإطلالات بانورامية على قنا.'
    }
  ];

  // 1. Autoplay / Pause on Viewport Visibility
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          video.play().catch(() => {});
          if (playIcon) playIcon.className = 'fa-solid fa-pause';
        } else {
          video.pause();
          if (playIcon) playIcon.className = 'fa-solid fa-play';
        }
      });
    }, { threshold: 0.25 });

    observer.observe(card);
  }

  // 2. GSAP ScrollTrigger: Paper Cutout Parallax & Aperture Gliding
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    gsap.fromTo(card, 
      { 
        scale: 0.95,
        borderRadius: '36px',
        boxShadow: '0 15px 40px rgba(0,0,0,0.1)'
      },
      {
        scale: 1.0,
        borderRadius: '24px',
        boxShadow: '0 30px 80px rgba(15,23,42,0.3)',
        ease: 'power2.out',
        scrollTrigger: {
          trigger: '#floors-section',
          start: 'top 80%',
          end: 'center center',
          scrub: 1
        }
      }
    );

    // Parallax motion on background video inside the cutout
    gsap.to(video, {
      y: '12%',
      ease: 'none',
      scrollTrigger: {
        trigger: '#floors-section',
        start: 'top bottom',
        end: 'bottom top',
        scrub: true
      }
    });
  }

  // 3. Play / Pause Control
  if (btnPlay) {
    btnPlay.addEventListener('click', (e) => {
      e.stopPropagation();
      if (video.paused) {
        video.play().catch(() => {});
        if (playIcon) playIcon.className = 'fa-solid fa-pause';
      } else {
        video.pause();
        if (playIcon) playIcon.className = 'fa-solid fa-play';
      }
    });
  }

  // 4. Mute / Unmute Control
  if (btnMute) {
    btnMute.addEventListener('click', (e) => {
      e.stopPropagation();
      video.muted = !video.muted;
      if (muteIcon) {
        muteIcon.className = video.muted ? 'fa-solid fa-volume-xmark' : 'fa-solid fa-volume-high';
      }
      btnMute.classList.toggle('active', !video.muted);
    });
  }

  // 5. Fullscreen Control
  if (btnFull) {
    btnFull.addEventListener('click', (e) => {
      e.stopPropagation();
      if (!document.fullscreenElement) {
        if (card.requestFullscreen) card.requestFullscreen();
        else if (card.webkitRequestFullscreen) card.webkitRequestFullscreen();
      } else {
        if (document.exitFullscreen) document.exitFullscreen();
      }
    });
  }

  // 6. Live Video Progress Bar Update
  if (progBar) {
    video.addEventListener('timeupdate', () => {
      if (video.duration) {
        const pct = (video.currentTime / video.duration) * 100;
        progBar.style.width = pct + '%';
        syncActiveChapter(video.currentTime);
      }
    });
  }

  // 7. Interactive Scrubbing on Progress Track
  if (progTrack) {
    progTrack.addEventListener('click', (e) => {
      const rect = progTrack.getBoundingClientRect();
      const clickX = e.clientX - rect.left;
      const pct = Math.max(0, Math.min(1, clickX / rect.width));
      if (video.duration) {
        video.currentTime = pct * video.duration;
      }
    });
  }

  // 8. Chapter Buttons Navigation & Seeking
  chapterBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const targetTime = parseFloat(btn.getAttribute('data-time') || '0');
      if (video.duration && targetTime < video.duration) {
        video.currentTime = targetTime;
        video.play().catch(() => {});
        if (playIcon) playIcon.className = 'fa-solid fa-pause';
      }
      chapterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });

  // Sync Active Chapter with Current Video Time
  function syncActiveChapter(currentTime) {
    let activeIdx = 0;
    for (let i = chapterDetails.length - 1; i >= 0; i--) {
      if (currentTime >= chapterDetails[i].time) {
        activeIdx = i;
        break;
      }
    }

    chapterBtns.forEach((btn, idx) => {
      btn.classList.toggle('active', idx === activeIdx);
    });

    const currChapter = chapterDetails[activeIdx];
    if (currChapter) {
      if (displayTitle && displayTitle.textContent !== currChapter.title) {
        displayTitle.textContent = currChapter.title;
      }
      if (displayDesc && displayDesc.textContent !== currChapter.desc) {
        displayDesc.textContent = currChapter.desc;
      }
    }
  }

  console.log('District 1 Cinematic Cutout Video Explorer Initialized!');
});
