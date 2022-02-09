<?php
if( !empty($atts['count']) ) { $count = $atts['count']; }
if(!$count) $count = 5;
global $post;
$args = array(
'numberposts' => $count,
'post_type'   => 'clientele',
'post_status' => 'publish',
'order'       => 'ASC',
'language'    => pll_current_language()
);

$clientele = get_posts( $args );
if ( ! empty( $clientele ) ) : ?>
  <div class="clientele_wrapper">
    <ul class="clientele">
      <?php foreach ( $clientele as $post ) :
      setup_postdata( $post ) ?>
      <li class="clientele_logo">
      <?php $image = get_field('client_logo_color');
        if( !empty( $image ) ): ?>     
          <img width="260" height="120" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
      </li>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </ul>
  </div>
<?php endif;
