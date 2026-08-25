<?php
/**
 * Template Part: Interactive Contact & VIP Consultation Lounge
 */
?>
<section id="contact-section" class="theme-section" style="background-color: var(--bg-secondary);">
    <div class="site-container">
        <div class="contact-vip-grid">
            <div>
                <div class="section-badge luxury-badge-glow">
                    <span class="badge-dot-cyan-pulsing"></span>
                    <span>تواصل مباشر واستشارة فورية 24/7</span>
                </div>
                <h2 class="section-title luxury-main-title" style="text-align: right;">
                    تواصل مع مستشاري <span class="cyan-text">EGR للاستثمار العقاري</span>
                </h2>
                <p class="section-desc" style="margin-bottom: 2.5rem; text-align: right;">
                    فريقنا المتخصص جاهز للإجابة عن استفساراتكم وتزويدكم بالأسعار التنافسية وخطط السداد المتاحة لمشروع District 1 بقلب قنا.
                </p>

                <div class="contact-info-cards">
                    <a href="tel:01040022670" class="contact-card-item glass-panel">
                        <div class="contact-icon-circle">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.85rem; color: var(--text-muted);">الخط المباشر الساخن (24/7)</div>
                            <div class="num-font" style="font-size: 1.3rem; font-weight: 900; color: #0284c7;">01040022670</div>
                        </div>
                    </a>

                    <a href="https://wa.me/201040022670?text=<?php echo rawurlencode('مرحباً EGR، أود الاستفسار عن تفاصيل وحجز وحدات مشروع District 1 بقلب قنا.'); ?>" target="_blank" rel="noopener" class="contact-card-item glass-panel">
                        <div class="contact-icon-circle" style="color: #25D366; background: rgba(37, 211, 102, 0.1);">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.85rem; color: var(--text-muted);">محادثة فورية عبر واتساب</div>
                            <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary);">تواصل مع خدمة العملاء الآن</div>
                        </div>
                    </a>

                    <div class="contact-card-item glass-panel">
                        <div class="contact-icon-circle">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.85rem; color: var(--text-muted);">البريد الإلكتروني الرسمي</div>
                            <div class="num-font" style="font-size: 1.05rem; font-weight: 800; color: var(--text-primary);">contact@district1-eg.com</div>
                        </div>
                    </div>

                    <div class="contact-card-item glass-panel">
                        <div class="contact-icon-circle">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.85rem; color: var(--text-muted);">الموقع الجغرافي المعتمد</div>
                            <div style="font-size: 1.05rem; font-weight: 800; color: var(--text-primary);">قلب مدينة قنا، محافظة قنا، مصر</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIP Consultation Form Box -->
            <div class="vip-form-box">
                <h3 style="font-size: 1.6rem; font-weight: 900; margin-bottom: 0.6rem;">طلب استشارة وعرض أسعار رسمي</h3>
                <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 2rem;">
                    املأ النموذج التالي وسيتم التواصل معكم في غضون دقائق من قِبل المستشار العقاري الرسمي لمشروع ديستركت 1.
                </p>

                <form onsubmit="event.preventDefault(); window.open('https://wa.me/201040022670?text=' + encodeURIComponent('مرحباً EGR، أود الحصول على كراسة الأسعار الرسمية لمشروع District 1.'), '_blank');">
                    <div class="form-group">
                        <label>الاسم بالكامل</label>
                        <input type="text" class="form-control" placeholder="أدخل اسمك الكريم" required>
                    </div>
                    <div class="form-group">
                        <label>رقم الهاتف / واتساب</label>
                        <input type="tel" class="form-control num-font" placeholder="010XXXXXXXX" required>
                    </div>
                    <div class="form-group">
                        <label>الوحدة أو النشاط المستهدف</label>
                        <select class="form-control">
                            <option>متجر تجاري / علامة تجارية (45 - 150 م²)</option>
                            <option>مكتب إداري ذكي / عيادة (60 - 150 م²)</option>
                            <option>مطعم / كافيه وتراس معلق (65 - 280 م²)</option>
                            <option>مقر بنك ومصرف (186 - 329 م²)</option>
                            <option>كشك خدمات سريعة (35 م²)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-cyan" style="width: 100%; margin-top: 1rem;">
                        <span>إرسال الطلب والتواصل الفوري</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
