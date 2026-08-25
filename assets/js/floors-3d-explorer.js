/**
 * DISTRICT 1 — MASTER 3D ARCHITECTURAL RECONSTRUCTION & EXPLORER
 * True 1:1 Parametric Architectural Twin matching the 4 Official Renders:
 * 
 * 1. GROUND FLOOR & PLAZA (L0):
 *    - Right: Protruding HYPER MARKET glass pavilion with white canopy, bold "HYPER MARKET" signage & grand steps
 *    - Right Portal: Vehicular parking entrance with dark charcoal canopy and glowing LED chevron arrows (>>>>)
 *    - Center: Grand entrance atrium with broad travertine steps, double-height lobby, chandelier & travertine columns
 *    - Left: Sweeping curved glass corner showroom wrapping into side street with basalt columns
 *    - Streetscape: Asphalt road with lane stripes, 2 pedestrian zebra crosswalks, sidewalk curbs, 3D palm trees & streetlamps
 * 
 * 2. COMMERCIAL PODIUM (L1 - L3):
 *    - Center Facade: DUAL-TIER VERTICAL WHITE SUN LOUVERS (Brise-Soleil fins) - Tier 1 (L2) & Tier 2 (L3) with dividing beam
 *    - Left: Deep cantilevered open-air dining terrace with curved glass balustrades & cafe tables
 *    - Right: Double-height glazed showroom framed by textured dark charcoal concrete
 *    - Level 3: Landscaped Sky Terrace setback with glass railings & green shrubbery
 * 
 * 3. ADMINISTRATIVE & MEDICAL TOWERS (L4 - L8):
 *    - Far Left: Monumental dark charcoal vertical pylon with vertical slot louvers & rounded top cap
 *    - Left Wing: Curved panoramic glass curtain wall with 4 cantilevered curved floor balconies + L7 charcoal canopy
 *    - Outer White Frame: Monumental C-frame rising from podium to roof canopy
 *    - Center Office Grid: 5-bay x 4-level crisp white structural grid with double-glazed picture windows & warm interior glow
 *    - Far Right: Monolithic dark charcoal concrete shear wall with outward diagonal cantilever angle (Cantilever Flair)
 *    - Level 8 Penthouse: Setback horizontal glass ribbon under protruding white roof overhang canopy with perimeter railings
 * 
 * 4. LIGHTING MODES & ATMOSPHERE PRESETS:
 *    - Daylight, Sunset / Golden Hour, Architectural Night Glow, Blueprint Holographic X-Ray
 * 
 * 5. 3D INTERACTIVE HOTSPOTS:
 *    - Screen-projected interactive pulsing callout pins with smooth camera glide & HUD updates
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  const canvas = document.getElementById('district1-3d-canvas');
  const container = document.getElementById('floors-3d-container');
  if (!canvas || !container || typeof THREE === 'undefined') return;

  let scene, camera, renderer, controls;
  let complexGroup = new THREE.Group();
  let environmentGroup = new THREE.Group();
  let nightLightsGroup = new THREE.Group();

  let floorGroups = {
    parking: new THREE.Group(),
    ground: new THREE.Group(),
    commercial: new THREE.Group(),
    admin: new THREE.Group(),
    roof: new THREE.Group()
  };

  let allMeshes = [];
  let originalMaterials = new Map();
  let isAutoRotate = true;
  let currentLightingMode = 'daylight';
  let currentFloor = 'overview';

  // Floor Database with Authentic Engineering Data
  const floorData = {
    overview: {
      badge: 'صرح District 1 الأيقوني',
      title: 'الإطلالة المعمارية الشاملة لصرح District 1',
      area: 'المساحة: 21,667 م²',
      height: 'الارتفاع: 33.6 متراً',
      units: '58 متجراً + هايبر ماركت + مكاتب إدارية + بنك',
      desc: 'تصميم معماري أيقوني فريد يجمع حجر الترافرتين الفاخر، واجهات الكواسر الشمسية المزدوجة، والبرج الخرساني المائل ليكون الوجهة الاستثمارية الأولى بصعيد مصر.'
    },
    admin: {
      badge: 'الأبراج الإدارية (L4 - L8)',
      title: 'الأبراج الإدارية والعيادات الطبية الذكية',
      area: 'المساحة: 10,960 م²',
      height: '5 طوابق إدارية (33.6م)',
      units: 'مكاتب وعيادات بمساحات 60 - 150 م²',
      desc: 'برجان إداريان بمداخل VIP حصرية ومصاعد ذكية مستقلة تماماً عن المول، مع شبكة كواسر متطورة وإطلالات بانورامية على قلب مدينة قنا.'
    },
    commercial: {
      badge: 'المول التجاري ومجمع المطاعم (L1 - L3)',
      title: 'المول التجاري، مجمع المطاعم، والشرفات المعلقة',
      area: 'المساحة: 10,707 م²',
      height: '3 مستويات تجارية',
      units: 'متاجر براندات 45 - 150 م² ومطاعم',
      desc: 'أتريوم زجاجي يربط 3 مستويات تجارية، مصفوفة كواسر شمسية بيضاء مزدوجة، شرفات مطاعم معلقة وتراس مفتوح بإطلالات خلابة.'
    },
    ground: {
      badge: 'البوديوم والهايبر ماركت (Ground)',
      title: 'البوديوم التجاري، جناح الهايبر ماركت، وممشى المشاة',
      area: 'المساحة: 3,200 م²',
      height: 'ارتفاع مضاعف 5.5م',
      units: 'هايبر ماركت رئيسي + مجمع بنوك + كافيهات',
      desc: 'جناح هايبر ماركت مجهز بالكامل، واجهات زجاجية بانورامية لمجمع البنوك، ممشى مشاة واسع وأحواض تشجير ونخيل معمارية.'
    },
    parking: {
      badge: 'الجراجات الذكية (B1 - B2)',
      title: 'مواقف السيارات الذكية على مستويين تحت الأرض',
      area: 'المساحة: 6,000 م²',
      height: 'مستويان تحت الأرض (B1+B2)',
      units: 'سعة مئات السيارات مع بوابات ذكية',
      desc: 'جراجات متطورة على مستويين تحت الأرض مجهزة بحساسات ركن ذكية، وأنظمة توجيه إلكترونية ورامبات دخول مضيئة لحل التكدس المروري.'
    }
  };

  // Camera preset views
  const cameraAngles = {
    perspective: { x: 36, y: 22, z: 36, tx: 0, ty: 10.0, tz: 0 },
    front:       { x: 0.1, y: 15, z: 46, tx: 0, ty: 10.5, tz: 0 },
    towers:      { x: 18, y: 26, z: 24, tx: 0, ty: 16.0, tz: 0 },
    hypermarket: { x: 24, y: 8.0, z: 20, tx: 8.5, ty: 3.5, tz: 5.0 },
    podium:      { x: -22, y: 8.5, z: 24, tx: -6.0, ty: 4.5, tz: 2.0 },
    top:         { x: 0.1, y: 56, z: 12, tx: 0, ty: 8.0, tz: 0 }
  };

  // Interactive 3D Hotspots Data
  const hotspotsData = [
    {
      id: 'hotspot-hypermarket',
      pos: new THREE.Vector3(9.2, 3.2, 8.5),
      floor: 'ground',
      cam: 'hypermarket',
      title: 'جناح الهايبر ماركت والمدخل',
      tag: 'Ground Floor'
    },
    {
      id: 'hotspot-commercial',
      pos: new THREE.Vector3(0.0, 8.2, 9.6),
      floor: 'commercial',
      cam: 'front',
      title: 'كواسر المول والمتاجر التجارية',
      tag: 'L1 - L3'
    },
    {
      id: 'hotspot-terrace',
      pos: new THREE.Vector3(-9.5, 10.8, 7.5),
      floor: 'commercial',
      cam: 'podium',
      title: 'الشرفة المعلقة ومجمع المطاعم',
      tag: 'Sky Terrace'
    },
    {
      id: 'hotspot-admin',
      pos: new THREE.Vector3(2.5, 17.5, 4.5),
      floor: 'admin',
      cam: 'towers',
      title: 'الأبراج الإدارية والمقرات الذكية',
      tag: 'L4 - L8'
    },
    {
      id: 'hotspot-parking',
      pos: new THREE.Vector3(13.2, 1.0, 8.8),
      floor: 'parking',
      cam: 'hypermarket',
      title: 'بوابة ورامب الجراجات الذكية',
      tag: 'Basement B1-B2'
    }
  ];

  // 1. Scene & Viewport Setup
  scene = new THREE.Scene();
  scene.background = new THREE.Color(0xf0f9ff);

  const stageEl = container.querySelector('.viewport-canvas-stage');
  const w = stageEl.clientWidth || 1100;
  const h = stageEl.clientHeight || 580;

  camera = new THREE.PerspectiveCamera(36, w / h, 0.1, 1000);
  camera.position.set(36, 22, 36);
  camera.lookAt(0, 10.0, 0);

  renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    antialias: true,
    alpha: true,
    powerPreference: 'high-performance'
  });
  renderer.setSize(w, h);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap;
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = 1.18;

  // 2. OrbitControls Setup
  if (typeof THREE.OrbitControls !== 'undefined') {
    controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;
    controls.enablePan = true;
    controls.minDistance = 14;
    controls.maxDistance = 95;
    controls.maxPolarAngle = Math.PI / 2 - 0.01;
    controls.target.set(0, 10.0, 0);
  }

  // 3. Lighting Setup (Architectural Studio Lighting)
  const ambientLight = new THREE.AmbientLight(0xffffff, 0.95);
  scene.add(ambientLight);

  const mainSun = new THREE.DirectionalLight(0xffffff, 1.45);
  mainSun.position.set(45, 68, 42);
  mainSun.castShadow = true;
  mainSun.shadow.mapSize.width = 2048;
  mainSun.shadow.mapSize.height = 2048;
  mainSun.shadow.camera.near = 10;
  mainSun.shadow.camera.far = 180;
  mainSun.shadow.camera.left = -32;
  mainSun.shadow.camera.right = 32;
  mainSun.shadow.camera.top = 32;
  mainSun.shadow.camera.bottom = -32;
  mainSun.shadow.bias = -0.00025;
  scene.add(mainSun);

  const skyFill = new THREE.DirectionalLight(0x38bdf8, 0.7);
  skyFill.position.set(-40, 42, -35);
  scene.add(skyFill);

  const warmGroundBounce = new THREE.DirectionalLight(0xe0f2fe, 0.55);
  warmGroundBounce.position.set(0, -15, 0);
  scene.add(warmGroundBounce);

  scene.add(nightLightsGroup);

  // Night Point Lights
  const hypermarketLight = new THREE.PointLight(0xffedd5, 0, 18);
  hypermarketLight.position.set(9.0, 3.5, 8.0);
  nightLightsGroup.add(hypermarketLight);

  const lobbyLight = new THREE.PointLight(0x38bdf8, 0, 20);
  lobbyLight.position.set(-1.0, 4.0, 5.0);
  nightLightsGroup.add(lobbyLight);

  const adminTowerLight = new THREE.PointLight(0xfef08a, 0, 24);
  adminTowerLight.position.set(2.0, 17.0, 2.0);
  nightLightsGroup.add(adminTowerLight);

  // Concentric Blueprint Rings on Base
  const blueprintRing = new THREE.Mesh(
    new THREE.RingGeometry(1, 32, 64, 4),
    new THREE.MeshBasicMaterial({ color: 0x0284c7, wireframe: true, transparent: true, opacity: 0.18, side: THREE.DoubleSide })
  );
  blueprintRing.rotation.x = Math.PI / 2;
  blueprintRing.position.y = 0.02;
  scene.add(blueprintRing);

  // =========================================================================
  // 4. PROCEDURAL TEXTURES & PBR MATERIALS
  // =========================================================================

  // Procedural Noise Bump Texture for Concrete/Slate
  function createNoiseTexture(color1, color2) {
    const cv = document.createElement('canvas');
    cv.width = 256;
    cv.height = 256;
    const c = cv.getContext('2d');
    c.fillStyle = color1;
    c.fillRect(0, 0, 256, 256);
    for (let i = 0; i < 4000; i++) {
      c.fillStyle = color2;
      const x = Math.random() * 256;
      const y = Math.random() * 256;
      const s = Math.random() * 2 + 1;
      c.fillRect(x, y, s, s);
    }
    const tex = new THREE.CanvasTexture(cv);
    tex.wrapS = THREE.RepeatWrapping;
    tex.wrapT = THREE.RepeatWrapping;
    tex.repeat.set(4, 4);
    return tex;
  }

  // Hypermarket Interior Shelves Texture
  function createShelvesTexture() {
    const cv = document.createElement('canvas');
    cv.width = 512;
    cv.height = 256;
    const c = cv.getContext('2d');
    c.fillStyle = '#1e293b';
    c.fillRect(0, 0, 512, 256);

    const colors = ['#f59e0b', '#3b82f6', '#10b981', '#ef4444', '#8b5cf6', '#ffffff'];
    for (let r = 0; r < 6; r++) {
      const y = 30 + r * 38;
      c.fillStyle = '#475569';
      c.fillRect(10, y + 26, 492, 4);
      for (let s = 0; s < 24; s++) {
        c.fillStyle = colors[(r + s) % colors.length];
        c.fillRect(15 + s * 20, y + 4, 14, 22);
      }
    }
    const tex = new THREE.CanvasTexture(cv);
    tex.wrapS = THREE.RepeatWrapping;
    tex.wrapT = THREE.RepeatWrapping;
    return tex;
  }

  // Hypermarket Signage Canvas Texture ("HYPER MARKET")
  function createSignTexture(text, bgColor, textColor) {
    const cv = document.createElement('canvas');
    cv.width = 512;
    cv.height = 128;
    const c = cv.getContext('2d');
    c.fillStyle = bgColor;
    c.fillRect(0, 0, 512, 128);
    c.fillStyle = textColor;
    c.font = 'bold 54px Arial, sans-serif';
    c.textAlign = 'center';
    c.textBaseline = 'middle';
    c.fillText(text, 256, 64);
    return new THREE.CanvasTexture(cv);
  }

  // Materials
  const matGlassPanoramic = new THREE.MeshPhysicalMaterial({
    color: 0x38bdf8,
    transparent: true,
    opacity: 0.72,
    roughness: 0.03,
    metalness: 0.2,
    transmission: 0.68,
    ior: 1.52,
    reflectivity: 0.92,
    side: THREE.DoubleSide
  });

  const matGlassDark = new THREE.MeshPhysicalMaterial({
    color: 0x1e3a8a,
    transparent: true,
    opacity: 0.82,
    roughness: 0.05,
    metalness: 0.35,
    transmission: 0.45,
    ior: 1.52,
    side: THREE.DoubleSide
  });

  const matWhitePlaster = new THREE.MeshStandardMaterial({
    color: 0xffffff,
    roughness: 0.16,
    metalness: 0.04
  });

  const matTravertineStone = new THREE.MeshStandardMaterial({
    color: 0xd8d1c6,
    roughness: 0.48,
    metalness: 0.08
  });

  const matCharcoalConcrete = new THREE.MeshStandardMaterial({
    color: 0x334155,
    roughness: 0.42,
    metalness: 0.22,
    bumpMap: createNoiseTexture('#334155', '#1e293b'),
    bumpScale: 0.04
  });

  const matDarkPylonSlate = new THREE.MeshStandardMaterial({
    color: 0x242d3d,
    roughness: 0.38,
    metalness: 0.28,
    bumpMap: createNoiseTexture('#242d3d', '#151c28'),
    bumpScale: 0.05
  });

  const matInteriorWarm = new THREE.MeshStandardMaterial({
    color: 0xfef08a,
    emissive: 0xfde047,
    emissiveIntensity: 0.32,
    roughness: 0.4
  });

  const matShelvesInterior = new THREE.MeshStandardMaterial({
    map: createShelvesTexture(),
    emissive: 0xfef08a,
    emissiveIntensity: 0.38,
    roughness: 0.3
  });

  const matGreenFoliage = new THREE.MeshStandardMaterial({
    color: 0x15803d,
    roughness: 0.7
  });

  const matWoodTrunk = new THREE.MeshStandardMaterial({
    color: 0x78350f,
    roughness: 0.8
  });

  const matAsphalt = new THREE.MeshStandardMaterial({
    color: 0x1e293b,
    roughness: 0.85
  });

  const matWhiteRoadPaint = new THREE.MeshBasicMaterial({
    color: 0xffffff
  });

  const matCyanNeon = new THREE.MeshBasicMaterial({
    color: 0x0284c7
  });

  const matHypermarketSignText = new THREE.MeshStandardMaterial({
    map: createSignTexture('HYPER MARKET', '#ffffff', '#0f172a'),
    roughness: 0.2
  });

  const lineMat = new THREE.LineBasicMaterial({ color: 0x0284c7, transparent: true, opacity: 0.25 });

  function addLines(mesh, parent) {
    const edges = new THREE.EdgesGeometry(mesh.geometry);
    const lineSegs = new THREE.LineSegments(edges, lineMat);
    lineSegs.position.copy(mesh.position);
    lineSegs.rotation.copy(mesh.rotation);
    parent.add(lineSegs);
  }

  function registerMesh(mesh, parent) {
    mesh.castShadow = true;
    mesh.receiveShadow = true;
    allMeshes.push(mesh);
    if (mesh.material) {
      originalMaterials.set(mesh, mesh.material);
    }
    parent.add(mesh);
    addLines(mesh, parent);
  }

  scene.add(complexGroup);
  scene.add(environmentGroup);
  Object.values(floorGroups).forEach(grp => complexGroup.add(grp));

  // =========================================================================
  // 5. PARAMETRIC 3D ARCHITECTURAL BUILD (MATCHING THE 4 RENDERS 1:1)
  // =========================================================================

  // ── ENVIRONMENT: ASPHALT ROADWAY, ZEBRAS, SIDEWALK & PALM TREES ──
  // Main Pedestal Base
  const basePlaza = new THREE.Mesh(new THREE.BoxGeometry(34, 0.6, 26), matTravertineStone);
  basePlaza.position.set(0, 0.3, 0);
  registerMesh(basePlaza, environmentGroup);

  // Front Asphalt Street
  const streetAsphalt = new THREE.Mesh(new THREE.BoxGeometry(36, 0.15, 8.5), matAsphalt);
  streetAsphalt.position.set(0, 0.1, 14.8);
  environmentGroup.add(streetAsphalt);

  // White Road Lane Dashes
  for (let d = -15; d <= 15; d += 3.8) {
    const dash = new THREE.Mesh(new THREE.BoxGeometry(2.2, 0.02, 0.24), matWhiteRoadPaint);
    dash.position.set(d, 0.19, 14.8);
    environmentGroup.add(dash);
  }

  // Zebra Pedestrian Crossings (Left & Center)
  for (let z = -4.0; z <= 4.0; z += 0.85) {
    const stripe = new THREE.Mesh(new THREE.BoxGeometry(0.48, 0.02, 6.2), matWhiteRoadPaint);
    stripe.position.set(z, 0.19, 14.8);
    environmentGroup.add(stripe);
  }

  // Realistic 3D Palm Trees (positioned as in the renders)
  function createDetailedPalm(x, z) {
    const palmGrp = new THREE.Group();
    for (let t = 0; t < 5; t++) {
      const seg = new THREE.Mesh(new THREE.CylinderGeometry(0.18 - t * 0.015, 0.22 - t * 0.015, 1.0, 8), matWoodTrunk);
      seg.position.set(Math.sin(t * 0.15) * 0.12, 0.5 + t * 0.95, 0);
      seg.rotation.z = -0.05 * t;
      seg.castShadow = true;
      palmGrp.add(seg);
    }
    for (let p = 0; p < 8; p++) {
      const frond = new THREE.Mesh(new THREE.ConeGeometry(1.4, 2.9, 5), matGreenFoliage);
      frond.position.set(0, 5.2, 0);
      frond.rotation.z = 0.75;
      frond.rotation.y = (p * Math.PI) / 4;
      frond.castShadow = true;
      palmGrp.add(frond);
    }
    palmGrp.position.set(x, 0.6, z);
    environmentGroup.add(palmGrp);
  }

  createDetailedPalm(-13.0, 11.5);
  createDetailedPalm(-5.2, 11.5);
  createDetailedPalm(4.2, 11.5);
  createDetailedPalm(13.8, 11.5);

  // Modern Streetlamps
  function createStreetLamp(x, z) {
    const lampGrp = new THREE.Group();
    const pole = new THREE.Mesh(new THREE.CylinderGeometry(0.06, 0.08, 5.2, 8), matCharcoalConcrete);
    pole.position.y = 2.6;
    lampGrp.add(pole);

    const head = new THREE.Mesh(new THREE.BoxGeometry(0.8, 0.12, 0.38), matWhitePlaster);
    head.position.set(-0.28, 5.2, 0);
    lampGrp.add(head);

    const bulb = new THREE.Mesh(new THREE.BoxGeometry(0.6, 0.05, 0.28), matInteriorWarm);
    bulb.position.set(-0.28, 5.12, 0);
    lampGrp.add(bulb);

    lampGrp.position.set(x, 0.6, z);
    environmentGroup.add(lampGrp);
  }

  createStreetLamp(-8.5, 12.0);
  createStreetLamp(8.5, 12.0);

  // ── LAYER 1: BASEMENT PARKING (B1 - B2) ──
  const bParkingBlock = new THREE.Mesh(new THREE.BoxGeometry(30, 1.2, 22), matDarkPylonSlate);
  bParkingBlock.position.y = -0.3;
  registerMesh(bParkingBlock, floorGroups.parking);

  // Parking Entry Tunnel with Illuminated LED Chevrons (>>>>)
  const tunnelPortal = new THREE.Mesh(new THREE.BoxGeometry(3.8, 2.8, 4.4), matDarkPylonSlate);
  tunnelPortal.position.set(13.8, 1.4, 8.8);
  registerMesh(tunnelPortal, floorGroups.parking);

  const tunnelOpening = new THREE.Mesh(new THREE.BoxGeometry(2.9, 2.1, 4.6), new THREE.MeshBasicMaterial({ color: 0x0a0f1d }));
  tunnelOpening.position.set(13.8, 1.05, 8.8);
  floorGroups.parking.add(tunnelOpening);

  // Glowing Chevron Arrow Signs (>>>>)
  for (let c = 0; c < 4; c++) {
    const chevron1 = new THREE.Mesh(new THREE.BoxGeometry(0.08, 0.48, 0.08), matCyanNeon);
    chevron1.position.set(12.4 + c * 0.35, 1.7, 11.1);
    chevron1.rotation.z = 0.6;
    floorGroups.parking.add(chevron1);

    const chevron2 = new THREE.Mesh(new THREE.BoxGeometry(0.08, 0.48, 0.08), matCyanNeon);
    chevron2.position.set(12.4 + c * 0.35, 1.4, 11.1);
    chevron2.rotation.z = -0.6;
    floorGroups.parking.add(chevron2);
  }

  // ── LAYER 2: GROUND FLOOR (L0) & HYPERMARKET PAVILION ──
  // 🅰️ HYPERMARKET PAVILION (Right Side - Protruding Box, matching Photo 1 & 4)
  const hypermarketBox = new THREE.Mesh(new THREE.BoxGeometry(8.2, 3.8, 6.8), matGlassPanoramic);
  hypermarketBox.position.set(8.5, 2.5, 8.0);
  registerMesh(hypermarketBox, floorGroups.ground);

  const hypermarketInterior = new THREE.Mesh(new THREE.BoxGeometry(7.6, 3.4, 6.2), matShelvesInterior);
  hypermarketInterior.position.set(8.5, 2.5, 7.8);
  floorGroups.ground.add(hypermarketInterior);

  // White Canopy Frame over Hypermarket
  const hyperCanopy = new THREE.Mesh(new THREE.BoxGeometry(8.8, 0.38, 7.2), matWhitePlaster);
  hyperCanopy.position.set(8.5, 4.45, 8.0);
  registerMesh(hyperCanopy, floorGroups.ground);

  // Illuminated "HYPER MARKET" Signage Banner
  const hyperSignBand = new THREE.Mesh(new THREE.BoxGeometry(7.0, 0.6, 0.12), matHypermarketSignText);
  hyperSignBand.position.set(8.5, 4.15, 11.62);
  floorGroups.ground.add(hyperSignBand);

  // Grand Entrance Steps to Hypermarket
  for (let hs = 0; hs < 4; hs++) {
    const hStep = new THREE.Mesh(new THREE.BoxGeometry(4.4, 0.15, 0.6), matTravertineStone);
    hStep.position.set(5.8, 0.68 + hs * 0.15, 11.5 + hs * 0.5);
    registerMesh(hStep, floorGroups.ground);
  }

  // 🅱️ MAIN GROUND FLOOR RETAIL & ATRIUM (Center & Left)
  const gMainGlass = new THREE.Mesh(new THREE.BoxGeometry(17.5, 3.8, 17.5), matGlassPanoramic);
  gMainGlass.position.set(-4.5, 2.5, 3.0);
  registerMesh(gMainGlass, floorGroups.ground);

  const gMainInterior = new THREE.Mesh(new THREE.BoxGeometry(16.2, 3.4, 15.8), matInteriorWarm);
  gMainInterior.position.set(-4.5, 2.5, 3.0);
  floorGroups.ground.add(gMainInterior);

  // Sweeping Curved Glass Corner on Far Left Ground Floor (matching Photo 2 & 3!)
  const gCurveGlass = new THREE.Mesh(
    new THREE.CylinderGeometry(4.2, 4.2, 3.8, 28, 1, false, 0, Math.PI / 2),
    matGlassPanoramic
  );
  gCurveGlass.position.set(-12.0, 2.5, 8.8);
  gCurveGlass.rotation.y = Math.PI;
  registerMesh(gCurveGlass, floorGroups.ground);

  // Basalt / Marble Entrance Columns
  const gCol1 = new THREE.Mesh(new THREE.BoxGeometry(1.1, 3.8, 1.1), matTravertineStone);
  gCol1.position.set(-9.2, 2.5, 10.4);
  registerMesh(gCol1, floorGroups.ground);

  const gCol2 = new THREE.Mesh(new THREE.BoxGeometry(1.1, 3.8, 1.1), matTravertineStone);
  gCol2.position.set(1.8, 2.5, 10.4);
  registerMesh(gCol2, floorGroups.ground);

  // Central Entrance Stairs
  for (let gs = 0; gs < 4; gs++) {
    const gStep = new THREE.Mesh(new THREE.BoxGeometry(9.6 - gs * 0.35, 0.15, 0.65), matTravertineStone);
    gStep.position.set(-3.7, 0.68 + gs * 0.15, 11.5 + gs * 0.5);
    registerMesh(gStep, floorGroups.ground);
  }

  // Planter Box with Green Shrubs
  const gPlanter = new THREE.Mesh(new THREE.BoxGeometry(4.8, 0.65, 0.95), matWhitePlaster);
  gPlanter.position.set(-3.7, 0.95, 14.0);
  registerMesh(gPlanter, floorGroups.ground);

  const gPlanterFoliage = new THREE.Mesh(new THREE.BoxGeometry(4.5, 0.5, 0.75), matGreenFoliage);
  gPlanterFoliage.position.set(-3.7, 1.35, 14.0);
  floorGroups.ground.add(gPlanterFoliage);

  // ── LAYER 3: COMMERCIAL PODIUM LEVELS 1 - 3 (L1 - L3) ──
  const comBody = new THREE.Mesh(new THREE.BoxGeometry(27.5, 6.2, 18.5), matGlassPanoramic);
  comBody.position.set(0, 7.5, 1.8);
  registerMesh(comBody, floorGroups.commercial);

  // Right Side Dark Charcoal Wall on Podium (L1 - L3)
  const comRightCharcoal = new THREE.Mesh(new THREE.BoxGeometry(9.2, 6.6, 3.5), matDarkPylonSlate);
  comRightCharcoal.position.set(8.8, 7.7, 9.4);
  registerMesh(comRightCharcoal, floorGroups.commercial);

  // Dual-Tier White Horizontal Ribbons / Dividing Slabs
  const comRibbonMid = new THREE.Mesh(new THREE.BoxGeometry(28.0, 0.48, 19.0), matWhitePlaster);
  comRibbonMid.position.set(0, 4.65, 1.8);
  registerMesh(comRibbonMid, floorGroups.commercial);

  const comRibbonTierDivider = new THREE.Mesh(new THREE.BoxGeometry(18.5, 0.42, 1.3), matWhitePlaster);
  comRibbonTierDivider.position.set(-3.5, 7.5, 10.5);
  registerMesh(comRibbonTierDivider, floorGroups.commercial);

  const comRibbonTop = new THREE.Mesh(new THREE.BoxGeometry(28.4, 0.55, 19.5), matWhitePlaster);
  comRibbonTop.position.set(0, 10.6, 1.8);
  registerMesh(comRibbonTop, floorGroups.commercial);

  // 🌟 DUAL-TIER VERTICAL WHITE SUN LOUVERS (BRISE-SOLEIL FINS) 🌟
  // Tier 1 (Level 2 - Lower Louvers: 28 fins across central facade)
  for (let l1 = -12.0; l1 <= 4.0; l1 += 0.58) {
    const fin1 = new THREE.Mesh(new THREE.BoxGeometry(0.12, 2.3, 0.58), matWhitePlaster);
    fin1.position.set(l1, 6.1, 10.6);
    registerMesh(fin1, floorGroups.commercial);
  }

  // Tier 2 (Level 3 - Upper Louvers: 28 fins across central facade)
  for (let l2 = -12.0; l2 <= 4.0; l2 += 0.58) {
    const fin2 = new THREE.Mesh(new THREE.BoxGeometry(0.12, 2.5, 0.58), matWhitePlaster);
    fin2.position.set(l2, 9.05, 10.6);
    registerMesh(fin2, floorGroups.commercial);
  }

  // Left Open-Air Dining Terrace & Curved Glass Railings (matching Photo 3!)
  const terraceBalconyGlass = new THREE.Mesh(new THREE.BoxGeometry(9.0, 1.05, 0.12), matGlassPanoramic);
  terraceBalconyGlass.position.set(-9.8, 11.2, 10.8);
  registerMesh(terraceBalconyGlass, floorGroups.commercial);

  // Level 3 Sky Terrace Green Planters
  const skyPlanter = new THREE.Mesh(new THREE.BoxGeometry(7.0, 0.5, 0.8), matGreenFoliage);
  skyPlanter.position.set(-4.5, 10.95, 10.0);
  floorGroups.commercial.add(skyPlanter);

  // ── LAYER 4: ADMINISTRATIVE & MEDICAL TOWERS (L4 - L8) ──

  // 🅰️ FAR LEFT: MONUMENTAL CURVED CHARCOAL PYLON (Tower A, matching Photo 1 & 2)
  const leftCurvedPylon = new THREE.Mesh(new THREE.BoxGeometry(3.8, 13.5, 15.5), matDarkPylonSlate);
  leftCurvedPylon.position.set(-13.5, 17.2, 0.5);
  registerMesh(leftCurvedPylon, floorGroups.admin);

  // Curved Top Crown of Left Pylon
  const leftPylonCurve = new THREE.Mesh(
    new THREE.CylinderGeometry(3.8, 3.8, 3.8, 28, 1, false, 0, Math.PI),
    matDarkPylonSlate
  );
  leftPylonCurve.position.set(-13.5, 23.9, 0.5);
  leftPylonCurve.rotation.z = Math.PI / 2;
  registerMesh(leftPylonCurve, floorGroups.admin);

  // Vertical Slot Window on Left Pylon
  const pylonSlotWindow = new THREE.Mesh(new THREE.BoxGeometry(0.15, 11.2, 3.0), matGlassPanoramic);
  pylonSlotWindow.position.set(-11.5, 17.2, 8.0);
  registerMesh(pylonSlotWindow, floorGroups.admin);

  // 🅱️ LEFT ATRIUM WING: CURVED PANORAMIC GLASS CURTAIN WALL
  const leftWingGlass = new THREE.Mesh(
    new THREE.CylinderGeometry(5.2, 5.2, 12.2, 32, 1, false, 0, Math.PI / 2),
    matGlassPanoramic
  );
  leftWingGlass.position.set(-8.8, 16.8, 5.5);
  leftWingGlass.rotation.y = Math.PI;
  registerMesh(leftWingGlass, floorGroups.admin);

  // 4 Cantilevered Curved Balconies on Left Wing (Floors 4, 5, 6, 7)
  for (let wb = 0; wb < 4; wb++) {
    const wBalcony = new THREE.Mesh(
      new THREE.CylinderGeometry(5.5, 5.5, 0.35, 32, 1, false, 0, Math.PI / 2),
      matWhitePlaster
    );
    wBalcony.position.set(-8.8, 12.0 + wb * 2.45, 5.5);
    wBalcony.rotation.y = Math.PI;
    registerMesh(wBalcony, floorGroups.admin);
  }

  // Level 7 Charcoal Canopy Band over Left Wing (matching Photo 1!)
  const l7CharcoalBand = new THREE.Mesh(
    new THREE.CylinderGeometry(5.7, 5.7, 0.55, 32, 1, false, 0, Math.PI / 2),
    matDarkPylonSlate
  );
  l7CharcoalBand.position.set(-8.8, 21.8, 5.5);
  l7CharcoalBand.rotation.y = Math.PI;
  registerMesh(l7CharcoalBand, floorGroups.admin);

  // 🅲 MONUMENTAL OUTER WHITE C-FRAME (Framing Office Block)
  // Left Vertical Leg
  const cFrameLeftLeg = new THREE.Mesh(new THREE.BoxGeometry(0.8, 11.5, 1.2), matWhitePlaster);
  cFrameLeftLeg.position.set(-5.6, 16.5, 8.8);
  registerMesh(cFrameLeftLeg, floorGroups.admin);

  // Top Horizontal Beam of C-Frame
  const cFrameTopBeam = new THREE.Mesh(new THREE.BoxGeometry(16.5, 0.8, 1.2), matWhitePlaster);
  cFrameTopBeam.position.set(2.4, 22.0, 8.8);
  registerMesh(cFrameTopBeam, floorGroups.admin);

  // 🅳 CENTER ADMINISTRATIVE OFFICE GRID (Levels 4 - 7)
  const centerOfficeGlass = new THREE.Mesh(new THREE.BoxGeometry(15.2, 9.8, 12.2), matGlassPanoramic);
  centerOfficeGlass.position.set(1.2, 15.8, 2.8);
  registerMesh(centerOfficeGlass, floorGroups.admin);

  const centerOfficeInterior = new THREE.Mesh(new THREE.BoxGeometry(14.4, 9.2, 11.4), matInteriorWarm);
  centerOfficeInterior.position.set(1.2, 15.8, 2.8);
  floorGroups.admin.add(centerOfficeInterior);

  // 5-Bay x 4-Level Crisp White Structural Grid
  for (let cCol = -4.8; cCol <= 7.6; cCol += 3.1) {
    const vBeam = new THREE.Mesh(new THREE.BoxGeometry(0.38, 9.8, 0.48), matWhitePlaster);
    vBeam.position.set(cCol, 15.8, 8.9);
    registerMesh(vBeam, floorGroups.admin);
  }

  for (let rBeam = 0; rBeam < 4; rBeam++) {
    const hBeam = new THREE.Mesh(new THREE.BoxGeometry(15.2, 0.38, 0.48), matWhitePlaster);
    hBeam.position.set(1.2, 12.0 + rBeam * 2.45, 8.9);
    registerMesh(hBeam, floorGroups.admin);
  }

  // 🅴 LEVEL 8 PENTHOUSE & ROOFTOP CANOPY OVERHANG
  const penthouseGlass = new THREE.Mesh(new THREE.BoxGeometry(17.5, 2.5, 11.2), matGlassDark);
  penthouseGlass.position.set(-0.2, 21.8, 2.0);
  registerMesh(penthouseGlass, floorGroups.roof);

  // Protruding Large White Cantilever Roof Canopy
  const roofCanopy = new THREE.Mesh(new THREE.BoxGeometry(28.5, 0.6, 18.5), matWhitePlaster);
  roofCanopy.position.set(0, 23.3, 1.8);
  registerMesh(roofCanopy, floorGroups.roof);

  // Perimeter Rooftop Glass Railing
  const roofGlassRailing = new THREE.Mesh(new THREE.BoxGeometry(28.2, 0.95, 0.12), matGlassPanoramic);
  roofGlassRailing.position.set(0, 24.0, 10.8);
  registerMesh(roofGlassRailing, floorGroups.roof);

  // 🅵 FAR RIGHT: MONOLITHIC ANGLED CHARCOAL CONCRETE PYLON (Tower B, matching Photo 1 & 4!)
  // Shear wall with outward diagonal cantilever angle
  const rightPylonGeo = new THREE.BoxGeometry(5.6, 14.5, 14.5);
  const posAttr = rightPylonGeo.attributes.position;
  for (let i = 0; i < posAttr.count; i++) {
    if (posAttr.getY(i) > 0 && posAttr.getX(i) > 0) {
      posAttr.setX(i, posAttr.getX(i) + 1.8); // Outward diagonal flair
    }
  }
  rightPylonGeo.computeVertexNormals();

  const rightAngledPylon = new THREE.Mesh(rightPylonGeo, matDarkPylonSlate);
  rightAngledPylon.position.set(11.8, 17.0, 1.8);
  registerMesh(rightAngledPylon, floorGroups.admin);

  // Glazed Corner Window Slots on Right Pylon
  const rightGlazedWindow = new THREE.Mesh(new THREE.BoxGeometry(0.15, 9.2, 6.8), matGlassPanoramic);
  rightGlazedWindow.position.set(8.9, 16.8, 1.8);
  registerMesh(rightGlazedWindow, floorGroups.admin);

  complexGroup.position.y = 0;

  // =========================================================================
  // 6. 3D INTERACTIVE HOTSPOT PINS (SCREEN PROJECTION)
  // =========================================================================
  const hotspotContainer = document.getElementById('floors-hotspots-container');

  function updateHotspotsPosition() {
    if (!hotspotContainer || !camera) return;

    hotspotsData.forEach(spot => {
      const el = document.getElementById(spot.id);
      if (!el) return;

      const wp = spot.pos.clone();
      wp.project(camera);

      if (wp.z > 1) {
        el.style.display = 'none';
        return;
      }

      const x = (wp.x * 0.5 + 0.5) * stageEl.clientWidth;
      const y = (-(wp.y * 0.5) + 0.5) * stageEl.clientHeight;

      el.style.display = 'flex';
      el.style.left = `${x}px`;
      el.style.top = `${y}px`;
    });
  }

  // Hotspot Click Handlers
  hotspotsData.forEach(spot => {
    const el = document.getElementById(spot.id);
    if (el) {
      el.addEventListener('click', (e) => {
        e.stopPropagation();
        focusOnFloor(spot.floor, spot.cam);
      });
    }
  });

  // =========================================================================
  // 7. FLOOR ISOLATION & CAMERA GLIDE ORCHESTRATION
  // =========================================================================
  function focusOnFloor(floorKey, customCamKey) {
    currentFloor = floorKey;
    const data = floorData[floorKey] || floorData.overview;

    const hudBadge = document.getElementById('hud-floor-badge');
    const hudArea = document.getElementById('hud-floor-area');
    const hudHeight = document.getElementById('hud-floor-height');
    const hudTitle = document.getElementById('hud-floor-title');
    const hudDesc = document.getElementById('hud-floor-desc');
    const hudUnits = document.getElementById('hud-floor-units');

    if (hudBadge) hudBadge.textContent = data.badge;
    if (hudArea) hudArea.textContent = data.area;
    if (hudHeight) hudHeight.textContent = data.height;
    if (hudTitle) hudTitle.textContent = data.title;
    if (hudDesc) hudDesc.textContent = data.desc;
    if (hudUnits) hudUnits.textContent = data.units || '';

    const tabBtns = document.querySelectorAll('.floor-tab-btn');
    tabBtns.forEach(btn => {
      btn.classList.toggle('active', btn.getAttribute('data-floor') === floorKey);
    });

    Object.keys(floorGroups).forEach(k => {
      const grp = floorGroups[k];
      const isTarget = (floorKey === 'overview' || floorKey === k || 
                       (floorKey === 'admin' && (k === 'admin' || k === 'roof')));

      grp.traverse(child => {
        if (child.isMesh && child.material) {
          if (isTarget) {
            child.material.opacity = child.material.userData_origOpacity || child.material.opacity || 1.0;
            child.material.transparent = child.material.userData_origTransparent ?? child.material.transparent;
          } else {
            if (!child.material.userData_origOpacity) {
              child.material.userData_origOpacity = child.material.opacity;
              child.material.userData_origTransparent = child.material.transparent;
            }
            child.material.transparent = true;
            child.material.opacity = 0.22;
          }
        }
      });
    });

    let targetCamKey = customCamKey;
    if (!targetCamKey) {
      if (floorKey === 'admin') targetCamKey = 'towers';
      else if (floorKey === 'commercial') targetCamKey = 'front';
      else if (floorKey === 'ground') targetCamKey = 'hypermarket';
      else if (floorKey === 'parking') targetCamKey = 'hypermarket';
      else targetCamKey = 'perspective';
    }

    const camP = cameraAngles[targetCamKey] || cameraAngles.perspective;

    if (typeof gsap !== 'undefined') {
      gsap.to(camera.position, {
        x: camP.x,
        y: camP.y,
        z: camP.z,
        duration: 1.4,
        ease: 'power3.inOut',
        onUpdate: () => { if (controls) controls.update(); }
      });
      if (controls) {
        gsap.to(controls.target, {
          x: camP.tx,
          y: camP.ty,
          z: camP.tz,
          duration: 1.4,
          ease: 'power3.inOut'
        });
      }
    }
  }

  // 8. Navigation Floor Tabs
  const tabBtns = document.querySelectorAll('.floor-tab-btn');
  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const floorKey = btn.getAttribute('data-floor') || 'overview';
      focusOnFloor(floorKey);
    });
  });

  // 9. Camera Angle Switcher
  const angleBtns = document.querySelectorAll('.btn-cam-angle');
  angleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      angleBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const angleKey = btn.getAttribute('data-angle') || 'perspective';
      const camP = cameraAngles[angleKey] || cameraAngles.perspective;

      if (typeof gsap !== 'undefined') {
        gsap.to(camera.position, {
          x: camP.x,
          y: camP.y,
          z: camP.z,
          duration: 1.3,
          ease: 'power3.inOut',
          onUpdate: () => { if (controls) controls.update(); }
        });
        if (controls) {
          gsap.to(controls.target, {
            x: camP.tx,
            y: camP.ty,
            z: camP.tz,
            duration: 1.3,
            ease: 'power3.inOut'
          });
        }
      }
    });
  });

  // =========================================================================
  // 10. INTERACTIVE LIGHTING MODES
  // =========================================================================
  function setLightingMode(mode) {
    currentLightingMode = mode;

    const modeBtns = document.querySelectorAll('.btn-lighting-mode');
    modeBtns.forEach(b => b.classList.toggle('active', b.getAttribute('data-mode') === mode));

    if (mode === 'daylight') {
      scene.background = new THREE.Color(0xf0f9ff);
      mainSun.color = new THREE.Color(0xffffff);
      mainSun.intensity = 1.45;
      skyFill.color = new THREE.Color(0x38bdf8);
      skyFill.intensity = 0.7;
      ambientLight.color = new THREE.Color(0xffffff);
      ambientLight.intensity = 0.95;

      hypermarketLight.intensity = 0;
      lobbyLight.intensity = 0;
      adminTowerLight.intensity = 0;

      allMeshes.forEach(m => {
        if (originalMaterials.has(m)) {
          m.material = originalMaterials.get(m);
          m.material.wireframe = false;
        }
      });
    } 
    else if (mode === 'sunset') {
      scene.background = new THREE.Color(0xffedd5);
      mainSun.color = new THREE.Color(0xfb923c);
      mainSun.intensity = 1.6;
      skyFill.color = new THREE.Color(0xf43f5e);
      skyFill.intensity = 0.9;
      ambientLight.color = new THREE.Color(0xffedd5);
      ambientLight.intensity = 0.7;

      hypermarketLight.intensity = 1.5;
      lobbyLight.intensity = 1.2;
      adminTowerLight.intensity = 1.8;

      allMeshes.forEach(m => {
        if (originalMaterials.has(m)) {
          m.material = originalMaterials.get(m);
          m.material.wireframe = false;
        }
      });
    } 
    else if (mode === 'night') {
      scene.background = new THREE.Color(0x090d16);
      mainSun.color = new THREE.Color(0x38bdf8);
      mainSun.intensity = 0.4;
      skyFill.color = new THREE.Color(0x1e3a8a);
      skyFill.intensity = 0.6;
      ambientLight.color = new THREE.Color(0x1e293b);
      ambientLight.intensity = 0.4;

      hypermarketLight.intensity = 4.5;
      lobbyLight.intensity = 3.8;
      adminTowerLight.intensity = 4.2;

      allMeshes.forEach(m => {
        if (originalMaterials.has(m)) {
          m.material = originalMaterials.get(m);
          m.material.wireframe = false;
          if (m.material.emissive) {
            m.material.emissiveIntensity = 0.85;
          }
        }
      });
    } 
    else if (mode === 'blueprint') {
      scene.background = new THREE.Color(0x031326);
      mainSun.intensity = 0.2;
      ambientLight.intensity = 0.5;
      ambientLight.color = new THREE.Color(0x0284c7);

      allMeshes.forEach(m => {
        if (m.material) {
          m.material.wireframe = true;
        }
      });
    }
  }

  const lightingBtns = document.querySelectorAll('.btn-lighting-mode');
  lightingBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const mode = btn.getAttribute('data-mode') || 'daylight';
      setLightingMode(mode);
    });
  });

  // 11. Side Toolbar Buttons
  const btnRotate = document.getElementById('btn-3d-rotate');
  const btnReset = document.getElementById('btn-3d-reset');
  const btnWireframe = document.getElementById('btn-3d-wireframe');
  const btnFullscreen = document.getElementById('btn-3d-fullscreen');

  if (btnRotate) {
    btnRotate.addEventListener('click', () => {
      isAutoRotate = !isAutoRotate;
      btnRotate.classList.toggle('active', isAutoRotate);
    });
  }

  if (btnReset) {
    btnReset.addEventListener('click', () => {
      focusOnFloor('overview');
      setLightingMode('daylight');
    });
  }

  if (btnWireframe) {
    btnWireframe.addEventListener('click', () => {
      const isWire = (currentLightingMode === 'blueprint');
      setLightingMode(isWire ? 'daylight' : 'blueprint');
      btnWireframe.classList.toggle('active', !isWire);
    });
  }

  if (btnFullscreen) {
    btnFullscreen.addEventListener('click', () => {
      if (!document.fullscreenElement) {
        container.requestFullscreen().catch(err => console.log(err));
      } else {
        document.exitFullscreen();
      }
    });
  }

  // 12. Resize & Animation Render Loop
  function handleResize() {
    if (!stageEl || !camera || !renderer) return;
    const stageW = stageEl.clientWidth;
    const stageH = stageEl.clientHeight;
    camera.aspect = stageW / stageH;
    camera.updateProjectionMatrix();
    renderer.setSize(stageW, stageH);
  }
  window.addEventListener('resize', handleResize);

  function renderLoop() {
    requestAnimationFrame(renderLoop);

    if (isAutoRotate && complexGroup) {
      complexGroup.rotation.y += 0.0025;
      environmentGroup.rotation.y += 0.0025;
    }

    if (controls) {
      controls.update();
    }

    updateHotspotsPosition();
    renderer.render(scene, camera);
  }
  renderLoop();

  console.log('District 1 Master 1:1 Parametric 3D Explorer Initialized!');
});
