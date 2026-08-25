<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main" style="padding: 140px 0 100px; text-align: center;">
    <div class="site-container">
        <div class="glass-panel" style="max-width: 650px; margin: 0 auto; padding: 4rem 2.5rem;">
            <div class="num-font" style="font-size: 5rem; font-weight: 900; color: var(--azure-800); line-height: 1; margin-bottom: 1rem;">404</div>
            <h1 style="font-size: 1.8rem; margin-bottom: 1rem;">الصفحة غير موجودة</h1>
            <p style="color: var(--text-secondary); margin-bottom: 2rem; font-size: 1rem;">
                عذراً، الصفحة التي تبحث عنها قد تم نقلها أو أنها غير متوفرة حالياً. يمكنك العودة إلى الصفحة الرئيسية لمشروع ديستركت 1.
            </p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-cyan">
                <i class="fa-solid fa-house"></i>
                <span>العودة للرئيسية</span>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
