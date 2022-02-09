<?php

vc_map( array(
        'name' => __('Service', 'fromsix'),
        'base' => 'vc_fromsix_block_service',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_block_services'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Title', 'fromsix'),
                'param_name' => 'title',
            ),
            array(
                'type' => 'textarea',
                'holder' => 'h4',
                'heading' => __('Description', 'fromsix'),
                'param_name' => 'description',
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Description Open To', 'fromsix'),
                'param_name'  => 'open_to',
                'admin_label' => true,
                'value'       => array(
                    'Down' => 'down',
                    'Up' => 'up'
                    ),
                'std'         => 'Down'
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_block_service extends WPBakeryShortCode { }
}