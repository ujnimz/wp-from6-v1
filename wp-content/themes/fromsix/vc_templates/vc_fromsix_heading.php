<?php
$html = new TemplateVCBuilder(null,"div");
$html->addClass("text_heading_wrapper");

if ( isset($atts['title']) ):
  $font_weight = $atts['style_font_weight'];
  $text_color = $atts['style_text_color'];
  $start = '<span class="'.$font_weight.' '.$text_color.'">';
  $title = str_replace('[', $start, $atts['title']);
  $title = str_replace(']', '</span>', $title);
  if ( $atts['wrapper_max_width'] ) : 
    $max_width = $atts['wrapper_max_width'];
  else :
    $max_width = '1366px';
  endif;

  $html->addChildBlock("div")
        ->addClass("text_heading_inner_wrapper")
        ->addInlineTag("style","max-width:".$max_width.";")
        ->addChildBlock($atts['heading_tag'])
        ->addClass("text_heading_headline")
        ->addClass($atts['font_family'])
        ->addClass($atts['heading_align'])
        ->addClass($atts['default_font_weight'])
        ->addClass($atts['default_text_color'])
        ->setContent($title)
        ->done()
        ->done();
endif;

$html->printHtml();