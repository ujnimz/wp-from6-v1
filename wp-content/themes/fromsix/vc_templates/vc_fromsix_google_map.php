<?php
if ( isset($atts['location_id']) ): 
$theme_settings = get_fields( 'option' ); ?>
<div class="google_map_wrap <?php print $atts['wrapper_class']; ?>">
  <div class="google_map">
    <iframe
      width="100%"
      height="100%"
      frameborder="0" 
      style="height: <?php print $atts['map_height']; ?>;"
      src="https://www.google.com/maps/embed/v1/place?key=<?php print $theme_settings['google_api_key']; ?>&q=place_id:<?php print $atts['location_id']; ?>&zoom=<?php print $atts['zoom_level']; ?>" allowfullscreen>
    </iframe>
  </div>
</div>

<?php endif;

