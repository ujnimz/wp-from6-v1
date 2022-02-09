<?php

vc_map( array(
        'name' => __('Team Member', 'fromsix'),
        'base' => 'vc_fromsix_team_list_item',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_team_list'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Name', 'fromsix'),
                'param_name' => 'name'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Designation', 'fromsix'),
                'param_name' => 'designation',
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'img',
                'class' => 'vc_element-icon',
                'heading' => __('Image', 'fromsix'),
                'param_name' => 'image'
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_team_list_item extends WPBakeryShortCode { }
}