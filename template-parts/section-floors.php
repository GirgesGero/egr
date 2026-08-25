<?php
/**
 * Template Part: Pure Full-Width Background Video Window (Curtain Reveal)
 * Silent 100% Full-Viewport Video Window revealing with scroll
 *
 * @package District1
 */
$theme_uri = get_template_directory_uri();
?>
<section id="floors-section" class="pure-video-window-section">
    <!-- Fixed/Sticky Background Video Viewport Layer -->
    <div class="video-window-viewport" id="floor-video-card">
        <video id="floor-promo-video" 
               class="video-window-media" 
               src="<?php echo esc_url( $theme_uri . '/assets/videos/district-one-promo.mp4' ); ?>" 
               poster="<?php echo esc_url( $theme_uri . '/assets/images/district1-elevation-front-hd.jpg' ); ?>" 
               muted 
               loop 
               playsinline 
               preload="auto"
               autoplay>
        </video>
        <!-- Subtle Cinematic Lighting Overlay -->
        <div class="video-window-overlay"></div>
    </div>
</section>
