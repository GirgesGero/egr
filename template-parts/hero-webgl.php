<?php
/**
 * Template Part: Master 4-Phase Cinematic Hero Architecture
 * Phase 1: 120-Frame Video Scrubber & 4 Narrative Stages (0% - 45%)
 * Phase 2: Center-Emerging Zoom Box (48% - 70%)
 * Phase 3: Laser Flash & Split Doors Slide (72% - 94%)
 * Phase 4: Structural Stats Cards Reveal & Glass Navbar (78% - 100%)
 */
$theme_uri = get_template_directory_uri();
?>
<section id="hero-section" class="hero-pinned-wrapper">
    <!-- 3D Parallax Scene Container -->
    <div id="hero-3d-scene-container" class="hero-3d-scene-container">
        <!-- Three.js 3D Ambient Dust Particles Canvas -->
        <canvas id="three-hero-canvas"></canvas>

        <!-- 120-Frame High-Res Video Scrubber Canvas -->
        <canvas id="hero-frame-canvas"></canvas>

        <!-- Soft Cinematic Gradient Overlay -->
        <div class="hero-cinematic-overlay"></div>
    </div>

    <!-- Scroll Down Hint Indicator -->
    <div class="hero-scroll-hint">
        <div class="mouse-icon">
            <div class="mouse-wheel"></div>
        </div>
        <span>مرر للأسفل لاستكشاف أبعاد الصرح</span>
    </div>

    <!-- Phase 1: Narrative Stages (Strict Single Active Stage - Bottom Anchored) -->
    <div id="hero-cinematic-stages-container" class="hero-cinematic-stages-container">
        <!-- Stage 1: The Group & Corporate Vision (0% - 25%) -->
        <div id="stage-1" class="cinematic-stage active">
            <div class="cinematic-stage-inner">
                <div class="developer-corporate-tag">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>صرح <span class="sky-blue-highlight">District 1</span> الأيقوني في قلب قنا</span>
                </div>
                
                <h1 class="cinematic-main-title">
                    المجموعة الاقتصادية <span class="sky-blue-highlight">للاستثمار</span>
                    <span class="title-sub-line"><span class="sky-blue-highlight">EGR INVESTMENTS</span> // صُنّاع المستقبل العقاري بصعيد مصر</span>
                </h1>
                
                <div class="cinematic-bottom-bar">
                    <p class="cinematic-desc">
                        تقود <strong style="color: #fff;">المجموعة الاقتصادية للاستثمار (EGR)</strong> نهضة الاستثمار والتطوير العقاري بإطلاق صرحها الأيقوني <strong class="sky-blue-text">District 1</strong> بقلب قنا بمساحة 21,667 م² بارتفاع 33.6 متراً وتصميم معماري عالمي.
                    </p>
                    <div class="cinematic-action-wrap">
                        <a href="#floors-section" class="btn-cinematic-pill">
                            <span>استكشف المشروع</span>
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 2: Commercial Hub (25% - 50%) -->
        <div id="stage-2" class="cinematic-stage">
            <div class="cinematic-stage-inner">
                <div class="developer-corporate-tag">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>وجهة التسوق والاستثمار الأولى</span>
                </div>
                
                <h2 class="cinematic-main-title">
                    COMMERCIAL <span class="sky-blue-highlight">HUB</span>
                    <span class="title-sub-line"><span class="sky-blue-highlight">10,707 م²</span> للمتاجر والبراندات العالمية بإدارة EGR</span>
                </h2>
                
                <div class="cinematic-bottom-bar">
                    <p class="cinematic-desc">
                        3 مستويات تجارية متكاملة وهايبر ماركت رئيسي ومجمع مطاعم فاخرة بتدفق جماهيري حيوي ومباشر يضمن أعلى عائد استثماري بالصعيد.
                    </p>
                    <div class="cinematic-action-wrap">
                        <a href="#floors-section" class="btn-cinematic-pill">
                            <span>الطوابق التجارية</span>
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 3: Business Towers (50% - 75%) -->
        <div id="stage-3" class="cinematic-stage">
            <div class="cinematic-stage-inner">
                <div class="developer-corporate-tag">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>بيئة الأعمال والمقرات الذكية</span>
                </div>
                
                <h2 class="cinematic-main-title">
                    BUSINESS <span class="sky-blue-highlight">TOWERS</span>
                    <span class="title-sub-line"><span class="sky-blue-highlight">10,960 م²</span> للشركات والعيادات والمقرات الإدارية</span>
                </h2>
                
                <div class="cinematic-bottom-bar">
                    <p class="cinematic-desc">
                        5 طوابق إدارية وطبية فاخرة بمداخل حصرية ومصاعد ذكية مستقلة تماماً عن حركة المول التجاري لرجال الأعمال والأطباء وكبرى الشركات.
                    </p>
                    <div class="cinematic-action-wrap">
                        <a href="#units-section" class="btn-cinematic-pill">
                            <span>المكاتب المتاحة</span>
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 4: Parking & Delivery 2028 (75% - 100%) -->
        <div id="stage-4" class="cinematic-stage">
            <div class="cinematic-stage-inner">
                <div class="developer-corporate-tag">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>المجموعة الاقتصادية للاستثمار (EGR)</span>
                </div>
                
                <h2 class="cinematic-main-title">
                    PARKING & <span class="sky-blue-highlight">DELIVERY 2028</span>
                    <span class="title-sub-line"><span class="sky-blue-highlight">مواقف مزدوجة 6,000 م²</span> والتزام بالتسليم في أكتوبر 2028</span>
                </h2>
                
                <div class="cinematic-bottom-bar">
                    <p class="cinematic-desc">
                        حل جذري للتكدس المروري بوسط قنا عبر جراجات ذكية على مستويين، مع التزام صارم من <strong style="color: #fff;">شركة EGR</strong> بالتسليم في أكتوبر 2028.
                    </p>
                    <div class="cinematic-action-wrap">
                        <button class="btn-cinematic-pill open-vip-modal">
                            <span>حجز استشارة VIP</span>
                            <i class="fa-solid fa-gem"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         PHASE 2, 3 & 4: SPLIT CURTAIN ZOOM & STATS REVEAL
         ========================================================================= -->
    <div id="hero-curtain-wrapper" class="hero-curtain-wrapper">
        <!-- Phase 4 Underlying Stats Section (Revealed underneath split doors) -->
        <div id="curtain-revealed-stage" class="curtain-revealed-stage">
            <div class="site-container stats-container-inner">
                <div class="section-title-wrap text-center-wrap" style="margin-bottom: 2.5rem;">
                    <div class="section-badge">
                        <span class="badge-dot-cyan-pulsing"></span>
                        <span>المؤشرات الهيكلية والمواصفات</span>
                    </div>
                    <h2 class="section-title">أرقام استثنائية تصنع <span class="cyan-text">معلماً معمارياً بارزاً</span></h2>
                    <p class="section-desc">
                        تم تصميم District 1 وفق أعلى المقاييس الهندسية العالمية ليكون الصرح التجاري والإداري الأول من نوعه في قلب محافظة قنا.
                    </p>
                </div>

                <div class="stats-grid three-cards-grid">
                    <!-- CARD 1: 21,667 M2 (TOTAL AREA) -->
                    <div class="stat-card luxury-stat-card glass-panel" data-target="21667">
                        <div class="stat-card-top">
                            <div class="stat-vector-art">
                                <svg class="arch-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32 6L8 18V46L32 58L56 46V18L32 6Z" stroke="url(#cyan-grad-1)" stroke-width="2.5" stroke-linejoin="round" class="svg-wireframe"/>
                                    <path d="M32 6V58M8 18L32 30L56 18" stroke="url(#cyan-grad-1)" stroke-width="2" class="svg-inner-grid"/>
                                    <circle cx="32" cy="30" r="4" fill="#0284c7" class="svg-pulse-core"/>
                                    <line x1="20" y1="24" x2="20" y2="48" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="2 2"/>
                                    <line x1="44" y1="24" x2="44" y2="48" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="2 2"/>
                                    <defs>
                                        <linearGradient id="cyan-grad-1" x1="8" y1="6" x2="56" y2="58" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#38bdf8"/>
                                            <stop offset="1" stop-color="#0284c7"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <span class="stat-mini-pill">بوديوم + 8 طوابق</span>
                        </div>

                        <div class="stat-card-middle">
                            <div class="stat-number-wrap">
                                <span class="stat-number count-up" data-val="21667">21,667</span>
                                <span class="stat-unit">م²</span>
                            </div>
                            <h3 class="stat-label">إجمالي المساحة البنائية</h3>
                            <p class="stat-subtext">3 طوابق تجارية بمول مركزي + 5 طوابق للأبراج الإدارية والمراكز الطبية الحصرية.</p>
                        </div>

                        <div class="stat-card-bottom">
                            <div class="stat-metric-bar">
                                <div class="metric-fill" style="width: 100%;"></div>
                            </div>
                            <div class="stat-metric-labels">
                                <span>مساحة الأرض: 3,200 م²</span>
                                <span>الارتفاع: 33.6 م</span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2: 6,000 M2 (SMART PARKING) -->
                    <div class="stat-card luxury-stat-card glass-panel" data-target="6000">
                        <div class="stat-card-top">
                            <div class="stat-vector-art">
                                <svg class="arch-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="14" width="44" height="36" rx="10" stroke="url(#cyan-grad-2)" stroke-width="2.5" class="svg-wireframe"/>
                                    <path d="M22 38V26H32C35.3137 26 38 28.6863 38 32C38 35.3137 35.3137 38 32 38H22Z" stroke="#0284c7" stroke-width="2.5"/>
                                    <circle cx="48" cy="18" r="3" fill="#10b981" class="svg-radar-dot"/>
                                    <circle cx="16" cy="18" r="3" fill="#10b981" class="svg-radar-dot"/>
                                    <path d="M14 44H50" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="3 3"/>
                                    <defs>
                                        <linearGradient id="cyan-grad-2" x1="10" y1="14" x2="54" y2="50" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#38bdf8"/>
                                            <stop offset="1" stop-color="#0369a1"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <span class="stat-mini-pill parking-pill">مستويان تحت الأرض</span>
                        </div>

                        <div class="stat-card-middle">
                            <div class="stat-number-wrap">
                                <span class="stat-number count-up" data-val="6000">6,000</span>
                                <span class="stat-unit">م²</span>
                            </div>
                            <h3 class="stat-label">مواقف السيارات الذكية (B1 + B2)</h3>
                            <p class="stat-subtext">أضخم جراج سفلي متطور بالصعيد مجهز بحساسات ركن ذكية لحل التكدس بوسط قنا.</p>
                        </div>

                        <div class="stat-card-bottom">
                            <div class="stat-metric-bar">
                                <div class="metric-fill metric-green" style="width: 100%;"></div>
                            </div>
                            <div class="stat-metric-labels">
                                <span>نظام إرشاد إلكتروني</span>
                                <span>سعة مئات السيارات</span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3: OCTOBER 2028 (DELIVERY) -->
                    <div class="stat-card luxury-stat-card glass-panel">
                        <div class="stat-card-top">
                            <div class="stat-vector-art">
                                <svg class="arch-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="32" r="24" stroke="url(#cyan-grad-3)" stroke-width="2.5" class="svg-wireframe"/>
                                    <circle cx="32" cy="32" r="14" stroke="#0284c7" stroke-width="1.5" stroke-dasharray="3 3"/>
                                    <path d="M32 20V32L40 36" stroke="#38bdf8" stroke-width="2.5" stroke-linecap="round"/>
                                    <circle cx="32" cy="32" r="3" fill="#0284c7"/>
                                    <defs>
                                        <linearGradient id="cyan-grad-3" x1="8" y1="8" x2="56" y2="56" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#38bdf8"/>
                                            <stop offset="1" stop-color="#0284c7"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <span class="stat-mini-pill milestone-pill">التزام تعاقدي 100%</span>
                        </div>

                        <div class="stat-card-middle">
                            <div class="stat-number-wrap">
                                <span class="stat-number date-num">أكتوبر 2028</span>
                            </div>
                            <h3 class="stat-label">موعد التسليم والافتتاح الرسمي</h3>
                            <p class="stat-subtext">جدول زمني صارم لتشغيل المنظومة وتسليم المفاتيح وبدء التشغيل التجاري والإداري.</p>
                        </div>

                        <div class="stat-card-bottom">
                            <div class="stat-metric-bar">
                                <div class="metric-fill metric-purple" style="width: 100%;"></div>
                            </div>
                            <div class="stat-metric-labels">
                                <span>معدل الإنجاز الإنشائي</span>
                                <span>وفق الخطة المعتمدة</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Phase 2 & 3: Center Zoom Box & Sliding Doors -->
        <div id="curtain-zoom-box" class="curtain-zoom-box">
            <!-- Left Curtain Door -->
            <div id="curtain-door-left" class="curtain-door curtain-door-left">
                <div class="curtain-door-inner">
                    <div class="curtain-badge">
                        <span class="badge-dot-cyan"></span>
                        <span>المجموعة الاقتصادية للاستثمار (EGR)</span>
                    </div>
                    <h2 class="curtain-bold-title">DISTRICT 1</h2>
                    <p class="curtain-desc">نصنع معالم معمارية تفتح آفاق المستقبل بصعيد مصر</p>
                </div>
            </div>

            <!-- Right Curtain Door -->
            <div id="curtain-door-right" class="curtain-door curtain-door-right">
                <div class="curtain-door-inner">
                    <div class="curtain-badge">
                        <span class="badge-dot-cyan"></span>
                        <span>الصرح الأيقوني الأول في قنا</span>
                    </div>
                    <h2 class="curtain-bold-title">استثمارك الأيقوني</h2>
                    <p class="curtain-desc">21,667 م² تجاري وإداري وطبي بمواصفات العاصمة</p>
                </div>
            </div>

            <!-- Center Split Laser Line -->
            <div id="curtain-center-seam" class="curtain-center-seam"></div>
        </div>
    </div>
</section>
