/**
 * DISTRICT 1 — AUTHENTIC 3D ARCHITECTURAL PRELOADER & 4-PHASE HERO SCRUBBER
 * Procedural 3D Recreation of District 1:
 * - Curved Commercial Podium (G+3) with white sun louvers & glass storefronts
 * - Left Curved Panoramic Glass Tower (4F - 8F)
 * - Right Stepped Tower with architectural travertine frame
 * - Connecting Sky Bridge & Rooftop Crown
 * - Holographic Laser Scanner Ring & Rotating Blueprint Pedestal
 */

(function() {
  'use strict';

  // =========================================================================
  // 1. AUTHENTIC DISTRICT 1 PROCEDURAL 3D ARCHITECTURAL MODEL
  // =========================================================================
  const pCanvas = document.getElementById('preloader-3d-canvas');
  let pScene, pCamera, pRenderer, pBuildingGroup, pGridGroup, pScanRing;
  let pComponents = [];
  let currentBuildPct = 0;

  if (pCanvas && typeof THREE !== 'undefined') {
    try {
      pScene = new THREE.Scene();
      
      // Camera adjusted to capture the full 3D building perspective
      pCamera = new THREE.PerspectiveCamera(40, 380 / 300, 0.1, 100);
      pCamera.position.set(26, 19, 30);
      pCamera.lookAt(0, 6.0, 0);

      pRenderer = new THREE.WebGLRenderer({
        canvas: pCanvas,
        alpha: true,
        antialias: true,
        powerPreference: 'high-performance'
      });
      pRenderer.setSize(380, 300);
      pRenderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      pRenderer.shadowMap.enabled = true;
      pRenderer.shadowMap.type = THREE.PCFSoftShadowMap;

      // Studio Lighting System (Soft Natural Sunlight + Sky Blue Azure Ambient)
      const ambientLight = new THREE.AmbientLight(0xffffff, 0.85);
      pScene.add(ambientLight);

      const sunLight = new THREE.DirectionalLight(0xffffff, 1.3);
      sunLight.position.set(35, 50, 25);
      pScene.add(sunLight);

      const skyFillLight = new THREE.DirectionalLight(0x38bdf8, 0.8);
      skyFillLight.position.set(-25, 25, -20);
      pScene.add(skyFillLight);

      const warmGroundBounce = new THREE.DirectionalLight(0xe0f2fe, 0.5);
      warmGroundBounce.position.set(0, -15, 0);
      pScene.add(warmGroundBounce);

      // Building Root Container
      pBuildingGroup = new THREE.Group();
      pBuildingGroup.position.y = -2.5;
      pScene.add(pBuildingGroup);

      // Blueprint Rotating Pedestal
      pGridGroup = new THREE.Group();
      pGridGroup.position.y = -2.6;
      pScene.add(pGridGroup);

      // Concentric Laser Blueprint Rings
      const ringOuter = new THREE.Mesh(
        new THREE.RingGeometry(1, 18, 48, 1),
        new THREE.MeshBasicMaterial({ color: 0x0284c7, wireframe: true, transparent: true, opacity: 0.35, side: THREE.DoubleSide })
      );
      ringOuter.rotation.x = Math.PI / 2;
      pGridGroup.add(ringOuter);

      const innerGlowDisk = new THREE.Mesh(
        new THREE.CircleGeometry(18, 48),
        new THREE.MeshBasicMaterial({ color: 0xffffff, transparent: true, opacity: 0.9, side: THREE.DoubleSide })
      );
      innerGlowDisk.rotation.x = Math.PI / 2;
      innerGlowDisk.position.y = -0.02;
      pGridGroup.add(innerGlowDisk);

      // Glowing Cyan Laser Scanner Ring
      const scannerGeo = new THREE.TorusGeometry(11.0, 0.12, 8, 48);
      const scannerMat = new THREE.MeshBasicMaterial({ color: 0x0284c7, transparent: true, opacity: 0.85 });
      pScanRing = new THREE.Mesh(scannerGeo, scannerMat);
      pScanRing.rotation.x = Math.PI / 2;
      pScene.add(pScanRing);

      // Architectural Material Palettes matching the 4 real renders
      const matWhiteRibbon = new THREE.MeshStandardMaterial({ color: 0xffffff, roughness: 0.2, metalness: 0.05 });
      const matTravertineSlate = new THREE.MeshStandardMaterial({ color: 0x475569, roughness: 0.45, metalness: 0.15 });
      const matStoneBase = new THREE.MeshStandardMaterial({ color: 0xd8d1c6, roughness: 0.5, metalness: 0.1 });
      const matSkyGlass = new THREE.MeshStandardMaterial({ color: 0x38bdf8, roughness: 0.05, metalness: 0.35, transparent: true, opacity: 0.72 });
      const matDarkGlass = new THREE.MeshStandardMaterial({ color: 0x1e3a8a, roughness: 0.05, metalness: 0.45, transparent: true, opacity: 0.78 });
      const lineWireMat = new THREE.LineBasicMaterial({ color: 0x0284c7, transparent: true, opacity: 0.5 });

      function addWireframeLines(mesh, group) {
        const edges = new THREE.EdgesGeometry(mesh.geometry);
        const lines = new THREE.LineSegments(edges, lineWireMat);
        lines.position.copy(mesh.position);
        lines.rotation.copy(mesh.rotation);
        group.add(lines);
      }

      // ── COMPONENT 1: Basement & Ground Stone Slab (0% - 20%) ──
      const comp1 = new THREE.Group();
      const baseSlab = new THREE.Mesh(new THREE.BoxGeometry(16, 0.8, 14), matStoneBase);
      baseSlab.position.y = 0.4;
      comp1.add(baseSlab);
      addWireframeLines(baseSlab, comp1);

      const parkingRamp = new THREE.Mesh(new THREE.BoxGeometry(3.0, 0.4, 4.2), matTravertineSlate);
      parkingRamp.position.set(5.5, 0.2, 5.2);
      parkingRamp.rotation.x = 0.15;
      comp1.add(parkingRamp);

      pBuildingGroup.add(comp1);
      pComponents.push({ group: comp1, targetPct: 10 });

      // ── COMPONENT 2: Curved Commercial Podium G+3 (20% - 45%) ──
      const comp2 = new THREE.Group();
      
      // Main Glass Commercial Box
      const podiumGlass = new THREE.Mesh(new THREE.BoxGeometry(14.2, 4.2, 12.2), matSkyGlass);
      podiumGlass.position.y = 2.9;
      comp2.add(podiumGlass);
      addWireframeLines(podiumGlass, comp2);

      // White Horizontal Balcony Ribbons on Podium
      for (let b = 0; b < 4; b++) {
        const band = new THREE.Mesh(new THREE.BoxGeometry(14.8, 0.28, 12.8), matWhiteRibbon);
        band.position.y = 1.1 + b * 1.35;
        comp2.add(band);

        // Curved Corner Accent
        const cornerPill = new THREE.Mesh(new THREE.CylinderGeometry(1.6, 1.6, 0.28, 16), matWhiteRibbon);
        cornerPill.position.set(-6.2, 1.1 + b * 1.35, 5.2);
        comp2.add(cornerPill);
      }

      // Vertical White Sun Louver Fins (matching the photos)
      for (let l = -5.0; l <= 5.0; l += 0.95) {
        const fin = new THREE.Mesh(new THREE.BoxGeometry(0.12, 3.8, 0.4), matWhiteRibbon);
        fin.position.set(l, 2.9, 6.4);
        comp2.add(fin);
      }

      pBuildingGroup.add(comp2);
      pComponents.push({ group: comp2, targetPct: 35 });

      // ── COMPONENT 3: Left Curved Glass Tower (45% - 65%) ──
      const comp3 = new THREE.Group();
      
      const t1Glass = new THREE.Mesh(new THREE.BoxGeometry(6.0, 6.6, 5.6), matSkyGlass);
      t1Glass.position.set(-3.6, 8.2, 2.6);
      comp3.add(t1Glass);
      addWireframeLines(t1Glass, comp3);

      // Curved Cylindrical Glass Corner (matching the left curved tower in renders)
      const t1Curve = new THREE.Mesh(new THREE.CylinderGeometry(2.8, 2.8, 6.6, 20, 1, false, 0, Math.PI), matSkyGlass);
      t1Curve.position.set(-5.8, 8.2, 2.6);
      t1Curve.rotation.y = Math.PI / 2;
      comp3.add(t1Curve);

      // White Floor Plates
      for (let tb = 0; tb < 5; tb++) {
        const tBand = new THREE.Mesh(new THREE.BoxGeometry(6.5, 0.24, 6.0), matWhiteRibbon);
        tBand.position.set(-3.6, 5.2 + tb * 1.3, 2.6);
        comp3.add(tBand);
      }

      // Slate Vertical Spine
      const spineCol = new THREE.Mesh(new THREE.BoxGeometry(1.2, 7.8, 1.2), matTravertineSlate);
      spineCol.position.set(-6.5, 8.6, 5.0);
      comp3.add(spineCol);

      pBuildingGroup.add(comp3);
      pComponents.push({ group: comp3, targetPct: 60 });

      // ── COMPONENT 4: Right Stepped Tower with Slate Frame (65% - 85%) ──
      const comp4 = new THREE.Group();
      
      const t2Glass = new THREE.Mesh(new THREE.BoxGeometry(5.8, 7.8, 8.2), matDarkGlass);
      t2Glass.position.set(3.6, 8.8, -1.0);
      comp4.add(t2Glass);
      addWireframeLines(t2Glass, comp4);

      // Architectural Slate Outer Frame
      const slateFrame = new THREE.Mesh(new THREE.BoxGeometry(6.2, 8.2, 1.4), matTravertineSlate);
      slateFrame.position.set(3.6, 9.0, 3.2);
      comp4.add(slateFrame);

      // Vertical White Louvers on Tower 2
      for (let f = 1.2; f <= 6.0; f += 0.8) {
        const vFin = new THREE.Mesh(new THREE.BoxGeometry(0.1, 7.8, 0.3), matWhiteRibbon);
        vFin.position.set(f, 8.8, 3.8);
        comp4.add(vFin);
      }

      pBuildingGroup.add(comp4);
      pComponents.push({ group: comp4, targetPct: 80 });

      // ── COMPONENT 5: Sky Bridge & Rooftop Crown Spire (85% - 100%) ──
      const comp5 = new THREE.Group();
      
      // Connecting Sky Bridge between towers (matching the photo)
      const bridge = new THREE.Mesh(new THREE.BoxGeometry(8.2, 1.5, 3.0), matTravertineSlate);
      bridge.position.set(0.2, 11.6, -0.8);
      comp5.add(bridge);

      const bridgeGlass = new THREE.Mesh(new THREE.BoxGeometry(7.6, 1.1, 0.15), matSkyGlass);
      bridgeGlass.position.set(0.2, 11.6, 0.7);
      comp5.add(bridgeGlass);

      // Rooftop Spire reaching 33.6m
      const spire = new THREE.Mesh(
        new THREE.CylinderGeometry(0.08, 0.22, 3.2, 12),
        new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9, roughness: 0.1 })
      );
      spire.position.set(3.6, 14.2, -1.0);
      comp5.add(spire);

      pBuildingGroup.add(comp5);
      pComponents.push({ group: comp5, targetPct: 95 });

      // Continuous 360 Rotation Animation Loop
      let pClock = new THREE.Clock();
      function animatePreloader() {
        if (!pCanvas || pCanvas.offsetParent === null) return;
        requestAnimationFrame(animatePreloader);
        const t = pClock.getElapsedTime();

        pBuildingGroup.rotation.y = t * 0.5;
        pGridGroup.rotation.y = -t * 0.15;

        if (pScanRing) {
          pScanRing.position.y = Math.sin(t * 3.0) * 1.8 + (currentBuildPct / 100) * 15.0;
        }

        pRenderer.render(pScene, pCamera);
      }
      animatePreloader();
    } catch (err) {
      console.warn('3D preloader notice:', err);
    }
  }

  const phaseText = document.getElementById('preloader-phase-text');
  const holoTop = document.getElementById('holo-tag-top');
  const holoMid = document.getElementById('holo-tag-mid');
  const holoBot = document.getElementById('holo-tag-bot');

  function update3DBuildingProgress(pct) {
    currentBuildPct = pct;

    pComponents.forEach((comp) => {
      if (pct >= comp.targetPct) {
        comp.group.visible = true;
        if (typeof gsap !== 'undefined') {
          gsap.to(comp.group.scale, { x: 1, y: 1, z: 1, duration: 0.45, ease: 'back.out(1.3)', overwrite: 'auto' });
        } else {
          comp.group.scale.set(1, 1, 1);
        }
      }
    });

    if (holoBot) holoBot.style.opacity = pct >= 20 ? '1' : '0';
    if (holoMid) holoMid.style.opacity = pct >= 55 ? '1' : '0';
    if (holoTop) holoTop.style.opacity = pct >= 85 ? '1' : '0';

    if (phaseText) {
      if (pct < 25) phaseText.textContent = 'تشييد الأساسات العميقة ومواقف السيارات (6,000 م²)...';
      else if (pct < 50) phaseText.textContent = 'بناء البوديوم التجاري والشرفات المعلقة والهايبر ماركت...';
      else if (pct < 75) phaseText.textContent = 'تشييد البرج الزجاجي المنحني وواجهات الترافرتين...';
      else if (pct < 95) phaseText.textContent = 'رفع البرج الإداري والجسر المعماري الرابط بارتفاع 33.6 متراً...';
      else phaseText.textContent = 'اكتمل بناء صرح District 1 — جاري عرض الصرح المعماري...';
    }
  }

  // =========================================================================
  // 2. 120-FRAME VIDEO SCRUBBER & ASSET PRELOADING
  // =========================================================================
  const frameCount = 120;
  const canvas = document.getElementById('hero-frame-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  const images = [];
  const frameObj = { current: 1 };
  let isReady = false;
  let activeStageIdx = -1;

  function getFramePath(idx) {
    const num = Math.min(frameCount, Math.max(1, idx));
    const pad = String(num).padStart(3, '0');
    const base = (window.district1_theme && window.district1_theme.assets_uri)
      ? window.district1_theme.assets_uri + '/hero-frames'
      : 'assets/hero-frames';
    return base + '/frame_' + pad + '.jpg';
  }

  function drawCover(img) {
    if (!ctx || !img || !img.complete || !img.naturalWidth) return;
    const cw = canvas.width;
    const ch = canvas.height;
    const iw = img.naturalWidth;
    const ih = img.naturalHeight;

    const r = Math.max(cw / iw, ch / ih);
    const nw = iw * r;
    const nh = ih * r;
    const cx = (cw - nw) * 0.5;
    const cy = (ch - nh) * 0.5;

    ctx.clearRect(0, 0, cw, ch);
    ctx.drawImage(img, cx, cy, nw, nh);
  }

  function renderCanvas(index) {
    if (!ctx || !canvas) return;
    const idx = Math.min(frameCount, Math.max(1, Math.round(index)));
    const img = images[idx - 1];
    if (img && img.complete) {
      drawCover(img);
    }
  }

  function resizeCanvas() {
    canvas.width = window.innerWidth * Math.min(window.devicePixelRatio, 2);
    canvas.height = window.innerHeight * Math.min(window.devicePixelRatio, 2);
    renderCanvas(frameObj.current);
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  // Preload First Frame IMMEDIATELY
  const firstImg = new Image();
  firstImg.src = getFramePath(1);
  firstImg.onload = () => {
    images[0] = firstImg;
    drawCover(firstImg);
  };

  const preloader = document.getElementById('site-preloader');
  const preloaderBar = document.getElementById('preloader-bar');
  const preloaderCounter = document.getElementById('preloader-count');

  function dismissPreloader() {
    if (isReady) return;
    isReady = true;
    update3DBuildingProgress(100);
    if (preloaderBar) preloaderBar.style.width = '100%';
    if (preloaderCounter) preloaderCounter.textContent = '100%';

    setTimeout(() => {
      if (preloader) {
        preloader.classList.add('loaded');
        setTimeout(() => {
          preloader.style.display = 'none';
          if (typeof ScrollTrigger !== 'undefined') {
            ScrollTrigger.refresh();
          }
        }, 600);
      }
      initMasterHeroTimeline();
    }, 400);
  }

  // Safety fallback: dismiss preloader after 2.4s max
  setTimeout(dismissPreloader, 2400);

  let loadedCount = 0;
  for (let i = 1; i <= frameCount; i++) {
    const img = new Image();
    img.src = getFramePath(i);
    img.onload = () => {
      loadedCount++;
      const pct = Math.round((loadedCount / frameCount) * 100);
      if (preloaderBar) preloaderBar.style.width = pct + '%';
      if (preloaderCounter) preloaderCounter.textContent = pct + '%';
      update3DBuildingProgress(pct);

      if (loadedCount >= 18 || loadedCount === frameCount) {
        dismissPreloader();
      }
    };
    img.onerror = () => {
      loadedCount++;
      if (loadedCount >= 18 || loadedCount === frameCount) {
        dismissPreloader();
      }
    };
    images[i - 1] = img;
  }

  // Narrative Stage Switching — GUARANTEED STRICT SINGLE STAGE
  const stages = [
    document.getElementById('stage-1'),
    document.getElementById('stage-2'),
    document.getElementById('stage-3'),
    document.getElementById('stage-4')
  ];

  function setStage(idx) {
    if (idx === activeStageIdx) return;
    activeStageIdx = idx;

    stages.forEach((stg, i) => {
      if (!stg) return;
      if (i === idx) {
        stg.style.display = 'block';
        stg.style.visibility = 'visible';
        stg.classList.add('active');
        if (typeof gsap !== 'undefined') {
          gsap.fromTo(stg, 
            { opacity: 0, y: 15 }, 
            { opacity: 1, y: 0, duration: 0.35, ease: 'power2.out', overwrite: 'auto' }
          );
        } else {
          stg.style.opacity = '1';
        }
      } else {
        stg.classList.remove('active');
        stg.style.display = 'none';
        stg.style.visibility = 'hidden';
        stg.style.opacity = '0';
      }
    });
  }

  setStage(0);

  function updateNarrativeStage(progress) {
    if (progress < 0.25) setStage(0);
    else if (progress < 0.50) setStage(1);
    else if (progress < 0.75) setStage(2);
    else setStage(3);
  }

  // =========================================================================
  // MASTER GSAP SCROLLTRIGGER TIMELINE (10.0 SECONDS MAPPED TO SCROLL)
  // =========================================================================
  function initMasterHeroTimeline() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const heroSection = document.getElementById('hero-section');
    const header = document.getElementById('site-header');
    if (!heroSection) return;

    // Reset initial states
    gsap.set('#curtain-zoom-box', {
      scale: 0.35,
      borderRadius: '28px',
      opacity: 0,
      transformOrigin: 'center center'
    });
    gsap.set('#curtain-door-left', { xPercent: 0, opacity: 1 });
    gsap.set('#curtain-door-right', { xPercent: 0, opacity: 1 });
    gsap.set('#curtain-center-seam', { opacity: 0 });
    gsap.set('#curtain-revealed-stage', { opacity: 0 });

    const masterTL = gsap.timeline({
      scrollTrigger: {
        trigger: '#hero-section',
        start: 'top top',
        end: '+=4800',
        pin: true,
        scrub: 0.5,
        anticipatePin: 1,
        onUpdate: (self) => {
          // Phase 1: Narrative stages (0.00 to 0.42)
          const scrubProgress = Math.min(1, self.progress / 0.42);
          updateNarrativeStage(scrubProgress);

          // Navbar: completely hidden in hero (0% - 75%), smoothly reveals on Stage 4 (> 78%)
          if (header && !document.body.classList.contains('interior-page')) {
            if (self.progress > 0.78) {
              header.classList.add('floating-nav-active');
            } else {
              header.classList.remove('floating-nav-active');
            }
          }
        }
      }
    });

    // Phase 1: 120-Frame Video Scrubber (0.0s -> 4.5s)
    masterTL.to(frameObj, {
      current: frameCount,
      ease: 'none',
      duration: 4.5,
      onUpdate: () => {
        renderCanvas(frameObj.current);
      }
    }, 0);

    // Fade out text stages (4.0s -> 4.5s)
    masterTL.to('#hero-cinematic-stages-container', {
      opacity: 0,
      y: 25,
      duration: 0.5,
      ease: 'power2.in'
    }, 4.0);

    // Phase 2: Center Zoom Box (4.5s -> 7.0s)
    masterTL.fromTo('#curtain-zoom-box', 
      { scale: 0.35, opacity: 0, borderRadius: '28px' },
      { scale: 1.0, opacity: 1, borderRadius: '0px', duration: 2.5, ease: 'power2.out' },
      4.5
    );

    masterTL.to('#curtain-revealed-stage', { opacity: 1, duration: 0.3 }, 6.7);
    masterTL.to('#curtain-center-seam', { opacity: 1, duration: 0.3 }, 6.8);

    // Phase 3: Split Doors Slide (7.0s -> 9.5s)
    masterTL.to('#curtain-door-left', { xPercent: -100, duration: 2.5, ease: 'power2.inOut' }, 7.0);
    masterTL.to('#curtain-door-right', { xPercent: 100, duration: 2.5, ease: 'power2.inOut' }, 7.0);
    masterTL.to('#curtain-center-seam', { opacity: 0, duration: 0.5 }, 7.2);

    // Phase 4: Stats Cards Pop In (7.8s -> 9.6s)
    masterTL.fromTo('#curtain-revealed-stage .stat-card',
      { scale: 0.85, y: 35, opacity: 0 },
      { scale: 1.0, y: 0, opacity: 1, duration: 1.2, stagger: 0.2, ease: 'back.out(1.4)' },
      7.8
    );
  }

  // 3D Mouse Parallax
  const heroWrapper = document.getElementById('hero-section');
  const heroSceneContainer = document.getElementById('hero-3d-scene-container');
  const heroStagesContainer = document.getElementById('hero-cinematic-stages-container');

  if (heroWrapper) {
    let mX = 0, mY = 0, curX = 0, curY = 0, isMouseIn = false;

    heroWrapper.addEventListener('mousemove', (e) => {
      isMouseIn = true;
      const rect = heroWrapper.getBoundingClientRect();
      mX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
      mY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
    });

    heroWrapper.addEventListener('mouseleave', () => {
      isMouseIn = false;
      mX = 0; mY = 0;
    });

    function loopParallax() {
      if (isMouseIn) {
        curX += (mX - curX) * 0.05;
        curY += (mY - curY) * 0.05;

        if (heroSceneContainer) {
          heroSceneContainer.style.transform = `perspective(1200px) rotateY(${curX * 1.8}deg) rotateX(${-curY * 1.5}deg) scale(1.015)`;
        }
        if (heroStagesContainer) {
          heroStagesContainer.style.transform = `translate3d(${-curX * 10}px, ${-curY * 6}px, 0)`;
        }
      }
      requestAnimationFrame(loopParallax);
    }
    loopParallax();
  }

})();
