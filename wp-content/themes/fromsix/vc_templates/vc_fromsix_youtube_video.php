<?php
if ( isset($atts['link']) ): ?>
<div class="youtube_video_wrapper <?php print $atts['wrapper_class'] ?>">
  <div class="youtube_video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php print $atts['link'] ?>" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<?php endif; ?>


