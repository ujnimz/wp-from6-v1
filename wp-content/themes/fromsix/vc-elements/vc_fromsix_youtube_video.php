<?php
vc_map( array(
        'name'     => __('YouTube Video', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_youtube_video',
        'params'   => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('YouTube Video ID', 'fromsix'),
                'param_name' => 'link',
                'description' => __('Copy and paste the video ID from YouTube link.'),
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
    class WPBakeryShortCode_vc_fromsix_youtube_video extends WPBakeryShortCode { }
}