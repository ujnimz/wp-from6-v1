<?php
vc_map( array(
        "name" => __("Clientele", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_clientele",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Number of Logos', 'fromsix' ),
                'param_name' => 'count',
                'admin_label' => true
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_clientele extends WPBakeryShortCode { }
}