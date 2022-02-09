<?php
/**
 * Template part for displaying posts
 *
 * @package fromsix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

	<!-- NEWS START -->
  <?php if ( have_posts() ) : ?>
    <section class="news <?php if ( empty( $text_block ) ) : echo 'news--indent-top'; endif ?>">
      <div class="news__wrapper">
        <ul class="news__list">
          <?php while ( have_posts() ) :
            the_post();
            $thumbnail = get_the_post_thumbnail_url( $post->ID, 'large' ); ?>
            <li class="news-preview news__item" id="<?php the_ID(); ?>">
              <?php if ( ! empty( $thumbnail ) ) : ?>
                <a href="<?php the_permalink(); ?>" class="news-preview__cover">
                  <img src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>"
                       class="news-preview__image">
                </a>
              <?php endif; ?>
              <div class="news-preview__information <?php if ( empty( $thumbnail ) ) : echo 'news-preview__information--static'; endif ?>">
                <h2 class="news-preview__title"><?php the_title(); ?></h2>
                <span class="news-preview__date"><?php echo get_the_date('d/m/Y'); ?></span>
                <div class="news-preview__excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="news-preview__link">
                  <?php pll_e('Read More'); ?>
                  <svg width="18" height="12" role="presentation" aria-hidden="true">
                    <use xlink:href="#icon-arrow-right"></use>
                  </svg>
                </a>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php $lang_term = get_term_by( 'slug', pll_current_language(), 'language' ); ?>
        <button type="button" data-language="<?php echo $lang_term->term_id; ?>"
                data-per-page="<?php echo get_option( 'posts_per_page' ); ?>" class="button" id="more-posts">
          <?php pll_e('Load more'); ?>
        </button>

        <!-- PRELOADER START -->
        <div class="news__preloader">
          <div class="preloader">
            <div class="preloader__content">
              <div class="preloader__item preloader__item--1"></div>
              <div class="preloader__item preloader__item--2"></div>
              <div class="preloader__item preloader__item--3"></div>
              <div class="preloader__item preloader__item--4"></div>
            </div>
          </div>
        </div>
        <!-- PRELOADER END -->

      </div>
    </section>
  <?php endif; ?>
  <!-- NEWS END -->

</article>
