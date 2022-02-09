<?php
if( !empty($atts['count']) ) { $count = $atts['count']; }
if(!$count) $count = 4;
global $post;
if ( $atts['sort'] == 'date' ) :
  $orderby = 'post_date';
  $order = 'DSC';
  $post__not_in = '';
elseif ( $atts['sort'] == 'random' ) :
  $orderby = 'rand';
  $order = '';
  $post__not_in = array($post->ID);
endif;

$args = array(
  'numberposts' => $count,
  'post_type'   => 'post',
  'post_status' => 'publish',
  'orderby'     => $orderby,
  'order'       => $order,
  'post__not_in'=> $post__not_in
);
$posts = get_posts( $args );
//var_dump($posts);
if ( ! empty( $posts ) ) : ?>
  <div class="posts_grid_wrapper">
    <ul class="posts_grid">
      <?php foreach ( $posts as $post ) : setup_postdata( $post );
      $thumbnail = get_the_post_thumbnail_url($post->ID, 'large'); ?>
      <li class="posts_grid_item">
      <a data-hover-text="<?php print $atts['hover_text'] ?>" class="bree text-semibold text-charcoal text-hover-white background-light-gray background-hover-orange fsix-icon-right-arrow fill-orange fill-hover-white" href="<?php echo esc_url( the_permalink() ) ?>" title="<?php echo the_title(); ?>">
          <?php if ( ! empty( $thumbnail ) ) : ?>
            <img src="<?php echo $thumbnail ?>" alt="<?php echo the_title(); ?>">
          <?php endif; ?>
            <h4><?php echo the_title(); ?></h4>
            <span class="blog_date bree text-light"><?php echo get_the_date('d/m/Y'); ?></span>
            <span class="posts_grid_button fromsix_button"><p>Read More</p><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></span>

          </a>
      </li>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
  </div>
<?php endif;
