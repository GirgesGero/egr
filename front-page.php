<?php
/**
 * The Front Page Template for District 1 Luxury Real Estate Theme
 *
 * @package District1
 */

get_header();
?>

<main id="main-content" class="site-main">
    <?php
    // 1. Hero Section (WebGL + 120-Frame Scrubber + Center Zoom & Split Curtain revealing Stats)
    get_template_part( 'template-parts/hero-webgl' );

    // 2. Section Interactive Building Floor Stacker
    get_template_part( 'template-parts/section-floors' );

    // 3. Section Master Unified Units, Spaces & 3D Interactive Facilities
    get_template_part( 'template-parts/section-units' );

    // 4. Section Strategic Location (Qena City Center)
    get_template_part( 'template-parts/section-location' );

    // 5. Section Project Timeline & Leadership Spotlight
    get_template_part( 'template-parts/section-timeline' );

    // 6. Section Strategic Partners
    get_template_part( 'template-parts/section-partners' );

    // 7. Section Interactive VIP Contact Form
    get_template_part( 'template-parts/section-contact' );
    ?>
</main>

<?php
get_footer();
