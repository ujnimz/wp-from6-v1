<!-- MORE WORKS START -->
<?php $similar_works = get_field( 'projects_like_this' );
if ( ! empty( $similar_works ) ) : ?>
  <section class="more-works">
    <div class="more-works__wrapper">
      <h2 class="more-works__headline"><?php echo $atts['ralated_title'] ?></h2>
      <ul class="more-works__list">
        <?php global $post; foreach ( $similar_works as $post ) :
          setup_postdata( $post );
          $image       = get_the_post_thumbnail_url($post->ID, 'large');
          $description = get_field( 'client', $post->ID );
          $post_terms  = get_the_terms( $post->ID, 'works-category' );
          ?>
          <li class="more-works__item" style="background-image: url(<?php echo $image ?>);">
            <a href="<?php the_permalink(); ?>" class="more-works__link">
              <div class="more-works__information">
                <h3 class="more-works__title"><?php the_title(); ?></h3>
                <?php if ( ! empty( $description ) ) : ?>
                  <span class="more-works__caption"><?php echo $description; ?></span>
                <?php endif; ?>
                <?php if ( ! empty( $post_terms ) ) : ?>
                  <ul class="more-works__tags">
                    <?php $i=0; foreach ( $post_terms as $post_term ) : ?>
                      <?php if($i==3) break; ?>
                        <li class="more-works__tag"><?php echo $post_term->name; ?></li>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </a>
          </li>
        <?php endforeach;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
<!-- MORE WORKS END -->