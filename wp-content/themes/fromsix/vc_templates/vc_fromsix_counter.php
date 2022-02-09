<?php
$html = "";
$html .= '<div class="counter_wrapper box_wrapper">';
$html .= '<ul>'.do_shortcode($content).'</ul>';
$html .= '</div>';

echo $html;