/**
 * DISTRICT 1 — THREE.JS 3D AMBIENT PARTICLES & SMOOTH MOUSE PARALLAX
 * Removed Bottom Grid Squares completely for a crystal-clear, clean view.
 */

(function() {
  'use strict';

  const canvas = document.getElementById('three-hero-canvas');
  if (!canvas || typeof THREE === 'undefined') return;

  let scene, camera, renderer, particles;
  const particleCount = 75;
  let mouseX = 0, mouseY = 0;
  let targetX = 0, targetY = 0;

  function initThree() {
    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(
      55,
      window.innerWidth / window.innerHeight,
      0.1,
      1000
    );
    camera.position.z = 85;

    renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      alpha: true,
      antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Luminous Ethereal Dust Particles (No Bottom Grid)
    const geometry = new THREE.BufferGeometry();
    const positions = new Float32Array(particleCount * 3);
    const scales = new Float32Array(particleCount);

    for (let i = 0; i < particleCount; i++) {
      positions[i * 3]     = (Math.random() - 0.5) * 160;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 110;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 90;
      scales[i] = Math.random() * 1.8 + 0.6;
    }

    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('scale', new THREE.BufferAttribute(scales, 1));

    // Custom Round Glow Texture for particles
    const pCanvas = document.createElement('canvas');
    pCanvas.width = 64;
    pCanvas.height = 64;
    const pCtx = pCanvas.getContext('2d');
    const grad = pCtx.createRadialGradient(32, 32, 0, 32, 32, 32);
    grad.addColorStop(0, 'rgba(59, 130, 246, 1)');
    grad.addColorStop(0.4, 'rgba(37, 99, 235, 0.6)');
    grad.addColorStop(1, 'rgba(37, 99, 235, 0)');
    pCtx.fillStyle = grad;
    pCtx.fillRect(0, 0, 64, 64);

    const pTexture = new THREE.CanvasTexture(pCanvas);

    const material = new THREE.PointsMaterial({
      color: 0x60a5fa,
      size: 3.2,
      map: pTexture,
      transparent: true,
      opacity: 0.65,
      blending: THREE.AdditiveBlending,
      depthWrite: false
    });

    particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Mouse Move Interactive 3D Parallax Tracking
    window.addEventListener('mousemove', onMouseMove, { passive: true });
    window.addEventListener('resize', onResize);

    animate();
  }

  function onMouseMove(event) {
    // Normalized coordinates (-1 to +1)
    mouseX = (event.clientX / window.innerWidth - 0.5) * 2;
    mouseY = (event.clientY / window.innerHeight - 0.5) * 2;
  }

  function onResize() {
    if (!camera || !renderer) return;
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  }

  let clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);
    const elapsedTime = clock.getElapsedTime();

    // Smooth Damped Mouse Parallax Lerp
    targetX += (mouseX * 8 - targetX) * 0.04;
    targetY += (-mouseY * 6 - targetY) * 0.04;

    if (particles) {
      particles.rotation.y = elapsedTime * 0.03 + targetX * 0.02;
      particles.rotation.x = Math.sin(elapsedTime * 0.05) * 0.05 + targetY * 0.02;
    }

    camera.position.x = targetX;
    camera.position.y = targetY;
    camera.lookAt(scene.position);

    renderer.render(scene, camera);
  }

  initThree();
})();
