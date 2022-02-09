<?php
$html = "";

$image_url = wp_get_attachment_image_src($atts['featured_image'],"full")[0];
$link = vc_build_link($atts['featured_url']);
$link_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';

$html .= '<section>';
$html .= '<div class="promo__banner" style="background-image: url('.$image_url.')">';
$html .= '<div class="promo__wrapper">';
$html .= '<a href="'.$link['url'].'" '.$link_target.' class="promo__headline">';
$html .= '<strong>'.$atts['featured_title'].'</strong><br>'.$atts['featured_description'].'</a>';
$html .= '</div>';
$html .= '</div>';
$html .= '</section>';

echo $html;
