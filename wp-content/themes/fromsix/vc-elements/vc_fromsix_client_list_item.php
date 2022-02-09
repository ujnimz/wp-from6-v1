<?php

vc_map( array(
        'name' => __('Client Logo', 'fromsix'),
        'base' => 'vc_fromsix_client_list_item',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_client_list'),
        'params' => array(
            array(
                'type' => 'attach_images',
                'class' => 'vc_element-icon',
                'heading' => __('Logo', 'fromsix'),
                'param_name' => 'logos'
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_client_list_item extends WPBakeryShortCode { }
}