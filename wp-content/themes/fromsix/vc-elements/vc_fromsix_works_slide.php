<?php

vc_map( array(
        'name' => __('Slide', 'fromsix'),
        'base' => 'vc_fromsix_works_slide',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_works_slider'),
        'params' => array(
            array(
                'type' => 'textarea',
                'holder' => 'h4',
                'heading' => __('Title', 'fromsix'),
                'param_name' => 'title',
                'group' => 'Title'
            ),
            array(
                'type' => 'textarea',
                'holder' => 'h4',
                'heading' => __('Button Text', 'fromsix'),
                'param_name' => 'button_text',
                'group' => 'Title'
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Span Text color', 'fromsix' ),
                'param_name' => 'span_text_color',
                'admin_label' => false,
                'group' => 'Title',
                'value'       => array(
                    'White' => 'text-white',
                    'Charcoal' => 'text-charcoal',
                    'Orange' => 'text-orange',
                    'Silver' => 'text-silver',
                    'Atlantic' => 'text-atlantic',
                    'Lime' => 'text-lime'
                    ),
                'std'         => 'Orange',   
                'description' => __('Please select span text color.')
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'img',
                'class' => 'vc_element-image',
                'heading' => __( 'Image', 'fromsix' ),
                'description' => __( 'Select image from media library.', 'fromsix' ),
                'dependency' => array(
                    'element' => 'source',
                    'value' => 'media_library'
                ),
                'param_name' => 'image',
                'admin_label' => false,
                'weight' => 0,
                'group' => 'Image'
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_works_slide extends WPBakeryShortCode { }
}