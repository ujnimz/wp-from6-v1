<?php
if ( isset($atts['tel_1_icon']) ):
$tel_1_icon = $atts['tel_1_icon'];
$tel_1_icon_attributes = wp_get_attachment_image_src($tel_1_icon,"full");
$tel_1_icon_url = $tel_1_icon_attributes[0];
$tel_1_icon_alt = get_post_meta($tel_1_icon, '_wp_attachment_image_alt', TRUE);
$tel_1_icon_html = '<img src="'.$tel_1_icon_url.'" alt="'.$tel_1_icon_alt.'" class="">';
endif;

if ( isset($atts['tel_2_icon']) ):
$tel_2_icon = $atts['tel_2_icon'];
$tel_2_icon_attributes = wp_get_attachment_image_src($tel_2_icon,"full");
$tel_2_icon_url = $tel_2_icon_attributes[0];
$tel_2_icon_alt = get_post_meta($tel_2_icon, '_wp_attachment_image_alt', TRUE);
$tel_2_icon_html = '<img src="'.$tel_2_icon_url.'" alt="'.$tel_2_icon_alt.'" class="">';
endif;

if ( isset($atts['fax_icon']) ):
$fax_icon = $atts['fax_icon'];
$fax_icon_attributes = wp_get_attachment_image_src($fax_icon,"full");
$fax_icon_url = $fax_icon_attributes[0];
$fax_icon_alt = get_post_meta($fax_icon, '_wp_attachment_image_alt', TRUE);
$fax_icon_html = '<img src="'.$fax_icon_url.'" alt="'.$fax_icon_alt.'" class="">';
endif;

if ( isset($atts['email_icon']) ):
$email_icon = $atts['email_icon'];
$email_icon_attributes = wp_get_attachment_image_src($email_icon,"full");
$email_icon_url = $email_icon_attributes[0];
$email_icon_alt = get_post_meta($email_icon, '_wp_attachment_image_alt', TRUE);
$email_icon_html = '<img src="'.$email_icon_url.'" alt="'.$email_icon_alt.'" class="">';
endif;

$html = "";

$html .= '<div class="contacts__layout">';
$html .= '<h2 class="contacts__headline">'.$atts['title'].'</h2>';
$html .= '<div class="contacts__list">';
if(isset($atts['tel_1'])):
$html .= '<a class="contacts__item" href="tel:'.$atts['tel_1'].'">'.$tel_1_icon_html.$atts['tel_1'].'</a>';
endif;
if(isset($atts['tel_2'])):
  $html .= '<a class="contacts__item" href="tel:'.$atts['tel_2'].'">'.$tel_2_icon_html.$atts['tel_2'].'</a>';
endif;
if(isset($atts['fax'])):
  $html .= '<a class="contacts__item" href="tel:'.$atts['fax'].'">'.$fax_icon_html.$atts['fax'].'</a>';
endif;
if(isset($atts['email'])):
  $html .= '<a class="contacts__item" href="mailto:'.$atts['email'].'">'.$email_icon_html.$atts['email'].'</a>';
endif;
$html .= '</div>';
$html .= '</div>';

echo $html;
