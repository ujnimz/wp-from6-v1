<?php
$html = "";
$image_url = wp_get_attachment_image_src($atts['image'],"full")[0];

$html .= '<li class="slide glide__slide" style="background-image: url('.$image_url .')">';
$html .= '<div class="slide__wrapper">';
$html .= '<div class="slide__content">';
$html .= '<h2 class="slide__title" style="color:'.$atts['span_text_color'].'">'.$atts["title"].'</h2>';
$html .= '</div>';
$html .= '</div>';
$html .= '</li>';

echo $html;