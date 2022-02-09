<?php

vc_map( array(
        'name'     => __('WYSIWYG Editor', 'fromsix'),
        'category' => __('From6 Elements', 'fromsix'),
        'base'     => 'vc_fromsix_text_editor',
        'params'   => array(
            array(
                'type' => 'textarea_html',
                'holder' => 'div',
                'heading' => __('Text', 'fromsix'),
                'param_name' => 'content', // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                'value' => __( "<p>I am test text block. Click edit button to change this text.</p>", "fromsix" ),
                'description' => __( "Enter your content.", "fromsix" )
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Content Width', 'fromsix' ),
                'param_name' => 'width',
                'description' => __( "in px, %, rem, em", "fromsix" ),
                'admin_label' => true
            )
        )
    )
);
  
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_text_editor extends WPBakeryShortCode { }
}