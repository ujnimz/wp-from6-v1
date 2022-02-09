<!-- Realated Works Section Start -->
<div class="works_related_wrapper box_wrapper">
<?php
//Get array of terms
$terms = get_the_terms( $post->ID , 'work-category', 'string');
//Pluck out the IDs to get an array of IDS
$term_ids = wp_list_pluck($terms,'term_id');
$work_args = array( 
	'post_type' => 'work',
	'tax_query' => array(
		array(
				'taxonomy' => 'work-category',
				'field' => 'id',
				'terms' => $term_ids,
				'operator'=> 'IN' //Or 'AND' or 'NOT IN'
		 )),
	'posts_per_page' => 3,
	'orderby' => 'rand',
	'post__not_in'=>array($post->ID)
);
$work_query = new WP_Query( $work_args );
	if ( $work_query->have_posts() ) : ?>
		<!-- Work Grid Start -->
		<div class="works_related">
			<?php
			while ( $work_query->have_posts() ) : $work_query->the_post();	?>
			<div id="post-<?php the_ID(); ?>" class="works_related_item">
			<?php
				if( !empty( get_field('teaser_image') ) ): $image = get_field('teaser_image'); ?>
					<div class="works_related_item_image image_cut">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img class="resposive_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
						</a>
					</div>
				<?php endif; ?>

				<div class="work_title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<h6 class="bree bree700 text-orange"><?php the_title(); ?></h6>
					</a>
				</div>
				<div class="client_name">
					<span class="bree bree100 text-charcoal">Client: <?php echo get_field( "client", $post->ID ); ?></span>
				</div>
				<div class="work_category">
					<ul class="bree bree100 text-charcoal">
						<?php
						$terms = get_the_terms($post->ID, 'work-category'); $i = 1;
						foreach($terms as $term) : ?>
							<li><?php echo $term->name; if ($i++ == 3) break; ?></li>
						<?php endforeach; ?>	
					</ul>
				</div>
				<div class="hover_text_change">
					<a data-hover-text="<?php print $atts['button_hover_text'] ?>" class="works_related_item_button from6_button fsix-icon-right-arrow fill-orange fill-hover-white bree text-center text-semibold text-charcoal background-white background-hover-orange" href="<?php echo esc_url( the_permalink() ) ?>"><p><?php print $atts['button_text'] ?></p> <svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></a>
				</div>
					
			</div>
			<?php endwhile;	wp_reset_query(); ?>
		</div>
		<!-- Work Grid End -->
	<?php else:  ?>
		<div class="alert alert-warning" role="alert">
			<?php _e( 'Sorry, no posts found! Please add posts.' ); ?>
		</div>
	<?php	endif; ?>
</div>
<!-- Work Section End -->