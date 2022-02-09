<?php
if ( isset($atts) ):
  
  $gallery = shortcode_atts(
    array(
        'logos' =>  'logos',
    ), $atts );

 $image_ids = explode(',',$gallery['logos']);
 //print_r($image_ids);

 $html = "";
 $html .= '<li class="glide__slide">';
 $html .= '<div>';

 foreach( $image_ids as $image_id ){
   //$image = $atts['logo'];
  $img_attributes = wp_get_attachment_image_src($image_id,"full");
  $img_url = $img_attributes[0];
  $img_alt = get_post_meta($atts['logos'], '_wp_attachment_image_alt', TRUE);

  $html .= '<div class="logo">';
  $html .= '<img src="'.$img_url.'" alt="'.$img_alt.'" class="clients__image">';
  $html .= '</div>';



}
$html .= '</div>';
$html .= '</li>';
echo $html;

endif;

