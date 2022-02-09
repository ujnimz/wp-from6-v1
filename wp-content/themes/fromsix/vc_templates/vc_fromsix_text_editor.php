<?php
$html = new TemplateVCBuilder(null,"div");
$html->addClass("text_section_wrapper");
$html->addClass("box_wrapper")
->addInlineTag("style","max-width:".$atts['width'].";");

$html->addChildBlock("div")
      ->addClass("text_section_content")
      ->addClass("bree")
      ->addClass("text-light")
      ->setContent($content)
      ->done();

$html->printHtml();