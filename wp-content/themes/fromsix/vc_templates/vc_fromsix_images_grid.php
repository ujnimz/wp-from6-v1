<?php
if ( isset($atts['images']) ): ?>
<div class="images_grid_wrapper <?php print $atts['wrapper_class'] ?>">
<?php
  $gallery = shortcode_atts( array( 'images' => 'images', ), $atts );
  $image_ids = explode(',',$gallery['images']);
   
  if (count($image_ids) == 1) {
    $style = 'style="display: contents;"';
  } else {
    $style = '';
  }
  
  foreach( $image_ids as $image_id ){
    $image = wp_get_attachment_image_src( $image_id, 'full' );
    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', TRUE ); ?>
    <div <?php print $style; ?> class="images_grid_item"><img class="resposive_image" src="<?php echo $image[0] ?>" alt="<?php echo $image_alt ?>"></div>
  <?php } ?>
</div>
<?php endif;