<?php
/**
 * Template Name: مشروع ديستركت 1
 * Description: صفحة مشروع District 1 المتكاملة بجميع البيانات والمعلومات الرسمية المعتمدة.
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main">
    <!-- 1. Hero Banner: عن المشروع -->
    <section class="page-hero-banner" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.94), rgba(30, 58, 138, 0.9)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-elevation-front-hd.jpg' ); ?>') center/cover no-repeat;">
        <div class="site-container">
            <div class="section-badge">
                <span class="badge-dot-cyan"></span>
                <span>عن المشروع // في قلب قنا</span>
            </div>
            <h1 class="page-hero-title">مشروع ديستركت 1 <span class="cyan-text">// حيث يلتقي الخيال بالإبداع</span></h1>
            <p class="page-hero-subtitle">
                يقع في قلب المدينة، هذا المول ليس مجرد وجهة تسوق — بل مركز حياة نابض بالحيوية. تم تصميمه بمعمارية حديثة وتخطيط ذكي للمساحات، مما يجمع بسلاسة بين التجزئة، المطاعم، والمساحات التجارية.
            </p>
            <div style="margin-top: 1.8rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="btn-cyan open-vip-modal">
                    <i class="fa-solid fa-gem"></i>
                    <span>احجز وحدتك التجارية</span>
                </button>
                <a href="#building-overview" class="btn-outline-cyan" style="color: #ffffff; border-color: rgba(255, 255, 255, 0.3);">
                    <i class="fa-solid fa-arrow-down"></i>
                    <span>استكشف تفاصيل المبنى</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Highlights Cards: الوجهة المثالية -->
    <section class="theme-section" style="padding-top: 0; margin-top: -3.5rem; position: relative; z-index: 20;">
        <div class="site-container">
            <div class="glass-panel" style="border-radius: 24px; padding: 2.2rem; background: #ffffff; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08); border: 1.5px solid var(--border-light);">
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; text-align: right;">
                    <div style="padding-left: 1.5rem;">
                        <div class="highlight-icon" style="margin-bottom: 1rem;"><i class="fa-solid fa-gem"></i></div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 0.5rem; color: var(--text-primary);">توازن وأناقة معمارية</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">تعكس كل زاوية توازنًا بين الأناقة، الوظيفية، والابتكار، مما يجعلها الوجهة المثالية للتسوق، الأعمال، والترفيه.</p>
                    </div>
                    <div style="padding-left: 1.5rem; border-right: 1px solid var(--border-light);">
                        <div class="highlight-icon" style="margin-bottom: 1rem;"><i class="fa-solid fa-store"></i></div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 0.5rem; color: var(--text-primary);">58 متجرًا وهايبر ماركت</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">يضم المول 8 طوابق وموقع متميز، ويتميز بوجود 58 متجرًا تجاريًا، هايبر ماركت كبير، ومكاتب إدارية مخططة بعناية.</p>
                    </div>
                    <div style="border-right: 1px solid var(--border-light);">
                        <div class="highlight-icon" style="margin-bottom: 1rem;"><i class="fa-solid fa-car"></i></div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 0.5rem; color: var(--text-primary);">مواقف سيارات واسعة</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">مواقف سيارات واسعة على مستويين تحت الأرض لتدفق سلس ومريح يضمن تجربة سلسة وممتعة للزوار والمستثمرين.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. نظرة عامة على المبنى -->
    <section id="building-overview" class="theme-section">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge">
                    <span class="badge-dot-cyan"></span>
                    <span>المواصفات والأرقام الهندسية</span>
                </div>
                <h2 class="section-title">نظرة عامة <span class="cyan-text">على المبنى</span></h2>
                <p class="section-desc">
                    مصمم ليكون وجهة متكاملة بكل المقاييس في قلب محافظة قنا.
                </p>
            </div>

            <!-- 6 Official Metric Boxes -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.8rem; margin-bottom: 3.5rem;">
                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">إجمالي مساحة الأرض</div>
                    <div class="num-font" style="font-size: 2.4rem; font-weight: 900; color: #0284c7;">3,200 <span style="font-size: 1.1rem; font-family: var(--font-ar);">m²</span></div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">المساحة الإجمالية للأرض</div>
                </div>

                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">الارتفاع الإجمالي</div>
                    <div class="num-font" style="font-size: 2.4rem; font-weight: 900; color: #0284c7;">33.6 <span style="font-size: 1.1rem; font-family: var(--font-ar);">مترًا</span></div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">ارتفاع معماري شاهق ومميز</div>
                </div>

                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">عدد الطوابق</div>
                    <div class="num-font" style="font-size: 1.8rem; font-weight: 900; color: #0284c7;">8 طوابق + أرضي + سفلي</div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">8 طوابق علوية + أرضي + بدرومين</div>
                </div>

                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">موقف سيارات (مستويين)</div>
                    <div class="num-font" style="font-size: 2.4rem; font-weight: 900; color: #0284c7;">6,000 <span style="font-size: 1.1rem; font-family: var(--font-ar);">متر مربع</span></div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">حوالي 6000 متر مربع</div>
                </div>

                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">المنطقة التجارية (الأرضي - الثالث)</div>
                    <div class="num-font" style="font-size: 2.4rem; font-weight: 900; color: #0284c7;">10,707 <span style="font-size: 1.1rem; font-family: var(--font-ar);">مترًا مربعًا</span></div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">3 طوابق تجارية + طابق أرضي</div>
                </div>

                <div class="glass-panel" style="padding: 2rem; border-radius: 20px; text-align: center; background: #ffffff; border: 1.5px solid var(--border-light);">
                    <div style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 700; margin-bottom: 0.4rem;">المنطقة الإدارية (الرابع - الثامن)</div>
                    <div class="num-font" style="font-size: 2.4rem; font-weight: 900; color: #0284c7;">10,960 <span style="font-size: 1.1rem; font-family: var(--font-ar);">متر مربع</span></div>
                    <div style="font-size: 0.8rem; color: var(--text-stone); margin-top: 0.3rem;">حوالي 10,960 متر مربع (5 طوابق)</div>
                </div>
            </div>

            <!-- Floor Distribution Detailed Breakdown -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                <!-- 1. Commercial Floors -->
                <div class="glass-panel" style="border-radius: 22px; padding: 2.2rem; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem;">
                            <span class="unit-type-tag commercial-tag" style="position: static;">الطابق الأرضي - الثالث</span>
                            <span class="num-font" style="font-weight: 800; color: var(--azure-700); font-size: 1.05rem;">10,707 م²</span>
                        </div>
                        <h3 style="font-size: 1.3rem; font-weight: 900; margin-bottom: 1rem;">الطوابق التجارية (الأرضي - الطابق الثالث)</h3>
                        <ul class="unit-features-list">
                            <li><i class="fa-solid fa-circle-check"></i> حوالي ٥٨ متجرًا تجاريًا لكبرى العلامات.</li>
                            <li><i class="fa-solid fa-circle-check"></i> هايبر ماركت مجهز في الطابق الأرضي.</li>
                            <li><i class="fa-solid fa-circle-check"></i> مطاعم ومناطق لتناول الطعام في الطابق الأرضي والأول والثاني.</li>
                            <li><i class="fa-solid fa-circle-check"></i> مصمم لسهولة الوصول وتدفق العملاء.</li>
                            <li><i class="fa-solid fa-circle-check"></i> واجهة معمارية عصرية لجاذبية بصرية قوية.</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Administrative Floors -->
                <div class="glass-panel" style="border-radius: 22px; padding: 2.2rem; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem;">
                            <span class="unit-type-tag admin-tag" style="position: static;">الطابق الرابع إلى الثامن</span>
                            <span class="num-font" style="font-weight: 800; color: var(--azure-700); font-size: 1.05rem;">10,960 م²</span>
                        </div>
                        <h3 style="font-size: 1.3rem; font-weight: 900; margin-bottom: 1rem;">الطوابق الإدارية (الطابق الرابع إلى الثامن)</h3>
                        <ul class="unit-features-list">
                            <li><i class="fa-solid fa-circle-check"></i> مساحات مكتبية للشركات والمستثمرين.</li>
                            <li><i class="fa-solid fa-circle-check"></i> تصميم عصري يجمع بين العملية والجمال.</li>
                            <li><i class="fa-solid fa-circle-check"></i> مكاتب بنكية في الطابق الأول.</li>
                            <li><i class="fa-solid fa-circle-check"></i> تصميم آمن ومرن لمساحة العمل.</li>
                            <li><i class="fa-solid fa-circle-check"></i> بيئة آمنة وفعالة مدعومة بأحدث التقنيات.</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Basement Parking -->
                <div class="glass-panel" style="border-radius: 22px; padding: 2.2rem; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem;">
                            <span class="unit-type-tag banking-tag" style="position: static;">الطابق السفلي</span>
                            <span class="num-font" style="font-weight: 800; color: var(--azure-700); font-size: 1.05rem;">6,000 م²</span>
                        </div>
                        <h3 style="font-size: 1.3rem; font-weight: 900; margin-bottom: 1rem;">الطابق السفلي (موقف السيارات)</h3>
                        <ul class="unit-features-list">
                            <li><i class="fa-solid fa-circle-check"></i> موقف سيارات واسع (حوالي ٦٠٠٠ متر مربع).</li>
                            <li><i class="fa-solid fa-circle-check"></i> مدخل مباشر إلى المصاعد والطوابق الرئيسية.</li>
                            <li><i class="fa-solid fa-circle-check"></i> مصمم لضمان انسيابية حركة المرور وأمان المركبات.</li>
                            <li><i class="fa-solid fa-circle-check"></i> مستويين تحت الأرض مجهزين بأنظمة توجيه ذكية.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. منتجات المشروع -->
    <section class="theme-section" style="background-color: var(--bg-secondary);">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge">
                    <span class="badge-dot-cyan"></span>
                    <span>خدمات ومساحات متنوعة</span>
                </div>
                <h2 class="section-title">منتجات <span class="cyan-text">المشروع</span></h2>
                <p class="section-desc" style="max-width: 850px; margin-left: auto; margin-right: auto;">
                    يقدم خدمات تجارية متنوعة ومساحات مكاتب مختلفة. تم تصميم المبنى باستخدام تغطية معدنية وجدران زجاجية تعكس الواجهات المعمارية الحديثة. يستخدم هيكلية حديثة بطريقة ذوقية ويتبع النسب في التصميم المعماري.
                </p>
            </div>

            <!-- Products Detailed Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.8rem;">
                <!-- Product 1: Stores -->
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column;">
                    <div style="height: 180px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/unit-commercial-retail.jpg' ); ?>" alt="المتاجر التجارية" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.6rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="unit-type-tag commercial-tag" style="position: static; margin-bottom: 0.6rem;">تجاري وتجزئة</span>
                            <h3 style="font-size: 1.25rem; font-weight: 800; margin: 0.5rem 0;">المتاجر</h3>
                            <div class="num-font" style="font-size: 1.3rem; font-weight: 900; color: #0284c7; margin-bottom: 0.6rem;">45 - 150 <span style="font-size: 0.9rem; font-family: var(--font-ar);">م²</span></div>
                            <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.6;">تبدأ المساحات من 45 متر مربع إلى 150 متر مربع بواجهات زجاجية مزدوجة.</p>
                        </div>
                        <button class="btn-outline-cyan open-vip-modal" style="width: 100%; margin-top: 1.2rem;">طلب التفاصيل</button>
                    </div>
                </div>

                <!-- Product 2: Offices -->
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column;">
                    <div style="height: 180px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/unit-admin-office.jpg' ); ?>" alt="مكتب إداري" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.6rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="unit-type-tag admin-tag" style="position: static; margin-bottom: 0.6rem;">إداري وشركات</span>
                            <h3 style="font-size: 1.25rem; font-weight: 800; margin: 0.5rem 0;">مكتب إداري</h3>
                            <div class="num-font" style="font-size: 1.3rem; font-weight: 900; color: #0284c7; margin-bottom: 0.6rem;">60 - 150 <span style="font-size: 0.9rem; font-family: var(--font-ar);">م²</span></div>
                            <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.6;">تبدأ المساحات من 60 متر مربع إلى 150 متر مربع مع مداخل VIP واستقبال مستقل.</p>
                        </div>
                        <button class="btn-outline-cyan open-vip-modal" style="width: 100%; margin-top: 1.2rem;">طلب التفاصيل</button>
                    </div>
                </div>

                <!-- Product 3: Bank -->
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column;">
                    <div style="height: 180px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/unit-banking-hub.jpg' ); ?>" alt="مقرات بنك" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.6rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="unit-type-tag banking-tag" style="position: static; margin-bottom: 0.6rem;">بنوك ومصارف</span>
                            <h3 style="font-size: 1.25rem; font-weight: 800; margin: 0.5rem 0;">بنك</h3>
                            <div class="num-font" style="font-size: 1.3rem; font-weight: 900; color: #0284c7; margin-bottom: 0.6rem;">186 - 329 <span style="font-size: 0.9rem; font-family: var(--font-ar);">م²</span></div>
                            <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.6;">تبدأ المساحات من 186 متر مربع إلى 329 متر مربع بالطابق الأول والواجهة.</p>
                        </div>
                        <button class="btn-outline-cyan open-vip-modal" style="width: 100%; margin-top: 1.2rem;">طلب التفاصيل</button>
                    </div>
                </div>

                <!-- Product 4: Kiosk -->
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; background: #ffffff; border: 1.5px solid var(--border-light); display: flex; flex-direction: column;">
                    <div style="height: 180px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-retail-promenade.jpg' ); ?>" alt="كشك خدمات" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 1.6rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="unit-type-tag restaurant-tag" style="position: static; margin-bottom: 0.6rem;">خدمات سريعة</span>
                            <h3 style="font-size: 1.25rem; font-weight: 800; margin: 0.5rem 0;">كشك</h3>
                            <div class="num-font" style="font-size: 1.3rem; font-weight: 900; color: #0284c7; margin-bottom: 0.6rem;">35 <span style="font-size: 0.9rem; font-family: var(--font-ar);">مترًا</span></div>
                            <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.6;">بأبعاد 35 مترًا، مواقع استراتيجية ممتازة لحركة مرور الزوار.</p>
                        </div>
                        <button class="btn-outline-cyan open-vip-modal" style="width: 100%; margin-top: 1.2rem;">طلب التفاصيل</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. فريق قوي .. وراء كل نجاح رؤية (شركات وراء النجاح) -->
    <section class="theme-section">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge">
                    <span class="badge-dot-cyan"></span>
                    <span>فريق قوي .. وراء كل نجاح ..رؤيه</span>
                </div>
                <h2 class="section-title">شركات <span class="cyan-text">وراء النجاح</span></h2>
                <p class="section-desc">
                    التحالف الاستراتيجي والاستشاري والتنفيذي الموثق لمشروع District 1.
                </p>
            </div>

            <div class="partners-detailed-grid">
                <!-- 1. EGR -->
                <div class="partner-detailed-card glass-panel">
                    <div class="partner-card-icon-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/egr-logo-white.png' ); ?>" alt="EGR Real Estate" class="partner-card-logo" style="filter: brightness(0.2);">
                    </div>
                    <h3>شركة المجموعة الاقتصادية للاستثمارات العقارية – EGR</h3>
                    <p>
                        تعد من الأسماء الموثوقة في مجال التطوير العقاري بصعيد مصر. تأسست على يد <strong>السيد ياسر أحمد سليمـان</strong>، أحد أبرز المستثمرين في <strong>محافظة قنا</strong>، وقد بنت الشركة محفظة متنوعة تشمل قطاعات <strong>العقارات</strong> و <strong>الأغذية والمشروبات</strong>.
                    </p>
                    <span class="partner-role-tag">المطور العقاري للمشروع</span>
                </div>

                <!-- 2. MCG -->
                <div class="partner-detailed-card glass-panel">
                    <div class="partner-card-icon-wrap">
                        <span style="font-family: var(--font-num); font-size: 1.5rem; font-weight: 900; color: #0284c7; letter-spacing: 1.5px;">MCG</span>
                    </div>
                    <h3>شركة إم سي جي – مجموعة مروان للاستشارات</h3>
                    <p>
                        هي <strong>الاستشاري العام والمصمم المعماري</strong> للمشروع. تمتلك الشركة أكثر من <strong>أربعة عقود من الخبرة</strong> في مجالات <strong>العمارة، التصميم الداخلي، وإدارة المشروعات</strong>، مما جعلها اسماً موثوقاً في قطاع التصميم والتطوير العقاري في مصر. تأسست الشركة على يد <strong>المهندس المعماري طارق حسين</strong>.
                    </p>
                    <span class="partner-role-tag">الاستشاري العام والمصمم المعماري</span>
                </div>

                <!-- 3. SCC -->
                <div class="partner-detailed-card glass-panel">
                    <div class="partner-card-icon-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partner-elsaeed.png' ); ?>" alt="شركة الصعيد العامة للمقاولات" class="partner-card-logo">
                    </div>
                    <h3>شركة الصعيد العامة للمقاولات والاستثمار العقاري – SCC</h3>
                    <p>
                        هي <strong>المقاول العام</strong> للمشروع. تأسست الشركة لتعمل في نطاق واسع يشمل <strong>أعمال المقاولات العامة والخاصة</strong>، بما في ذلك <strong>البنية التحتية والمرافق العامة والمصارف المغطاة</strong>. ويمتد نطاق خبرتها ليشمل <strong>إدارة واستخراج مواد البناء</strong>، وتشغيل <strong>المحاجر</strong>، وإنشاء <strong>المصانع والورش</strong> التي تدعم مشروعاتها أو تخدم أطرافاً أخرى.
                    </p>
                    <span class="partner-role-tag">المقاول العام للمشروع</span>
                </div>

                <!-- 4. SCAN -->
                <div class="partner-detailed-card glass-panel">
                    <div class="partner-card-icon-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partner-scan.png' ); ?>" alt="مكتب سكن للاستشارات الهندسية" class="partner-card-logo">
                    </div>
                    <h3>مكتب سكن للاستشارات الهندسية</h3>
                    <p>
                        هو <strong>الاستشاري الإنشائي</strong> للمشروع. تأسس على يد <strong>الأستاذ الدكتور حداد سعيد حداد</strong>، أحد الخبراء المرموقين في <strong>المركز القومي لبحوث الإسكان والبناء</strong>، ويتميز المكتب بخبرة علمية وفنية عميقة في مجال الهندسة الإنشائية.
                    </p>
                    <span class="partner-role-tag">الاستشاري الإنشائي للمشروع</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Architectural Gallery -->
    <section class="theme-section" style="background-color: var(--bg-secondary);">
        <div class="site-container">
            <div class="section-title-wrap text-center-wrap">
                <div class="section-badge">
                    <span class="badge-dot-cyan"></span>
                    <span>معرض الأيقونة المعمارية</span>
                </div>
                <h2 class="section-title">رؤية بصرية حية <span class="cyan-text">لأبعاد صرح District 1</span></h2>
                <p class="section-desc">استكشف الرندرات المعمارية المعتمدة والواجهات الزجاجية المتطورة وممشى البوتيك لصرح ديستركت 1.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin-bottom: 2rem;">
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; position: relative;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-elevation-front-hd.jpg' ); ?>" alt="الواجهة الرئيسية الكاملة" style="width: 100%; height: 380px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(15, 23, 42, 0.95), transparent);">
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 800;">الواجهة الرئيسية والارتفاع الكامل (33.6 متراً)</h4>
                        <p style="color: #cbd5e1; font-size: 0.85rem;">تناغم هندسي بين حجر الترافرتين الطبيعي والزجاج المزدوج العازل</p>
                    </div>
                </div>

                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; position: relative;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-retail-promenade.jpg' ); ?>" alt="ممشى المحلات ومتاجر البوتيك" style="width: 100%; height: 380px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(15, 23, 42, 0.95), transparent);">
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 800;">الممشى التجاري ومحلات البوتيك</h4>
                        <p style="color: #cbd5e1; font-size: 0.85rem;">مساحات تجارية راقية لكبرى التوكيلات مع حركة مشاة وتشجير عصري</p>
                    </div>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; position: relative;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-commercial-day.jpg' ); ?>" alt="البوديوم ومدخل الهايبر ماركت" style="width: 100%; height: 320px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.2rem; background: linear-gradient(to top, rgba(15, 23, 42, 0.95), transparent);">
                        <h5 style="color: #fff; font-weight: 800; font-size: 1.05rem;">البوديوم التجاري ومدخل الهايبر ماركت</h5>
                    </div>
                </div>

                <div class="glass-panel" style="border-radius: 20px; overflow: hidden; position: relative;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-hypermarket-entrance.jpg' ); ?>" alt="مداخل ومواقف السيارات" style="width: 100%; height: 320px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.2rem; background: linear-gradient(to top, rgba(15, 23, 42, 0.95), transparent);">
                        <h5 style="color: #fff; font-weight: 800; font-size: 1.05rem;">مداخل ورامبات مواقف السيارات (6,000 م²)</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Contact Section -->
    <?php get_template_part( 'template-parts/section-contact' ); ?>
</main>

<?php
get_footer();
