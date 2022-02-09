<?php

vc_map( array(
        'name'     => __('Featured Work', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_featured_work',
        'params'   => array(
            array(
                'type' => 'textfield',
                'heading' => __('Title', 'fromsix'),
                'param_name' => 'featured_title',
                'admin_label' => true
            ),
            array(
                'type' => 'textarea',
                'heading' => __('Description', 'fromsix'),
                'param_name' => 'featured_description',
                'admin_label' => false
            ),
            array(
                'type' => 'vc_link',
                'class' => 'button',
                'heading' => __( 'Link', 'fromsix' ),
                'param_name' => 'featured_url',
                'admin_label' => false
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'img',
                'class' => 'vc_element-icon',
                'heading' => __( 'Featured Image', 'fromsix' ),
                'description' => __( 'Select Featured Image from media library.', 'fromsix' ),
                'dependency' => array(
                    'element' => 'source',
                    'value' => 'media_library'
                ),
                'param_name' => 'featured_image',
                'admin_label' => false,
                'weight' => 0
            ),
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_featured_work extends WPBakeryShortCode { }
}