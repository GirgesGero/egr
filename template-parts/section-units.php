<?php
/**
 * Template Part: Official 6-Box Facilities & Spaces Showcase (Front: Icon & Text, Back: 3D Flip Image)
 */
?>
<section id="units-section" class="theme-section units-section">
    <div class="site-container">
        <!-- Subtitle matching reference -->
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <p style="color: #0284c7; font-weight: 700; font-size: 1.05rem; margin: 0;">
                ليس مجرد مساحة تجارية وإدارية، بل مجتمع متكامل يقدم تجربة عصرية ومريحة.
            </p>
        </div>

        <!-- 6-Box Exact Layout Grid (3 Columns x 2 Rows) -->
        <div class="facilities-exact-grid">
            <!-- Box 1: تجربة التسوق والبيع بالتجزئة (Top Right / RTL Box 1) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: Teal Accent with Cart Icon -->
                    <div class="facility-box-front facility-teal-accent">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <h3 class="facility-title">تجربة التسوق والبيع بالتجزئة</h3>
                        <p class="facility-desc">
                            مجموعة متنوعة من المتاجر، من الموضة إلى الإلكترونيات، مصممة لتوفير الراحة، الفخامة، والتجارب التجارية الحديثة.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-retail-promenade.jpg' ); ?>" alt="الممشى التجاري ومحلات البوتيك" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>الممشى التجاري ومحلات البوتيك</h4>
                            <p>واجهات زجاجية عصرية لكبرى العلامات التجارية في قلب قنا</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 2: هايبر ماركت (Top Middle / RTL Box 2) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: White with Basket Icon -->
                    <div class="facility-box-front">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                        <h3 class="facility-title">هايبر ماركت</h3>
                        <p class="facility-desc">
                            هايبر ماركت مجهز بالكامل في الطابق الأرضي، يوفر مجموعة واسعة من الاحتياجات اليومية تحت سقف واحد.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-commercial-day.jpg' ); ?>" alt="هايبر ماركت" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>هايبر ماركت متكامل بالطابق الأرضي</h4>
                            <p>مساحات واسعة مخصصة لأكبر السلاسل التجارية والهايبر ماركت</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 3: المأكولات الفاخرة والمطاعم (Top Left / RTL Box 3) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: White with Cup Icon -->
                    <div class="facility-box-front">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-mug-saucer"></i>
                        </div>
                        <h3 class="facility-title">المأكولات الفاخرة والمطاعم</h3>
                        <p class="facility-desc">
                            تجارب طعام غامرة وأصيلة عبر ثلاثة طوابق، تقدم مجموعة متنوعة من المأكولات في أجواء نابضة بالحياة.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/unit-restaurant-cafe.jpg' ); ?>" alt="المأكولات الفاخرة والمطاعم" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>مطاعم وشرفات معلقة</h4>
                            <p>أجواء طعام حية وتراسات مكشوفة بإطلالات بانورامية على الميدان</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 4: مداخل إدارية خاصة (Bottom Right / RTL Box 4) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: White with Building Icon -->
                    <div class="facility-box-front">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-city"></i>
                        </div>
                        <h3 class="facility-title">مداخل إدارية خاصة</h3>
                        <p class="facility-desc">
                            لضمان التدفق السلس والأمان المحسن، يقدم ديستركت 1 مداخل إدارية حصرية.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/unit-admin-office.jpg' ); ?>" alt="مداخل إدارية خاصة" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>مداخل واستقبال VIP</h4>
                            <p>خصوصية وأمان منفصل ومصاعد سريعة للشركات والعيادات</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 5: المساحات الإدارية (Bottom Middle / RTL Box 5) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: White with Briefcase/Office Icon -->
                    <div class="facility-box-front">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h3 class="facility-title">المساحات الإدارية</h3>
                        <p class="facility-desc">
                            توفر طوابقنا الإدارية بيئة احترافية مصممة خصيصًا للشركات بجميع الأحجام.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-elevation-front-hd.jpg' ); ?>" alt="المساحات الإدارية" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>الأبراج الإدارية (4F - 8F)</h4>
                            <p>بنية ألياف ضوئية ذكية FTTH وقاعات اجتماعات مشتركة مجهزة</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 6: مواقف السيارات (Bottom Left / RTL Box 6) -->
            <div class="facility-exact-box">
                <div class="facility-box-inner">
                    <!-- FRONT: White with Parking Icon -->
                    <div class="facility-box-front">
                        <div class="facility-icon-wrap">
                            <i class="fa-solid fa-square-parking"></i>
                        </div>
                        <h3 class="facility-title">مواقف السيارات</h3>
                        <p class="facility-desc">
                            مستويين تحت الأرض يقدمان 6,000 متر مربع من مواقف السيارات الواسعة والآمنة، مصممة لتدفق العملاء السلس وسهولة الوصول إلى المبنى.
                        </p>
                    </div>
                    <!-- BACK: Full HD Image on Flip -->
                    <div class="facility-box-back">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/district1-hypermarket-entrance.jpg' ); ?>" alt="مواقف السيارات" class="facility-back-img">
                        <div class="facility-back-overlay">
                            <h4>مواقف ذكية 6,000 م²</h4>
                            <p>أنظمة توجيه ذكية ومصاعد مباشرة لكافة الأدوار</p>
                            <button class="btn-cyan open-vip-modal"><i class="fa-solid fa-gem"></i> طلب التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
