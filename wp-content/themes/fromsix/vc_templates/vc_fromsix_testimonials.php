<?php
if( !empty($atts['count']) ) { $count = $atts['count']; }
if(!$count) $count = 3;
global $post;
$args = array(
'numberposts' => $count,
'post_type'   => 'testimonial',
'language'    => pll_current_language(),
'orderby'     => 'rand',
'language'    => pll_current_language()
);
$testimonials = get_posts( $args );
if ( ! empty( $testimonials ) ) : ?>

<div class="testimonial_slider">
  <div class="slider responsive-3col autoplay">
  <?php foreach ( $testimonials as $post ) :
    setup_postdata( $post );
    $testimonial_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="multiple testimonial_slide">
        <span class="image_cut"><img src="<?php print $testimonial_image[0]; ?>" alt="alt"></span>
        <h3 class="bree text-center text-semibold text-charcoal"><?php echo get_the_title($post->ID); ?></h3>
        <p class="bree text-center text-light text-charcoal"><?php echo get_post_field('post_content', $post->ID); ?></p>
        <span><a class="testimonial_button from6_button fsix-icon-right-arrow fill-orange fill-hover-white bree text-center text-semibold text-charcoal background-white background-hover-orange" ref="#">View Project <svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></a></span>
    </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
</div>
<?php endif;