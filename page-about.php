<?php
/**
 * Template Name: من نحن (About Us)
 * Official EGR Real Estate Group & Executive Leadership Spotlight
 *
 * @package District1
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="site-main page-interior-main">

    <!-- 1. Hero Banner with Panoramic Glassmorphic Presentation -->
    <section class="page-hero-banner about-hero-banner" style="background: linear-gradient(135deg, rgba(10, 17, 40, 0.92) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo esc_url( $theme_uri . '/assets/images/district1-elevation-front-hd.jpg' ); ?>') center/cover no-repeat;">
        <div class="site-container">
            <div class="section-badge luxury-badge-glow">
                <span class="badge-dot-cyan-pulsing"></span>
                <span>المجموعة الاقتصادية للاستثمار // EGR Real Estate Group</span>
            </div>
            <h1 class="page-hero-title">
                نصنع المستقبل العمراني ونقود <span class="cyan-text">التحول الاستثماري بصعيد مصر</span>
            </h1>
            <p class="page-hero-subtitle">
                المطور العقاري الرائد لصرح <strong>District 1</strong> الأيقوني في قلب مدينة قنا — ندمج المعايير المعمارية العالمية مع الاستدامة والتكنولوجيا الذكية لخلق قيمة متصاعدة لشركائنا ومستثمرينا.
            </p>

            <!-- Quick KPI Ribbon Bar -->
            <div class="about-hero-kpi-ribbon">
                <div class="about-kpi-box glass-panel">
                    <span class="about-kpi-num num-font">3,200 م²</span>
                    <span class="about-kpi-label">مساحة أرض الصرح</span>
                </div>
                <div class="about-kpi-box glass-panel">
                    <span class="about-kpi-num num-font">21,667 م²</span>
                    <span class="about-kpi-label">إجمالي المساحة البنائية</span>
                </div>
                <div class="about-kpi-box glass-panel">
                    <span class="about-kpi-num num-font">33.6 متراً</span>
                    <span class="about-kpi-label">الارتفاع المعماري (9 طوابق)</span>
                </div>
                <div class="about-kpi-box glass-panel">
                    <span class="about-kpi-num num-font">1,500+</span>
                    <span class="about-kpi-label">فرصة عمل مباشرة وغير مباشرة</span>
                </div>
            </div>

            <div class="about-hero-actions">
                <button class="btn-cyan open-vip-modal">
                    <i class="fa-solid fa-gem"></i>
                    <span>حجز استشارة VIP مع الإدارة</span>
                </button>
                <a href="<?php echo esc_url( home_url( '/district1/' ) ); ?>" class="btn-outline-glass">
                    <i class="fa-solid fa-building"></i>
                    <span>استكشف صرح District 1</span>
                </a>
            </div>
        </div>
    </section>


    <!-- 2. Executive Leadership Spotlight (السيد ياسر أحمد سليمان - رئيس مجلس الإدارة) -->
    <section class="theme-section executive-leadership-section">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap" style="margin-bottom: 3.5rem;">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>القيادة والرؤية الاستراتيجية // صُنّاع النهضة</span>
                </div>
                <h2 class="section-title luxury-main-title">
                    كلمة رئيس مجلس الإدارة // <span class="cyan-text">رؤية استثمارية تقود المستقبل</span>
                </h2>
                <p class="section-desc luxury-sub-desc">
                    تقود المجموعة الاقتصادية للاستثمار (EGR) طفرة معمارية نوعية تنقل معايير المدن الذكية إلى قلب الصعيد بقيادة استثمارية وهندسية واعية وموثوقة.
                </p>
            </div>

            <!-- Grand Executive Showcase Card -->
            <div class="leadership-spotlight-card glass-panel executive-master-card">
                <!-- Portrait Column -->
                <div class="leader-portrait-col">
                    <div class="leader-img-frame executive-frame-glow">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/images/eng-yasser-soliman.jpg' ); ?>" alt="السيد ياسر أحمد سليمان - رئيس مجلس إدارة المجموعة الاقتصادية للاستثمار" class="leader-portrait">
                        <div class="leader-badge-overlay">
                            <span class="badge-dot-cyan-pulsing"></span>
                            <span>رئيس مجلس الإدارة والمؤسس</span>
                        </div>
                    </div>

                    <!-- Leadership Quick Meta -->
                    <div class="leader-side-meta">
                        <div class="meta-item">
                            <i class="fa-solid fa-medal" style="color: #f59e0b;"></i>
                            <span>خبرة استثمارية وتطويرية رائدة</span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-handshake-simple" style="color: #0284c7;"></i>
                            <span>شراكات استراتيجية مع كبرى بيوت الخبرة</span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-award" style="color: #10b981;"></i>
                            <span>المطور العقاري لصرح District 1</span>
                        </div>
                    </div>
                </div>

                <!-- Biography & Credentials Column -->
                <div class="leader-bio-col">
                    <div class="leader-header-wrap">
                        <div class="leader-org-row">
                            <span class="leader-org-tag"><i class="fa-solid fa-building-shield"></i> المجموعة الاقتصادية للاستثمار (EGR)</span>
                            <span class="leader-role-tag">المطور العقاري لصرح District 1</span>
                        </div>
                        <h3 class="leader-name">السيد ياسر أحمد سليمـان</h3>
                        <div class="leader-title">مؤسس ورئيس مجلس إدارة EGR والمطور العقاري لصرح District 1</div>
                    </div>

                    <!-- Official Royal Quote Box -->
                    <div class="leader-quote royal-quote-box">
                        <i class="fa-solid fa-quote-right quote-bg-icon"></i>
                        <p class="quote-text">
                            "إن صرح District 1 ليس مجرد مجمع تجاري وإداري، بل هو إعلان رسمي عن دخول صعيد مصر عصر المشروعات الذكية المتكاملة التي تجمع بين الجمال المعماري الأيقوني وتلبية تطلعات مجتمع الأعمال وأهالي قنا."
                        </p>
                        <div class="quote-author-sign">
                            <span class="sign-name">— ياسر أحمد سليمان</span>
                            <span class="sign-role">رئيس مجلس الإدارة</span>
                        </div>
                    </div>

                    <!-- Rich Narrative -->
                    <div class="leader-biography-text">
                        <p>
                            يُعد <strong>السيد ياسر أحمد سليمـان</strong> من أبرز الشخصيات الاستثمارية الرائدة في مجال التطوير العقاري وإدارة المشروعات الكبرى في <strong>محافظة قنا</strong> وصعيد مصر. يمتلك رؤية تنموية طموحة تركز على توطين المشروعات الذكية والمستدامة وتقديم منتجات عقارية بمعايير الجودة العالمية غير المسبوقة في الصعيد.
                        </p>
                        <p>
                            بنت <strong>المجموعة الاقتصادية للاستثمار (EGR)</strong> محفظة أعمال متنوعة وناجحة تشمل قطاعات <strong>العقارات، الأغذية والمشروبات، والمرافق الذكية</strong>، مع الالتزام التام بإنجاز صرح <strong>District 1</strong> وخلق أكثر من <strong>1,500 فرصة عمل</strong> مباشرة وغير مباشرة، فضلاً عن حل الأزمة المرورية بوسط مدينة قنا عبر جراجات الـ <strong>6,000 م²</strong> على مستويين تحت الأرض.
                        </p>
                    </div>

                    <!-- 4 KPIs -->
                    <div class="leader-kpis-row">
                        <div class="leader-kpi">
                            <span class="num-font">3,200 م²</span>
                            <span class="lbl">مساحة أرض الصرح</span>
                        </div>
                        <div class="leader-kpi">
                            <span class="num-font">21,667 م²</span>
                            <span class="lbl">إجمالي المساحة البنائية</span>
                        </div>
                        <div class="leader-kpi">
                            <span class="num-font">6,000 م²</span>
                            <span class="lbl">مواقف سيارات B1+B2</span>
                        </div>
                        <div class="leader-kpi">
                            <span class="num-font">أكتوبر 2028</span>
                            <span class="lbl">موعد التسليم المعتمد</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="leader-actions-row" style="margin-top: 1.8rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                        <button class="btn-cyan open-vip-modal">
                            <i class="fa-solid fa-gem"></i>
                            <span>حجز استشارة VIP مع الإدارة</span>
                        </button>
                        <a href="https://wa.me/201040022670?text=<?php echo rawurlencode('مرحباً، أود حجز موعد استشارة استثمارية مع إدارة المجموعة الاقتصادية للاستثمار EGR بخصوص صرح District 1'); ?>" target="_blank" class="btn-outline-cyan">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>محادثة فورية مع المستشار</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 3. Vision, Mission & Strategic Pillars (الرؤية والرسالة والأهداف الاستراتيجية) -->
    <section class="theme-section vision-mission-section" style="background-color: var(--bg-secondary);">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>الرؤية والرسالة والقيم الجوهرية</span>
                </div>
                <h2 class="section-title luxury-main-title">
                    ركائز استراتيجية <span class="cyan-text">تبني مستقبلاً مستداماً</span>
                </h2>
                <p class="section-desc luxury-sub-desc">
                    تستند فلسفة المجموعة الاقتصادية للاستثمار على أسس متينة تجمع بين الجدوى الاقتصادية، الابتكار المعماري، والأثر المجتمعي العميق.
                </p>
            </div>

            <!-- Vision / Mission / Values 3-Card Master Layout -->
            <div class="about-pillars-grid">
                <!-- Pillar 1: Vision -->
                <div class="about-pillar-card glass-panel">
                    <div class="pillar-icon-box">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h3 class="pillar-title">رؤيتنـــــا</h3>
                    <p class="pillar-desc">
                        أن نكون المجموعة الاستثمارية والتطويرية الأولى والأكثر موثوقية في صعيد مصر، ونموذجاً يُحتذى به في ابتكار الصروح التجارية والإدارية الذكية متعددة الاستخدامات التي ترتقي بجودة الحياة وتفتح آفاقاً رحبة لنمو قطاع الأعمال.
                    </p>
                    <ul class="pillar-checklist">
                        <li><i class="fa-solid fa-check"></i> ريادة التطوير العقاري الذكي بالصعيد</li>
                        <li><i class="fa-solid fa-check"></i> بناء صروح معمارية مستدامة للأجيال القادمة</li>
                        <li><i class="fa-solid fa-check"></i> توطين الاستثمارات الوطنية في قلب قنا</li>
                    </ul>
                </div>

                <!-- Pillar 2: Mission -->
                <div class="about-pillar-card glass-panel pillar-highlighted">
                    <div class="pillar-icon-box">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="pillar-title">رسالتنـــــا</h3>
                    <p class="pillar-desc">
                        تطوير وتشييد مساحات تجارية وإدارية وترفيهية استثنائية وفق أعلى معايير الجودة العالمية، تضمن لشركائنا ومستثمرينا أعلى عائد استثماري، وتقدم للمواطنين بيئة تسوق وعمل عصرية تلبي كافة احتياجاتهم اليومية.
                    </p>
                    <ul class="pillar-checklist">
                        <li><i class="fa-solid fa-check"></i> الالتزام التام بالمواصفات والجداول الزمنية</li>
                        <li><i class="fa-solid fa-check"></i> تقديم حلول هندسية وتشغيلية تضمن أعلى ربحية</li>
                        <li><i class="fa-solid fa-check"></i> توفير خدمات وتجارب تسوق غير مسبوقة</li>
                    </ul>
                </div>

                <!-- Pillar 3: Core Values -->
                <div class="about-pillar-card glass-panel">
                    <div class="pillar-icon-box">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <h3 class="pillar-title">قيمنا الراسخة</h3>
                    <p class="pillar-desc">
                        مبادئ حاكمة توجه كافة قراراتنا الاستثمارية وعلاقاتنا مع العملاء والشركاء لضمان المصداقية والتميز المستدام.
                    </p>
                    <ul class="pillar-checklist">
                        <li><i class="fa-solid fa-check"></i> <strong>المصداقية:</strong> شفافية مطلقة والتزام تعاقدي صارم</li>
                        <li><i class="fa-solid fa-check"></i> <strong>الابتكار:</strong> تصاميم معمارية فريدة وتقنيات ذكية</li>
                        <li><i class="fa-solid fa-check"></i> <strong>الاستدامة:</strong> كفاءة الطاقة ومواد بناء بيئية متقدمة</li>
                        <li><i class="fa-solid fa-check"></i> <strong>الشراكة:</strong> نجاح مستثمرينا هو مقياس نجاحنا الأول</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- 4. The 4 Titans Behind District 1 (تحالف العمالقة الأربعة وراء صرح ديستركت 1) -->
    <section class="theme-section alliance-section">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>وراء كل نجاح .. رؤية وخبرات عملاقة</span>
                </div>
                <h2 class="section-title luxury-main-title">
                    تحالف العمالقة الأربعة // <span class="cyan-text">صُنّاع صرح District 1</span>
                </h2>
                <p class="section-desc luxury-sub-desc">
                    يقف وراء صرح District 1 تحالف استراتيجي رائد يجمع بين قوة التطوير والاستثمار، وخبرة أربعة عقود في الاستشارات المعمارية، وريادة المقاولات العامة، ودقة الهندسة الإنشائية المعتمدة.
                </p>
            </div>

            <div class="alliance-grid">
                <!-- Titan 1: EGR -->
                <div class="alliance-card glass-panel">
                    <div class="alliance-header">
                        <div class="alliance-icon"><i class="fa-solid fa-building-shield"></i></div>
                        <span class="alliance-role">المطور العقاري والمستثمر الرئيسي</span>
                    </div>
                    <h3 class="alliance-name">المجموعة الاقتصادية للاستثمار – EGR</h3>
                    <div class="alliance-leader">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>المؤسس: السيد ياسر أحمد سليمـان</span>
                    </div>
                    <p class="alliance-desc">
                        تُعد من الأسماء الموثوقة والرائدة في مجال التطوير العقاري وإدارة الأصول بصعيد مصر. تمتلك محفظة استثمارية متوازنة تشمل قطاعات العقارات، والأغذية والمشروبات، وتشغيل المرافق والمنشآت متعددة الاستخدامات.
                    </p>
                    <div class="alliance-tags">
                        <span>التطوير العقاري</span>
                        <span>إدارة الأصول</span>
                        <span>الأغذية والمشروبات</span>
                        <span>صرح District 1</span>
                    </div>
                </div>

                <!-- Titan 2: MCG -->
                <div class="alliance-card glass-panel">
                    <div class="alliance-header">
                        <div class="alliance-icon"><i class="fa-solid fa-compass-drafting"></i></div>
                        <span class="alliance-role">الاستشاري العام والمصمم المعماري</span>
                    </div>
                    <h3 class="alliance-name">إم سي جي – مجموعة مروان للاستشارات (MCG)</h3>
                    <div class="alliance-leader">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>الرئيس: المهندس المعماري طارق حسين</span>
                    </div>
                    <p class="alliance-desc">
                        تمتلك الشركة أكثر من <strong>أربعة عقود من الخبرة</strong> العريقة في مجالات العمارة، والتصميم الداخلي، وإدارة المشروعات الكبرى، مما جعلها اسماً مرجعياً موثوقاً في كبرى الصروح المعمارية والتجارية في مصر والشرق الأوسط.
                    </p>
                    <div class="alliance-tags">
                        <span>+40 عاماً خبرة</span>
                        <span>التصميم المعماري</span>
                        <span>الهندسة المتكاملة</span>
                        <span>إدارة المشروعات</span>
                    </div>
                </div>

                <!-- Titan 3: SCC -->
                <div class="alliance-card glass-panel">
                    <div class="alliance-header">
                        <div class="alliance-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                        <span class="alliance-role">المقاول العام والتنفيذي للمشروع</span>
                    </div>
                    <h3 class="alliance-name">شركة الصعيد العامة للمقاولات – SCC</h3>
                    <div class="alliance-leader">
                        <i class="fa-solid fa-helmet-safety"></i>
                        <span>المقاول العام المعتمد للصرح</span>
                    </div>
                    <p class="alliance-desc">
                        إحدى كبرى قلاع التشييد والمقاولات في صعيد مصر. يمتد نطاق أعمالها ليشمل المقاولات العامة والخاصة، البنية التحتية، المرافق العامة، إدارة واستخراج مواد البناء، وتشغيل المحاجر، وإنشاء المصانع والورش الداعمة للمشروعات القومية.
                    </p>
                    <div class="alliance-tags">
                        <span>المقاولات العامة</span>
                        <span>البنية التحتية</span>
                        <span>المحاجر والمصانع</span>
                        <span>تنفيذ دقيق</span>
                    </div>
                </div>

                <!-- Titan 4: SEKKAN -->
                <div class="alliance-card glass-panel">
                    <div class="alliance-header">
                        <div class="alliance-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <span class="alliance-role">الاستشاري الإنشائي الهندسي للمشروع</span>
                    </div>
                    <h3 class="alliance-name">مكتب سكن للاستشارات الهندسية (SEKKAN)</h3>
                    <div class="alliance-leader">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>الرئيس: أ.د. حداد سعيد حداد</span>
                    </div>
                    <p class="alliance-desc">
                        تأسس على يد الأستاذ الدكتور <strong>حداد سعيد حداد</strong>، أحد كبار الخبراء المرموقين في <strong>المركز القومي لبحوث الإسكان والبناء</strong>، ويتميز بخبرة علمية وفنية عميقة في حسابات الأحمال الزلزالية والهندسة الإنشائية المتقدمة.
                    </p>
                    <div class="alliance-tags">
                        <span>الاستشارات الإنشائية</span>
                        <span>بحوث الإسكان والبناء</span>
                        <span>كود الزلازل والأحمال</span>
                        <span>الأمان الهيكلي</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 5. EGR Business Sectors & Portfolio (قطاعات ومجالات أعمال المجموعة) -->
    <section class="theme-section sectors-section" style="background-color: var(--bg-secondary);">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>تنوع المحفظة الاستثمارية</span>
                </div>
                <h2 class="section-title luxury-main-title">
                    قطاعات ومجالات <span class="cyan-text">أعمال المجموعة الاقتصادية (EGR)</span>
                </h2>
                <p class="section-desc luxury-sub-desc">
                    محفظة استثمارية متكاملة تتوزع عبر قطاعات حيوية تحقق التكامل وتضمن أعلى كفاءة تشغيلية وعوائد مالية متنامية.
                </p>
            </div>

            <div class="sectors-grid">
                <!-- Sector 1 -->
                <div class="sector-card glass-panel">
                    <div class="sector-icon-wrap"><i class="fa-solid fa-building"></i></div>
                    <h3 class="sector-title">التطوير العقاري والتجاري الذكي</h3>
                    <p class="sector-desc">
                        تطوير الصروح متعددة الاستخدامات (Commercial & Mixed-Use Hubs) بمواصفات المدن الذكية، وتوفير وحدات تجارية، إدارية، ومصرفية بمعايير عالمية.
                    </p>
                    <div class="sector-features">
                        <span><i class="fa-solid fa-check"></i> واجهات كواسر شمسية وحجر ترافرتين</span>
                        <span><i class="fa-solid fa-check"></i> إدارة التدفق الجماهيري وانسيابية الحركة</span>
                    </div>
                </div>

                <!-- Sector 2 -->
                <div class="sector-card glass-panel">
                    <div class="sector-icon-wrap"><i class="fa-solid fa-utensils"></i></div>
                    <h3 class="sector-title">قطاع الأغذية والمشروبات والضيافة (F&B)</h3>
                    <p class="sector-desc">
                        استقطاب وتشغيل أرقى سلاسل المطاعم والكافيهات العالمية والمحلية، وتجهيز مساحات طعام فاخرة وشرفات معلقة بانورامية في قلب صعيد مصر.
                    </p>
                    <div class="sector-features">
                        <span><i class="fa-solid fa-check"></i> مجمع مطاعم عبر 3 طوابق حيوية</span>
                        <span><i class="fa-solid fa-check"></i> مناطق جلوس مفتوحة بإطلالات ساحرة</span>
                    </div>
                </div>

                <!-- Sector 3 -->
                <div class="sector-card glass-panel">
                    <div class="sector-icon-wrap"><i class="fa-solid fa-solar-panel"></i></div>
                    <h3 class="sector-title">إدارة الأصول والمرافق الذكية (BMS)</h3>
                    <p class="sector-desc">
                        إدارة المباني وصيانتها بأحدث نظم إدارة المباني الذكية (Building Management Systems)، والمراقبة الأمنية الذكية، والتحكم في الطاقة 24/7.
                    </p>
                    <div class="sector-features">
                        <span><i class="fa-solid fa-check"></i> جراجات ذكية بمساحة 6,000 م²</span>
                        <span><i class="fa-solid fa-check"></i> كاميرات ومصاعد بانورامية وتكييف مركزي</span>
                    </div>
                </div>

                <!-- Sector 4 -->
                <div class="sector-card glass-panel">
                    <div class="sector-icon-wrap"><i class="fa-solid fa-landmark"></i></div>
                    <h3 class="sector-title">المقرات المصرفية والطبية التخصصية</h3>
                    <p class="sector-desc">
                        تجهيز مساحات بنكية مخصصة تتوافق مع اشتراطات البنك المركزي المصري (186 - 329 م²)، بالإضافة لعيادات ومراكز طبية مجهزة بأعلى معايير السلامة.
                    </p>
                    <div class="sector-features">
                        <span><i class="fa-solid fa-check"></i> بوابات أمنية وخزائن مصرفية مصفحة</span>
                        <span><i class="fa-solid fa-check"></i> مداخل خاصة ومستقلة للإداري والطبي</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 6. Timeline to Handover October 2028 (مسيرة التشييد والالتزام الزمني) -->
    <section class="theme-section timeline-commitment-section">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>الجدول الزمني المعتمد للتسليم</span>
                </div>
                <h2 class="section-title luxury-main-title">
                    مسيرة الإنجاز الميداني // <span class="cyan-text">التسليم أكتوبر 2028</span>
                </h2>
                <p class="section-desc luxury-sub-desc">
                    خطة تنفيذية صارمة تضمن الالتزام التام بمواعيد التسليم وفق أعلى معايير الجودة والرقابة الهندسية.
                </p>
            </div>

            <div class="about-timeline-steps">
                <div class="about-step-card glass-panel completed">
                    <div class="step-num">01</div>
                    <div class="step-icon"><i class="fa-solid fa-stamp"></i></div>
                    <h4>التراخيص والتصميمات</h4>
                    <p>اعتماد المخططات المعمارية والإنشائية من كبرى بيوت الخبرة والحصول على كافة التراخيص الرسمية.</p>
                    <span class="step-status"><i class="fa-solid fa-check-circle"></i> مكتمل بالكامل</span>
                </div>

                <div class="about-step-card glass-panel completed">
                    <div class="step-num">02</div>
                    <div class="step-icon"><i class="fa-solid fa-trowel"></i></div>
                    <h4>أعمال الحفر والأساسات</h4>
                    <p>تنفيذ أعمال الحفر العميق لـ 2 بدروم (6,000 م²) وصب الأساسات الخرسانية المقاومة للزلازل والمياه الجوفية.</p>
                    <span class="step-status"><i class="fa-solid fa-check-circle"></i> مكتمل بالكامل</span>
                </div>

                <div class="about-step-card glass-panel in-progress">
                    <div class="step-num">03</div>
                    <div class="step-icon"><i class="fa-solid fa-building"></i></div>
                    <h4>الهيكل الخرساني والبوديوم</h4>
                    <p>تشييد طوابق المول التجاري والأبراج الإدارية حتى الارتفاع النهائي 33.6 متراً.</p>
                    <span class="step-status active"><i class="fa-solid fa-spinner fa-spin"></i> جارٍ التنفيذ الميداني</span>
                </div>

                <div class="about-step-card glass-panel upcoming">
                    <div class="step-num">04</div>
                    <div class="step-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h4>الواجهات والأنظمة الكهروميكانيكية</h4>
                    <p>تركيب كواسر الشمس المزدوجة، حجر الترافرتين، التكييف المركزي، وشبكات الـ BMS والمصاعد البانورامية.</p>
                    <span class="step-status"><i class="fa-solid fa-clock"></i> الربع الأول 2028</span>
                </div>

                <div class="about-step-card glass-panel upcoming target-grand">
                    <div class="step-num">05</div>
                    <div class="step-icon"><i class="fa-solid fa-trophy"></i></div>
                    <h4>التسليم والافتتاح الرسمي</h4>
                    <p>تسليم الوحدات للملاك والبدء في تشغيل الهايبر ماركت والبراندات العالمية والمقرات الإدارية.</p>
                    <span class="step-status gold"><i class="fa-solid fa-star"></i> أكتوبر 2028</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Interactive VIP Contact CTA -->
    <?php get_template_part( 'template-parts/section-contact' ); ?>

</main>

<?php
get_footer();
