<?php

vc_map( array(
        'name'     => __('Related Works', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_ralated_works_block',
        'params'   => array(
            array(
                'type' => 'textfield',
                'heading' => __('Title', 'fromsix'),
                'param_name' => 'ralated_title',
                'admin_label' => true
            )
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_ralated_works_block extends WPBakeryShortCode { }
}