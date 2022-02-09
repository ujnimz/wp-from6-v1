<!-- FOOTER START -->
<?php
$footer_top = get_field('top_footer', 'option');
$footer_bottom = get_field('bottom_footer', 'option');
$footer_top_bg_color = $footer_top['footer_top_bg_color'];
$footer_bottom_text = $footer_bottom['footer_bottom_text'];
$footer_bottom_text_font = $footer_bottom['footer_bottom_text_font'];
$footer_bottom_bg_color = $footer_bottom['footer_bottom_bg_color'];
$footer_bottom_text_color = $footer_bottom['footer_bottom_text_color'];
?>
<footer class="footer">
  <div class="footer_wrapper <?php print $footer_top_bg_color ?>">
    <div class="footer_top box_wrapper">
      
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="widget-1-4">
        <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="widget-1-4">
        <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
      <?php endif; ?>
 
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <div class="widget-2-4">
        <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
        <div class="widget-1-4">
        <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
      <?php endif; ?>
      
    </div> 
  </div>

  <div class="footer_wrapper <?php print $footer_bottom_bg_color ?>">
    <div class="footer_bottom box_wrapper">
        <p class="<?php print $footer_bottom_text_color .' '. $footer_bottom_text_font ?>"><?php print date("Y").' '.$footer_bottom_text ?></p>
    </div>
  </div>
  
</footer>
<!-- FOOTER END -->

<?php wp_footer(); ?>
</body>
</html>
