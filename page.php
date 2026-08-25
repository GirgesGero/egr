<?php
/**
 * The template for displaying all single pages
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main" style="padding: 120px 0 80px;">
    <div class="site-container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class( 'glass-panel' ); ?> style="padding: 3rem; margin-bottom: 2rem;">
                <div class="section-badge">
                    <span class="badge-dot-cyan"></span>
                    <span>المجموعة الاقتصادية للاستثمار // DISTRICT 1</span>
                </div>
                <h1 class="section-title" style="margin-bottom: 1.8rem;"><?php the_title(); ?></h1>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="border-radius: 16px; overflow: hidden; margin-bottom: 2rem; border: 1px solid var(--border-light);">
                        <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1rem; line-height: 1.85; color: var(--text-secondary);">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
