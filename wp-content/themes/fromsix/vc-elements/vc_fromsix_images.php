<?php
vc_map( array(
        'name'     => __('Counter', 'fromsix'),
        'base'     => 'vc_fromsix_counter',
        'category' => __('From6 Elements', 'fromsix'),
        'as_parent'=> array('only' => 'vc_fromsix_counter_item'),
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'params'   => array(
           
        ),
        'js_view' => 'VcColumnView'
    )
);
  
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_vc_fromsix_counter extends WPBakeryShortCodesContainer { }
}