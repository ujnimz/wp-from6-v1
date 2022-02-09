<?php

vc_map( array(
        'name'     => __('Services Block', 'fromsix'),
        'base'     => 'vc_fromsix_block_services',
        'category' => __('From6 Elements', 'fromsix'),
        'as_parent'=> array('only' => 'vc_fromsix_block_service'),
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'params'   => array(
            array(
                'type' => 'textfield',
                'heading' => __('Number of Slides', 'fromsix'),
                'param_name' => 'number_of_slides'
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'img',
                'class' => 'vc_element-icon',
                'heading' => __( 'Icon', 'fromsix' ),
                'description' => __( 'Select background image from media library.', 'fromsix' ),
                'dependency' => array(
                    'element' => 'source',
                    'value' => 'media_library'
                ),
                'param_name' => 'background_image',
                'admin_label' => false,
                'weight' => 0,
            )
        ),
        'js_view' => 'VcColumnView'
    )
);
  
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_vc_fromsix_block_services extends WPBakeryShortCodesContainer { }
}