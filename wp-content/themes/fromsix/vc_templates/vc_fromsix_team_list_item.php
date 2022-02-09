<?php
if ( isset($atts['image']) ):
$image = $atts['image'];
$img_attributes = wp_get_attachment_image_src($image,"full");
$img_url = $img_attributes[0];
$img_alt = get_post_meta($atts['image'], '_wp_attachment_image_alt', TRUE);
endif;

$html = "";

$html .= '<li class="team__item">';
$html .= '<img src="'.$img_url.'" alt="'.$img_alt.'" class="team__image">';
$html .= '<div class="team__information">';
$html .= '<span class="team__name">'.$atts['name'].'</span>';
$html .= '<span class="team__position">'.$atts['designation'].'</span>';
$html .= '</div>';
$html .= '</li>';

echo $html;