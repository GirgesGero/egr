<?php
/**
 * Template Name: اتصل بنا وحجز الوحدات
 * Description: صفحة التواصل المباشر مع مستشاري EGR وحجز الاستشارات
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main">
    <section class="page-hero-banner">
        <div class="site-container">
            <div class="section-badge">
                <span class="badge-dot-cyan"></span>
                <span>خدمة المستثمرين والعملاء 24/7</span>
            </div>
            <h1 class="page-hero-title">تواصل معنا — <span class="cyan-text">امتلك وحدتك في District 1</span></h1>
            <p class="page-hero-subtitle">
                فريق المستشارين العقاريين لشركة EGR جاهز لخدمتكم وتزويدكم بكتيب الأسعار وعروض السداد الميسرة.
            </p>
        </div>
    </section>

    <?php
    get_template_part( 'template-parts/section-contact' );
    get_template_part( 'template-parts/section-location' );
    ?>
</main>

<?php
get_footer();
