<?php
vc_map( array(
        "name" => __("Team", "fromsix"),
        'category' => __("From6 Elements", "fromsix"),
        "base" => "vc_fromsix_team_grid",
        "params" => array(
          array(
            'type'        => 'dropdown',
            'heading'     => __('Font Family', 'fromsix'),
            'param_name'  => 'name_font_family',
            'admin_label' => true,
            'group' => 'Name Style',
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
              'param_name'  => 'name_heading_align',
              'admin_label' => true,
              'group' => 'Name Style',
              'value'       => array(
                  'Left' => 'text-left',
                  'Center' => 'text-center',
                  'Right' => 'text-right'
                  ),
              'std'         => 'Left',   
              'description' => __('Please select text alignment.')
          ),
          array(
              'type'        => 'dropdown',
              'heading'     => __('Font Weight', 'fromsix'),
              'param_name'  => 'name_font_weight',
              'admin_label' => true,
              'group' => 'Name Style',
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
              'param_name' => 'name_text_color',
              'admin_label' => true,
              'group' => 'Name Style',
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
            'heading'     => __('Font Family', 'fromsix'),
            'param_name'  => 'title_font_family',
            'admin_label' => true,
            'group' => 'Title Style',
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
              'param_name'  => 'title_heading_align',
              'admin_label' => true,
              'group' => 'Title Style',
              'value'       => array(
                  'Left' => 'text-left',
                  'Center' => 'text-center',
                  'Right' => 'text-right'
                  ),
              'std'         => 'Left',   
              'description' => __('Please select text alignment.')
          ),
          array(
              'type'        => 'dropdown',
              'heading'     => __('Font Weight', 'fromsix'),
              'param_name'  => 'title_font_weight',
              'admin_label' => true,
              'group' => 'Title Style',
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
              'param_name' => 'title_text_color',
              'admin_label' => true,
              'group' => 'Title Style',
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
          )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_team_grid extends WPBakeryShortCode { }
}