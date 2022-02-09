<?php

vc_map( array(
        'name'     => __('Works Slider', 'fromsix'),
        'base'     => 'vc_fromsix_works_slider',
        'category' => __('From6 Elements', 'fromsix'),
        'as_parent'=> array('only' => 'vc_fromsix_works_slide'),
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'params'   => array(
            array(
                'type' => 'textfield',
                'heading' => __('Number of Slides', 'fromsix'),
                'param_name' => 'number_of_slides'
            )
        ),
        'js_view' => 'VcColumnView'
    )
);
  
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_vc_fromsix_works_slider extends WPBakeryShortCodesContainer { }
}