<?php
/**
 * Template Name: من نحن (About Us)
 * Official EGR Real Estate Group & Executive Leadership Spotlight
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main">
    <!-- Hero Banner -->
    <section class="page-hero-banner" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.95), rgba(30, 58, 138, 0.9)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-elevation-front-hd.jpg' ); ?>') center/cover no-repeat;">
        <div class="site-container">
            <div class="section-badge luxury-badge-glow">
                <span class="badge-dot-cyan-pulsing"></span>
                <span>نبذة عن المجموعة // EGR Real Estate Group</span>
            </div>
            <h1 class="page-hero-title">المجموعة الاقتصادية للاستثمار <span class="cyan-text">(EGR)</span></h1>
            <p class="page-hero-subtitle">
                صُنّاع المستقبل العمراني في صعيد مصر — رواد تطوير المشروعات التجارية والإدارية الذكية، والمطور الرسمي لصرح <strong>District 1</strong> في قلب مدينة قنا.
            </p>
            <div style="margin-top: 1.8rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="btn-cyan open-vip-modal">
                    <i class="fa-solid fa-gem"></i>
                    <span>حجز استشارة مع الإدارة</span>
                </button>
                <a href="<?php echo esc_url( home_url( '/district1/' ) ); ?>" class="btn-outline-cyan" style="color: #ffffff; border-color: rgba(255, 255, 255, 0.3);">
                    <i class="fa-solid fa-building"></i>
                    <span>مشروع ديستركت 1</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Executive Leadership Spotlight (صُنّاع النهضة ورؤية التطوير) -->
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
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/eng-yasser-soliman.jpg' ); ?>" alt="السيد ياسر أحمد سليمان - رئيس مجلس إدارة المجموعة الاقتصادية للاستثمار" class="leader-portrait">
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
                        <button class="btn-outline-cyan open-vip-modal">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>تحميل البروفايل الاستثماري الكامل</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 2. Corporate Pillars (قيم وركائز المجموعة) -->
            <div class="about-company-grid" style="margin-top: 5rem;">
                <div class="about-info-col">
                    <span class="section-badge luxury-badge-glow"><span class="badge-dot-cyan-pulsing"></span> ركائز وقيم المجموعة</span>
                    <h3 class="section-title luxury-main-title">رؤية استثمارية تنموية <span class="cyan-text">تبني مستقبلاً مستداماً</span></h3>
                    <p class="section-desc" style="margin-bottom: 2rem;">
                        تأسست المجموعة الاقتصادية للاستثمار برؤية واضحة تهدف إلى إحداث نقلة نوعية في المشروعات العقارية متعددة الاستخدامات في صعيد مصر من خلال الالتزام بأعلى المعايير.
                    </p>
                    <div class="about-highlights-grid">
                        <div class="highlight-item glass-panel">
                            <i class="fa-solid fa-gem highlight-icon"></i>
                            <div>
                                <h4>معايير معمارية عالمية</h4>
                                <p>تطبيق أحدث أكواد البناء والواجهات الزجاجية المزدوجة العازلة وحجر الترافرتين الطبيعي.</p>
                            </div>
                        </div>
                        <div class="highlight-item glass-panel">
                            <i class="fa-solid fa-handshake-angle highlight-icon"></i>
                            <div>
                                <h4>التزام ومصداقية تعاقدية</h4>
                                <p>الالتزام التام بالجداول الزمنية المحددة والمواصفات الإنشائية المعتمدة للتسليم في أكتوبر 2028.</p>
                            </div>
                        </div>
                        <div class="highlight-item glass-panel">
                            <i class="fa-solid fa-chart-line highlight-icon"></i>
                            <div>
                                <h4>قيمة استثمارية متصاعدة</h4>
                                <p>اختيار مواقع استراتيجية حيوية في قلب المدن تضمن أعلى عوائد إيجارية ونمو رأسمالي مستدام.</p>
                            </div>
                        </div>
                        <div class="highlight-item glass-panel">
                            <i class="fa-solid fa-users highlight-icon"></i>
                            <div>
                                <h4>تنمية مجتمعية وشراكات</h4>
                                <p>خلق بيئة أعمال متكاملة تدعم رواد الأعمال وتوفر فرص عمل واعدة لكوادر الصعيد.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-img-col">
                    <div class="about-img-card glass-panel">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-elevation-front-hd.jpg' ); ?>" alt="District 1 Architecture" class="about-primary-img">
                        <div class="about-img-overlay">
                            <h4 style="color: #fff; font-weight: 800; margin: 0 0 0.3rem;">صرح District 1 بقلب قنا</h4>
                            <p style="color: #cbd5e1; font-size: 0.85rem; margin: 0;">أول صرح تجاري وإداري وطبي وترفيهي ذكي بمساحة بنائية 21,667 م² وارتفاع 33.6 متراً.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Sectors & Investment Fields (قطاعات أعمال EGR) -->
    <section class="theme-section" style="background-color: var(--bg-secondary);">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>تنوع المحفظة الاستثمارية</span>
                </div>
                <h2 class="section-title luxury-main-title">قطاعات ومجالات <span class="cyan-text">أعمال المجموعة الاقتصادية</span></h2>
                <p class="section-desc luxury-sub-desc">
                    محفظة استثمارية متوازنة تجمع بين التميز في التطوير العقاري وريادة قطاع الأغذية والمشروبات وإدارة المرافق.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                <div class="glass-panel" style="padding: 2.2rem; border-radius: 20px; background: #ffffff; border: 1.5px solid var(--border-light); text-align: center;">
                    <div class="highlight-icon" style="margin: 0 auto 1.2rem; width: 60px; height: 60px; font-size: 1.6rem;"><i class="fa-solid fa-building"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.8rem;">التطوير العقاري والتجاري</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
                        تطوير الصروح والمجمعات متعددة الاستخدامات بمواصفات المدن الذكية، وتوفير مساحات للمحلات، المكاتب، والعيادات.
                    </p>
                </div>

                <div class="glass-panel" style="padding: 2.2rem; border-radius: 20px; background: #ffffff; border: 1.5px solid var(--border-light); text-align: center;">
                    <div class="highlight-icon" style="margin: 0 auto 1.2rem; width: 60px; height: 60px; font-size: 1.6rem;"><i class="fa-solid fa-utensils"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.8rem;">الأغذية والمشروبات (F&B)</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
                        استقطاب وتشغيل أرقى سلاسل المطاعم والكافيهات العالمية، وتجهيز مساحات طعام راقية وشرفات معلقة في قلب قنا.
                    </p>
                </div>

                <div class="glass-panel" style="padding: 2.2rem; border-radius: 20px; background: #ffffff; border: 1.5px solid var(--border-light); text-align: center;">
                    <div class="highlight-icon" style="margin: 0 auto 1.2rem; width: 60px; height: 60px; font-size: 1.6rem;"><i class="fa-solid fa-solar-panel"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.8rem;">إدارة الأصول والمرافق (BMS)</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
                        إدارة المباني الذكية وصيانتها باستخدام أحدث نظم BMS، وأنظمة المراقبة الأمنية والتحكم في الطاقة والمواقف 24/7.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Contact CTA -->
    <?php get_template_part( 'template-parts/section-contact' ); ?>
</main>

<?php
get_footer();
