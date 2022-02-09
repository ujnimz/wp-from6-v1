<?php
$html = "";
$services_background_image = wp_get_attachment_image_src($atts['background_image'],"full")[0];

$html .= '<section>';
$html .= '<div class="services-front">';
$html .= '<div class="services-front__wrapper">';
$html .= '<ul class="services-front__list" style="background-image: url('.$services_background_image.');">'.do_shortcode($content).'</ul>';
$html .= '</div>';
$html .= '</div>';
$html .= '</section>';

echo $html;