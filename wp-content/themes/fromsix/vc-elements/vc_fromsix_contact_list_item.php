<?php

vc_map( array(
        'name' => __('Contact Item', 'fromsix'),
        'base' => 'vc_fromsix_contact_list_item',
        'content_element' => true,
        'as_child' => array('only' => 'vc_fromsix_contact_list'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'h4',
                'heading' => __('Text', 'fromsix'),
                'param_name' => 'title',
                'group' => 'Title'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'p',
                'heading' => __('Number', 'fromsix'),
                'param_name' => 'tel_1',
                'group' => 'Telephone 1'
            ),
            array(
                'type' => 'attach_image',
                'class' => 'vc_element-icon',
                'heading' => __('Icon', 'fromsix'),
                'param_name' => 'tel_1_icon',
                'group' => 'Telephone 1'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'p',
                'heading' => __('Number', 'fromsix'),
                'param_name' => 'tel_2',
                'group' => 'Telephone 2'
            ),
            array(
                'type' => 'attach_image',
                'class' => 'vc_element-icon',
                'heading' => __('Icon', 'fromsix'),
                'param_name' => 'tel_2_icon',
                'group' => 'Telephone 2'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'p',
                'heading' => __('Number', 'fromsix'),
                'param_name' => 'fax',
                'group' => 'Fax'
            ),
            array(
                'type' => 'attach_image',
                'class' => 'vc_element-icon',
                'heading' => __('Icon', 'fromsix'),
                'param_name' => 'fax_icon',
                'group' => 'Fax'
            ),
            array(
                'type' => 'textfield',
                'holder' => 'p',
                'heading' => __('Email', 'fromsix'),
                'param_name' => 'email',
                'group' => 'Email'
            ),
            array(
                'type' => 'attach_image',
                'class' => 'vc_element-icon',
                'heading' => __('Icon', 'fromsix'),
                'param_name' => 'email_icon',
                'group' => 'Email'
            )
        )
    )
);

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_vc_fromsix_contact_list_item extends WPBakeryShortCode { }
}