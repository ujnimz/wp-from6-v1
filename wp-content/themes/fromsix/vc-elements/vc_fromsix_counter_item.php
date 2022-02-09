<?php
vc_map( array(
        'name'     => __('Counter', 'fromsix'),
        'base'     => 'vc_fromsix_counter_item',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_counter'),
        'params'   => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Number', 'fromsix'),
                'param_name' => 'number',
                'group' => 'Number'

            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Family', 'fromsix'),
                'param_name'  => 'number_font_family',
                'admin_label' => true,
                'group' => 'Number',
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
                'param_name'  => 'number_font_weight',
                'admin_label' => false,
                'group' => 'Number',
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
                'heading' => __('Text Color', 'fromsix' ),
                'param_name' => 'number_text_color',
                'admin_label' => false,
                'group' => 'Number',
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
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Text Bottom', 'fromsix'),
                'param_name' => 'text',
                'group' => 'Text'
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => __('Font Family', 'fromsix'),
                'param_name'  => 'text_font_family',
                'admin_label' => true,
                'group' => 'Text',
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
                'param_name'  => 'text_font_weight',
                'admin_label' => false,
                'group' => 'Text',
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
                'heading' => __('Text Color', 'fromsix' ),
                'param_name' => 'text_text_color',
                'admin_label' => false,
                'group' => 'Text',
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
        
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_counter_item extends WPBakeryShortCode { }
}