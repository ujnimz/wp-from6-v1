<?php
vc_map( array(
        'name'     => __('Heading', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_heading',
        'params'   => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Title Text', 'fromsix'),
                'param_name' => 'title',
                'description' => __('Use square brackets for * styles. Eg: Default text here [Style text here]'),
                'group' => 'Title'
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Heading Tag', 'fromsix'),
                'param_name'  => 'heading_tag',
                'admin_label' => true,
                'group' => 'Title',
                'value'       => array(
                    'H1' => 'h1',
                    'H2' => 'h2',
                    'H3' => 'h3',
                    'H4' => 'h4',
                    'H5' => 'h5',
                    'H6' => 'h6'
                    ),
                'std'         => 'H1',   
                'description' => __('Please select the HTML heading tag.')
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Family', 'fromsix'),
                'param_name'  => 'font_family',
                'admin_label' => true,
                'group' => 'Title',
                'value'       => array(
                    'Bree' => 'bree',
                    'Rustico' => 'rustico'
                    ),
                'std'         => 'Bree',   
                'description' => __('Please select font family.')
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Alignment', 'fromsix'),
                'param_name'  => 'heading_align',
                'admin_label' => true,
                'group' => 'Title',
                'value'       => array(
                    'Left' => 'text-left',
                    'Center' => 'text-center',
                    'Right' => 'text-right'
                    ),
                'std'         => 'Left',   
                'description' => __('Please select text alignment.')
            ),
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Wrapper Max Width', 'fromsix'),
                'param_name' => 'wrapper_max_width',
                'group' => 'Title'
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Weight', 'fromsix'),
                'param_name'  => 'default_font_weight',
                'admin_label' => false,
                'group' => 'Default Style',
                'value'       => array(
                    'Bold' => 'text-bold',
                    'SemiBold' => 'text-semibold',
                    'Regular' => 'text-regular',
                    'Light' => 'text-light'
                    ),
                'std'         => 'Regular',   
                'description' => __('Please select default text weight.')
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Text color', 'fromsix' ),
                'param_name' => 'default_text_color',
                'admin_label' => false,
                'group' => 'Default Style',
                'value'       => array(
                    'White' => 'text-white',
                    'Charcoal' => 'text-charcoal',
                    'Orange' => 'text-orange',
                    'Silver' => 'text-silver',
                    'Atlantic' => 'text-atlantic',
                    'Lime' => 'text-lime'
                    ),
                'std'         => 'Charcoal',   
                'description' => __('Please select default text color.')
                ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Weight', 'fromsix'),
                'param_name'  => 'style_font_weight',
                'admin_label' => false,
                'group' => '* Style',
                'value'       => array(
                    'Bold' => 'text-bold',
                    'SemiBold' => 'text-semibold',
                    'Regular' => 'text-regular',
                    'Light' => 'text-light'
                    ),
                'std'         => 'Regular',   
                'description' => __('Please select text weight for *.')
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Text color', 'fromsix' ),
                'param_name' => 'style_text_color',
                'admin_label' => false,
                'group' => '* Style',
                'value'       => array(
                    'White' => 'text-white',
                    'Charcoal' => 'text-charcoal',
                    'Orange' => 'text-orange',
                    'Silver' => 'text-silver',
                    'Atlantic' => 'text-atlantic',
                    'Lime' => 'text-lime'
                    ),
                'std'         => 'Charcoal',   
                'description' => __('Please select text color for *.')
            )
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_heading extends WPBakeryShortCode { }
}