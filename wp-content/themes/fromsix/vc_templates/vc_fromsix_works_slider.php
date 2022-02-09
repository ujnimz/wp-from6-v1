<?php
$html = "";
$bullets = $atts['number_of_slides'];
$count = 0;

$html .= '<section >';
$html .= '<div class="glide hero__slider">';
$html .= '<div class="glide__track" data-glide-el="track">';
$html .= '<ul class="glide__slides">'.do_shortcode($content).'</ul>';
$html .= '</div>';
$html .= '<div class="glide__bullets glide__bullets--hero" data-glide-el="controls[nav]">';
while ( $count <  $bullets ) :
  $html .= '<button class="hero__bullet glide__bullet" data-glide-dir="='.$count.'">'.$count.'</button>';
  $count++;
endwhile;
$html .= '</div>';
$html .= '</div>';
$html .= '</section>';

echo $html;