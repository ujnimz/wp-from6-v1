<?php
vc_map( array(
        'name'     => __('Images Grid', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_images_grid',
        'params'   => array(
            array(
                'type' => 'attach_images',
                'class' => 'vc_element-icon',
                'heading' => esc_html__('Attach Image', 'fromsix'),
                'description' => esc_html__( 'Add an image or images.', 'text-domain' ),
                'param_name' => 'images',
                'admin_label' => true
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Wrapper', 'fromsix'),
                'param_name'  => 'wrapper_class',
                'admin_label' => true,
                'value'       => array(
                    'Fullwidth Wrapper' => 'fullwidth_wrapper',
                    'Box Wrapper' => 'box_wrapper'
                    ),
                'std'         => 'Fullwidth Wrapper',   
                'description' => __('Please select wrapper width.')
            ),
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_images_grid extends WPBakeryShortCode { }
}