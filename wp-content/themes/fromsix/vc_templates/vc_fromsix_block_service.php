<?php
$html = "";
$openTo = "";
if ( $atts['open_to'] == 'down' ) : $openTo = 'services-front__link--first-line'; endif;

$html .= '<li class="services-front__item">';
$html .= '<div class="services-front__link '.$openTo.'">';
$html .= '<div class="services-front__description">'.$atts['description'].'<span>'.$atts['title'].'</span>';
$html .= '</div>';
$html .= '<span>'.$atts['title'].'</span>';
$html .= '</div>';
$html .= '</li>';

echo $html;