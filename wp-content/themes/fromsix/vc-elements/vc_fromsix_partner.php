<?php

vc_map( array(
        'name'     => __('Partner', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_partner',
        'params'   => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Name', 'fromsix'),
                'param_name' => 'name'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'h5',
                'heading' => __('Designation', 'fromsix'),
                'param_name' => 'designation'
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'img',
                'class' => 'vc_element-icon',
                'heading' => __('Image', 'fromsix'),
                'param_name' => 'image'
            )
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_partner extends WPBakeryShortCode { }
}