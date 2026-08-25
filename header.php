<?php
/**
 * District 1 Theme Header (With Luxury 3D Holographic Architectural Preloader)
 */
if ( ! headers_sent() ) {
    header( 'Content-Type: text/html; charset=UTF-8' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ! is_front_page() ? 'interior-page' : '' ); ?>>
<?php wp_body_open(); ?>

<?php if ( is_front_page() ) : ?>
<!-- Luxury 3D Holographic Architectural Preloader (Front Page Only) -->
<div id="site-preloader" class="site-preloader">
    <div class="preloader-content">
        <!-- Official EGR Logo -->
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/egr-logo.png' ); ?>" alt="EGR Investments" class="preloader-logo">
        
        <!-- 3D Architectural Viewport with Floating Blueprint Tags -->
        <div class="preloader-3d-viewport">
            <canvas id="preloader-3d-canvas"></canvas>
            <div class="laser-scanner-line"></div>
            
            <div id="holo-tag-top" class="holo-callout holo-callout-top">
                <span class="dot"></span>
                <span>الارتفاع: 33.6 متراً</span>
            </div>
            <div id="holo-tag-mid" class="holo-callout holo-callout-mid">
                <span class="dot"></span>
                <span>المباني: 21,667 م²</span>
            </div>
            <div id="holo-tag-bot" class="holo-callout holo-callout-bot">
                <span class="dot"></span>
                <span>المواقف: 6,000 م²</span>
            </div>
        </div>

        <div class="preloader-progress-wrap">
            <div id="preloader-bar" class="preloader-progress-bar"></div>
        </div>

        <div class="preloader-status-row">
            <div class="preloader-phase-tag">
                <span class="badge-dot-cyan"></span>
                <span id="preloader-phase-text">جاري تشييد الأساسات العميقة ومواقف السيارات...</span>
            </div>
            <span id="preloader-count" class="preloader-counter num-font">0%</span>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Luxury Glassmorphic Navbar (Always Visible, Responsive & Elegant) -->
<header id="site-header" class="site-header">
    <div class="site-container header-inner">
        <!-- Brand Area -->
        <div class="header-brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-link" aria-label="الرئيسية EGR">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/egr-logo.png' ); ?>" alt="EGR Investments" class="brand-logo">
            </a>
            <div class="brand-divider"></div>
            <div class="brand-badge-wrap">
                <span class="brand-tag">DISTRICT 1</span>
                <span class="brand-subtag">قلب قنا</span>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="header-nav">
            <ul id="nav-links" class="nav-links">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">الرئيسية</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link">من نحن</a></li>
                <li><a href="<?php echo esc_url( home_url( '/district1/' ) ); ?>" class="nav-link">مشروع ديستركت 1</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link">اتصل بنا</a></li>
                <li class="mobile-cta-item">
                    <button class="btn-cyan open-vip-modal" style="width: 100%; margin-top: 1rem;">
                        <i class="fa-solid fa-gem"></i>
                        <span>حجز استشارة VIP</span>
                    </button>
                </li>
            </ul>
        </nav>

        <!-- Actions -->
        <div class="header-actions">
            <button class="btn-cyan open-vip-modal desktop-cta">
                <i class="fa-solid fa-gem"></i>
                <span>حجز استشارة VIP</span>
            </button>
            <button id="mobile-nav-toggle" class="mobile-nav-toggle" aria-label="فتح القائمة">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </div>
</header>
