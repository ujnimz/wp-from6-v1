<?php
global $post;
$args = array(
'numberposts' => -1,
'post_type'   => 'team',
'language'    => pll_current_language(),
'orderby'     => 'ASC',
'language'    => pll_current_language()
);
$testimonials = get_posts( $args );
if ( ! empty( $testimonials ) ) : ?>

<div class="team_wrap box_wrapper">
  <ul class="team_grid">
  <?php foreach ( $testimonials as $post ) :
  setup_postdata( $post );
  $testimonial_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <li>
      <div class="team_image">
        <div class="hover_image_change">
          <div class="image_cut"><img class="resposive_image" src="<?php print $testimonial_image[0]; ?>" alt="<?php print get_post_meta( $testimonial_image[2], '_wp_attachment_image_alt', true ) ?>"></div>
        </div>
        <div class="team_image_change">
          <div class="image_cut"><img class="resposive_image" src="<?php the_field('hover_image'); ?>" alt="<?php print $testimonial_image[1]; ?>"></div>
        </div>
      </div>
      <div class="team_name"><h4 class="<?php echo $atts['name_font_family'] ?> <?php echo $atts['name_heading_align'] ?> <?php echo $atts['name_font_weight'] ?> <?php echo $atts['name_text_color'] ?>"><?php echo get_the_title($post->ID); ?></h4></div>
      <div class="team_title"><span class="<?php echo $atts['title_font_family'] ?> <?php echo $atts['title_heading_align'] ?> <?php echo $atts['title_font_weight'] ?> <?php echo $atts['title_text_color'] ?>"><?php echo get_post_field('title', $post->ID); ?></span></div>
    </li>
  <?php endforeach;
  wp_reset_postdata(); ?>
  </ul>
</div>
<?php endif;