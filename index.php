<?php
/**
 * The main template file
 *
 * @package District1
 */

get_header();
?>

<main class="site-main page-interior-main" style="padding: 120px 0 80px;">
    <div class="site-container">
        <div class="section-title-wrap text-center-wrap">
            <div class="section-badge">
                <span class="badge-dot-cyan"></span>
                <span>الأخبار والتقارير العقارية</span>
            </div>
            <h1 class="section-title">آخر مستجدات <span class="cyan-text">District 1 وشركة EGR</span></h1>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article class="glass-panel" style="padding: 2rem; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div style="border-radius: 12px; overflow: hidden; margin-bottom: 1.2rem;">
                                    <?php the_post_thumbnail( 'medium', array( 'style' => 'width: 100%; height: 200px; object-fit: cover;' ) ); ?>
                                </div>
                            <?php endif; ?>
                            <h2 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 0.8rem;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn-outline-cyan" style="align-self: flex-start;">
                            <span>قراءة المزيد</span>
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p style="text-align: center; grid-column: 1 / -1; color: var(--text-secondary);">لا توجد منشورات متاحة حالياً.</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
