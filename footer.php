<!-- VIP Booking Modal -->
<div id="vip-modal-overlay" class="vip-modal-overlay">
    <div class="vip-modal-card">
        <button id="modal-close-btn" class="modal-close-btn" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="section-badge">
            <span class="badge-dot-cyan"></span>
            <span>حجز موعد واستشارة عقارية</span>
        </div>
        <h3 style="font-size: 1.6rem; margin-bottom: 0.8rem;">امتلك وحدتك في <span class="cyan-text">District 1</span></h3>
        <p style="font-size: 0.95rem; margin-bottom: 1.8rem; color: var(--text-secondary);">
            سجل بياناتك للتواصل المباشر مع المستشار العقاري الرسمي لمشروع ديستركت 1 بقلب قنا والحصول على كتيب الأسعار والمخططات.
        </p>
        <form class="vip-modal-form" onsubmit="event.preventDefault(); window.open('https://wa.me/201040022670?text=' + encodeURIComponent('مرحباً EGR، أود الاستفسار عن وحدات مشروع District 1 بقلب قنا.'), '_blank');">
            <div class="form-group">
                <label>الاسم الكامل</label>
                <input type="text" class="form-control" placeholder="أدخل اسمك الكريم" required>
            </div>
            <div class="form-group">
                <label>رقم الهاتف / واتساب</label>
                <input type="tel" class="form-control num-font" placeholder="010XXXXXXXX" required>
            </div>
            <div class="form-group">
                <label>نوع الوحدة المستهدفة</label>
                <select class="form-control">
                    <option>وحدة تجارية / براند (45 - 150 م²)</option>
                    <option>مقر إداري / عيادة (60 - 150 م²)</option>
                    <option>مقر مصرفي / بنك (186 - 329 م²)</option>
                    <option>كشك خدمات سريعة (35 م²)</option>
                </select>
            </div>
            <button type="submit" class="btn-cyan" style="width: 100%; margin-top: 1rem;">
                <i class="fa-brands fa-whatsapp" style="font-size: 1.2rem;"></i>
                <span>إرسال وتواصل فوري عبر واتساب</span>
            </button>
        </form>
    </div>
</div>

<!-- Site Footer -->
<footer class="site-footer">
    <div class="site-container">
        <div class="footer-top-grid">
            <div class="footer-col">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/egr-logo-white.png' ); ?>" alt="EGR Real Estate" class="footer-logo">
                <p style="font-size: 0.95rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    <strong>EGR للاستثمار والتطوير العقاري</strong> — المطور الرسمي لمشروع ديستركت 1، الوجهة التجارية والإدارية المتكاملة في قلب مدينة قنا.
                </p>
                <div style="display: flex; gap: 1rem; color: var(--cyan-400); font-size: 1.2rem;">
                    <a href="https://district1-eg.com/" target="_blank" rel="noopener"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/egr.invesments" target="_blank" rel="noopener"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://wa.me/201040022670" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">روابط سريعة</h4>
                <ul class="footer-nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/#hero-section' ) ); ?>">الرئيسية</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#floors-section' ) ); ?>">مواصفات المشروع</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#floors-section' ) ); ?>">مستكشف الطوابق</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#units-section' ) ); ?>">المساحات والوحدات</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#location-section' ) ); ?>">الموقع الاستراتيجي</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">مشروع District 1</h4>
                <ul class="footer-nav-list">
                    <li><span>مساحة الأرض: 3,200 م²</span></li>
                    <li><span>الارتفاع: 33.6 متر</span></li>
                    <li><span>إجمالي المباني: 21,667 م²</span></li>
                    <li><span>مواقف السيارات: 6,000 م²</span></li>
                    <li><span>التسليم: أكتوبر 2028</span></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">معلومات الاتصال</h4>
                <ul class="footer-nav-list">
                    <li><i class="fa-solid fa-phone" style="color: var(--cyan-400); margin-left: 0.5rem;"></i> <span class="num-font">01040022670</span></li>
                    <li><i class="fa-solid fa-envelope" style="color: var(--cyan-400); margin-left: 0.5rem;"></i> <span class="num-font">contact@district1-eg.com</span></li>
                    <li><i class="fa-solid fa-location-dot" style="color: var(--cyan-400); margin-left: 0.5rem;"></i> قلب مدينة قنا، محافظة قنا، مصر</li>
                    <li><i class="fa-solid fa-clock" style="color: var(--cyan-400); margin-left: 0.5rem;"></i> متاح للرد 24/7</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; <?php echo date('Y'); ?> <strong>EGR للاستثمار العقاري</strong> — جميع الحقوق محفوظة لمشروع District 1.
            </div>
            <div>
                المصدر الرسمي الموثق: <a href="https://district1-eg.com/" target="_blank" rel="noopener" style="color: var(--cyan-400);">district1-eg.com</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
