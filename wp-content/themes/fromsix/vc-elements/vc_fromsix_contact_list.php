<?php

vc_map( array(
        'name'     => __('Contact List', 'fromsix'),
        'base'     => 'vc_fromsix_contact_list',
        'category' => __('From6 Elements', 'fromsix'),
        'as_parent'=> array('only' => 'vc_fromsix_contact_list_item'),
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'params'   => array(
           
        ),
        'js_view' => 'VcColumnView'
    )
);
  
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_vc_fromsix_contact_list extends WPBakeryShortCodesContainer { }
}