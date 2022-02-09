<?php
$number_classes = 'count_this '.$atts['number_font_family'].' '.$atts['number_font_weight'].' '.$atts['number_text_color'];
$text_classes = $atts['text_font_family'].' '.$atts['text_font_weight'].' '.$atts['text_text_color'];

$html = "";
$html .= '<li>';
$html .= '<span class="counter_number '.$number_classes.'">'.$atts['number'].'</span>';
$html .= '<span class="counter_text '.$text_classes.'">'.$atts['text'].'</span>';
$html .= '</li>';

echo $html;