<?php
if ( isset($atts['images']) ):
$images = $atts['images'];

$image_ids = explode(',',$atts['images']); ?>

<div class="image-box__wrapper image-box image-box--fullscreen image-box--without-triangle">
  <div class="image-box__wrapper image-box__wrapper--fourth">
    <?php foreach ( $image_ids as $image_id ) : 
            $images_data = wp_get_attachment_image_src( $image_id, 'full' );
            $img_url = $images_data[0];
            $img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', TRUE ); ?>
            <a href="<?php echo $img_url; ?>" data-fancybox="work-gallery"
                data-caption="<?php echo $img_alt; ?>" class="image-box__fancybox-link">
              <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>"
                    class="image-box__image image-box__image--fourth">
            </a>
    <?php endforeach; ?>
  </div>
</div>

<?php endif;

