<?php
vc_map( array(
        "name" => __("Services Grid", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_services_grid",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Number of Items', 'fromsix' ),
                'param_name' => 'count',
                'admin_label' => true
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Hover Text', 'fromsix' ),
                'param_name' => 'hover_text',
                'admin_label' => true
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_services_grid extends WPBakeryShortCode { }
}