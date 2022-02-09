<?php
vc_map( array(
        "name" => __("Blog Posts Grid", "fromsix"),
        'category' => __('From6 Elements', 'fromsix'),
        "base" => "vc_fromsix_posts_grid",
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Number of posts to display', 'fromsix' ),
                'param_name' => 'count',
                'admin_label' => true
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Sort By', 'fromsix'),
                'param_name'  => 'sort',
                'admin_label' => true,
                'value'       => array(
                    'Date' => 'date',
                    'Random' => 'random'
                    ),
                'std'         => 'Date',   
                'description' => __('Please select option to sort the posts.')
            ),
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_posts_grid extends WPBakeryShortCode { }
}