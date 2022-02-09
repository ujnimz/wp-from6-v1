<?php
vc_map( array(
        "name" => __("Works Grid", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_works_grid",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Number of works to display', 'fromsix' ),
                'param_name' => 'count',
                'admin_label' => true
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Button Text', 'fromsix' ),
                'param_name' => 'button_text',
                'admin_label' => true
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_works_grid extends WPBakeryShortCode { }
}