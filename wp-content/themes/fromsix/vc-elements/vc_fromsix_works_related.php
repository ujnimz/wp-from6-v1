<?php
vc_map( array(
        "name" => __("Related Works", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_works_related",
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
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Button Hover Text', 'fromsix' ),
                'param_name' => 'button_hover_text',
                'admin_label' => true
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_works_related extends WPBakeryShortCode { }
}