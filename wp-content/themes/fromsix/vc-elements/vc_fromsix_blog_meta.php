<?php
vc_map( array(
        'name'     => __('Blog Meta', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_blog_meta',
        'params'   => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Author Name', 'fromsix'),
                'param_name' => 'author_name',
            ),
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Author Designation', 'fromsix'),
                'param_name' => 'author_designation',
            ),
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Post Date', 'fromsix'),
                'param_name' => 'post_date',
            ),

        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_blog_meta extends WPBakeryShortCode { }
}