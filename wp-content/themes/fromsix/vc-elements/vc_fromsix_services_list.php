<?php
vc_map( array(
        "name" => __("Services List", "fromsix"),
        "category" => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_services_list",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Button Text', 'fromsix' ),
                'param_name' => 'button_text',
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
    class WPBakeryShortCode_vc_fromsix_services_list extends WPBakeryShortCode { }
}