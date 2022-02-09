<?php
$html = "";

$html .= '<div class="team__wrapper">';
$html .= '<ul class="team__list">'.do_shortcode($content).'</ul>';
$html .= '</div>';

echo $html;