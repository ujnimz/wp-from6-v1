<?php
$html = "";
$link = vc_build_link($atts['button_url']);
$link_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';

if($atts['background_color'] === 'background-transparent' || $atts['background_color'] === 'background-orange') { $icon_color = 'fill-white'; $icon_hover_color = 'fill-hover-orange'; }

if($atts['background_color'] === 'background-white') { $icon_color = 'fill-orange'; $icon_hover_color = 'fill-hover-white'; }

if($atts['background_color'] === 'background-charcoal' || $atts['background_color'] === 'background-silver' || $atts['background_color'] === 'background-atlantic' || $atts['background_color'] === 'background-lime') { $icon_color = 'fill-white'; $icon_hover_color = 'fill-hover-white'; }

if($atts['background_hover_color'] === 'background-hover-white') { $icon_hover_color = 'fill-hover-orange'; }

if($atts['background_color'] === 'background-transparent' && $atts['background_hover_color'] === 'background-hover-transparent') { $icon_color = 'fill-orange'; $icon_hover_color = 'fill-hover-orange'; }


$html .= '<div class="main_button_wrapper">';
$html .= '<a href="'.$link['url'].'" '.$link_target.' class="main_button_'.$atts['button_style'].' '.$atts['font_family'].' '.$atts['text_color'].' '.$atts['font_weight'].' '.$atts['background_color'].' '.$atts['background_hover_color'].' from6_button fsix-icon-right-arrow '.$icon_color.' '.$icon_hover_color.' text-center" title="'.$atts['button_text'].'">'.$atts['button_text'].'<svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></a>';
$html .= '</div>';

echo $html;