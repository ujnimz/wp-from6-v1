<?php
vc_map( array(
        "name" => __("Testimonials", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_testimonials",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Number of Testimonials', 'fromsix' ),
                'param_name' => 'count',
                'admin_label' => true
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_testimonials extends WPBakeryShortCode { }
}