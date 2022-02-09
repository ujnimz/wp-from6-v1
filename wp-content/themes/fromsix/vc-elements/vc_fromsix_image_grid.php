<?php

vc_map( array(
        'name'     => __('Image Grid', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_image_grid',
        'params'   => array(
            array(
                'type' => 'attach_images',
                'class' => 'vc_element-icon',
                'heading' => __('Attach Image', 'fromsix'),
                'param_name' => 'images'
            )
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_image_grid extends WPBakeryShortCode { }
}