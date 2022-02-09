<?php
vc_map( array(
        "name" => __("Google Map", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_google_map",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Location ID', 'fromsix' ),
                'param_name' => 'location_id',
                'description' => __('Copy location ID from Google maps embed.'),
                'admin_label' => true
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Map Height', 'fromsix' ),
                'param_name' => 'map_height',
                'description' => __('Map height in px'),
                'admin_label' => true
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Zoom Level', 'fromsix' ),
                'param_name' => 'zoom_level',
                'description' => __('Accepted values range from 0 to 21'),
                'admin_label' => true
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Wrapper', 'fromsix'),
                'param_name'  => 'wrapper_class',
                'admin_label' => true,
                'value'       => array(
                    'Fullwidth Wrapper' => 'fullwidth_wrapper',
                    'Box Wrapper' => 'box_wrapper'
                    ),
                'std'         => 'Fullwidth Wrapper',   
                'description' => __('Please select wrapper width.')
            ),
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_google_map extends WPBakeryShortCode { }
}