<?php
$wrapper_classes = $atts['layout_style'].' '.$atts['background_color'];

$args = array(
  'type' => 'work',
  'taxonomy' => 'work-category',
  'orderby' => 'ID'
);
$categories = get_categories($args);

if ( ! empty( $categories ) ) : ?>
  <div class="services_slider">
    <div class="slider responsive-4col autoplay">
    <?php foreach ( $categories as $category ) :
      if( !empty( $category ) ):
      if ( get_field('show_on_homepage', 'category_'.$category->term_id) ) :
      $img_attributes = get_field('image', 'category_'.$category->term_id);
      $img_url = $img_attributes['url']; $img_alt = $img_attributes['alt']; ?>
      <div class="multiple services_slide">
        <a data-hover-text="<?php print $atts['hover_text'] ?>" class="bree text-semibold text-charcoal text-hover-white background-light-gray background-hover-orange fsix-icon-right-arrow fill-orange fill-hover-white" href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" title="<?php echo esc_html( $category->name ) ?>">
          <img src="<?php echo $img_url ?>" alt="<?php echo $img_alt ?>">
          <span class="services_slide_button fromsix_button"><p><?php echo esc_html( $category->name ) ?></p><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></span>
        </a>
      </div>
      <?php endif; endif; endforeach; ?>
    </div>
  </div>
<?php endif;