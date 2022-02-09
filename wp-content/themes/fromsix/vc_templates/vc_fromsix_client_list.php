<?php
$char = 'vc_fromsix_client_list_item';
$items_count = substr_count($content,$char);
var_dump($content);


$html = "";

$html .= '<div class="glide hero">';
$html .= '<div class="glide__track" data-glide-el="track">';
$html .= '<ul class="glide__slides">'.do_shortcode($content).'</ul>';
$html .= '</div>';
$html .= '</div>';

echo $html;