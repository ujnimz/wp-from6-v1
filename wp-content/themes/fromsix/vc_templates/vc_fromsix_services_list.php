<?php
global $post;
$args = array(
  'type' => 'work',
  'taxonomy' => 'work-category',
  'order' => 'ASC'
);
$categories = get_categories($args);
if ( ! empty( $categories ) ) : ?>

<div class="services_list_wrap box_wrapper">
  <ul class="services_list">
  <?php foreach ( $categories as $category ) :
  //var_dump($category);
    if( !empty( $category ) && !empty( $category->category_description ) ): 
      
      $description = $category->category_description;
    ?>
    <li>
      <h3 class="bree text-orange text-regular"><?php echo esc_html( $category->name ) ?></h3>
      <?php // explode
        $list = explode("\n", $description);
        $method = '<ul class="bree text-charcoal text-light">';
        foreach ($list as $item) {
          $method .= '<li>'.$item.'</li>';
        }
        $method .= '</ul>';
        echo $method;
      ?>
      <span class="hover_text_change"><a data-hover-text="<?php print $atts['hover_text'] ?>" class="services_list_button from6_button fsix-icon-right-arrow fill-orange fill-hover-white bree text-center text-semibold text-charcoal background-white background-hover-orange" href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>"><p><?php print $atts['button_text'] ?></p> <svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></a></span>
    </li>
  <?php endif; endforeach; ?>
  </ul>
</div>
<?php endif;