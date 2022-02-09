<?php

vc_map( array(
        'name'     => __('Button', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_button',
        'params'   => array(
            array(
                'type' => 'textfield',
                'heading' => __('Title', 'fromsix'),
                'param_name' => 'button_text',
                'admin_label' => true,
                'group'  =>  'Button'
            ),
            array(
                'type' => 'vc_link',
                'class' => 'button',
                'heading' => __( 'Link', 'fromsix' ),
                'param_name' => 'button_url',
                'admin_label' => false,
                'group'  =>  'Button'
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Family', 'fromsix'),
                'param_name'  => 'font_family',
                'admin_label' => true,
                'group' => 'Style',
                'value'       => array(
                    'Bree' => 'bree',
                    'Rustico' => 'rustico'
                    ),
                'std'         => 'Bree',   
                'description' => __('Please select font family.')
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Weight', 'fromsix'),
                'param_name'  => 'font_weight',
                'admin_label' => true,
                'group' => 'Style',
                'value'       => array(
                    'Bold' => 'text-bold',
                    'SemiBold' => 'text-semibold',
                    'Regular' => 'text-regular',
                    'Light' => 'text-light'
                    ),
                'std'         => 'Regular',   
                'description' => __('Please select font weight.')
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Text color', 'fromsix' ),
                'param_name' => 'text_color',
                'admin_label' => true,
                'group' => 'Style',
                'value'       => array(
                    'White' => 'text-white',
                    'Charcoal' => 'text-charcoal',
                    'Orange' => 'text-orange',
                    'Silver' => 'text-silver',
                    'Atlantic' => 'text-atlantic',
                    'Lime' => 'text-lime'
                    ),
                'std'         => 'Charcoal',   
                'description' => __('Please select text color.')
                ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Button Style', 'fromsix'),
                'param_name'  => 'button_style',
                'admin_label' => true,
                'group' => 'Style',
                'value'       => array(
                    'Style 1 (On White)' => 'style_1',
                    'Style 2 (On Orange)' => 'style_2',
                    'Style 3 (On White No Border)' => 'style_3',
                    'Style 4 (On Orange No Border)' => 'style_4',
                    ),
                'std'         => 'Style 1',   
                'description' => __('Please select button style.')
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Background color', 'fromsix' ),
                'param_name' => 'background_color',
                'admin_label' => false,
                'group' => 'Style',
                'value'       => array(
                    'Transparent' => 'background-transparent',
                    'White' => 'background-white',
                    'Orange' => 'background-orange',
                    'Charcoal' => 'background-charcoal',
                    'Silver' => 'background-silver',
                    'Atlantic' => 'background-atlantic',
                    'Lime' => 'background-lime'
                    ),
                'std'         => 'White',   
                'description' => __('Please select button background color.')
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Background hover color', 'fromsix' ),
                'param_name' => 'background_hover_color',
                'admin_label' => false,
                'group' => 'Style',
                'value'       => array(
                    'Transparent' => 'background-hover-transparent',
                    'White' => 'background-hover-white',
                    'Orange' => 'background-hover-orange',
                    'Charcoal' => 'background-hover-charcoal',
                    'Silver' => 'background-hover-silver',
                    'Atlantic' => 'background-hover-atlantic',
                    'Lime' => 'background-hover-lime'
                    ),
                'std'         => 'White',   
                'description' => __('Please select button background hover color.')
            ),
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_button extends WPBakeryShortCode { }
}