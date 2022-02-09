<?php
if ( isset($atts['image']) ):
$image = $atts['image'];
$img_attributes = wp_get_attachment_image_src($image,"full");
$img_url = $img_attributes[0];
$img_alt = get_post_meta($atts['image'], '_wp_attachment_image_alt', TRUE);
endif;

$html = new TemplateVCBuilder(null,"div");
$html->addClass("partner__wrapper");

if ( isset($atts['image']) ):
$html->addChildBlock("div")
      ->addClass("leadership__cover")
      ->addChildBlock('img')
      ->addClass("leadership__cover-image")
      ->addInlineTag('src',$img_url)
      ->addInlineTag('alt',"'$img_alt'")
      ->done()
  ->done();
endif;

if ( isset($atts['name']) ):
$html->addChildBlock("span")
      ->addClass("leadership__name")
      ->setContent($atts['name'])
  ->done();
endif;

if ( isset($atts['designation']) ):
  $html->addChildBlock("span")
        ->addClass("leadership__position")
        ->setContent($atts['designation'])
    ->done();
  endif;

$html->printHtml();