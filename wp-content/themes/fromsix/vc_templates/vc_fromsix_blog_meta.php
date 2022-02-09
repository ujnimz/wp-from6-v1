<?php
$html = new TemplateVCBuilder(null,"div");
$html->addClass("blog_meta_wrapper box_wrapper");

if ( isset($atts['author_name']) ):
$html->addChildBlock("div")
      ->addClass("blog_meta_content")
      ->addClass("bree text-charcoal text-light")
      ->addChildBlock("div")
      ->addClass("blog_meta_author")
      ->setContent('<strong>Author:</strong>')
      ->done()
      ->addChildBlock("div")
      ->addClass("blog_meta_author_name")
      ->setContent($atts['author_name'])
      ->done()
      ->addChildBlock("div")
      ->addClass("blog_meta_author_designation")
      ->setContent($atts['author_designation'])
      ->done()
      ->done();
endif;
if ( isset($atts['post_date']) ):
$html->addChildBlock("div")
      ->addClass("blog_meta_content")
      ->addClass("bree text-charcoal text-light")
      ->addChildBlock("div")
      ->addClass("blog_meta_date")
      ->setContent('<strong>Posted on:</strong>')
      ->done()
      ->addChildBlock("div")
      ->addClass("blog_meta_post_date")
      ->setContent($atts['post_date'])
      ->done()
      ->done();
endif;

$html->printHtml();