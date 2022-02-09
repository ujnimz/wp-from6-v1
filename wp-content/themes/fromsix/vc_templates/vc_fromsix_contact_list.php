<?php
$html = "";
$html .= '<div class="contacts__wrapper">';
$html .= do_shortcode($content);
$html .= '</div>';

echo $html;