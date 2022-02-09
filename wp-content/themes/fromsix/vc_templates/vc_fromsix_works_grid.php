<?php
if( !empty($atts['count']) ) { $count = $atts['count']; }
if(!$count) $count = 4;
?>

<!-- Works Section Start -->
<section class="page">
		<div class="work-wrapper box_wrapper">
		<?php
			$terms = get_terms('work-category'); // Get all terms of a taxonomy
				if ( $terms && !is_wp_error( $terms ) ) :	?>
					<!-- Work layout filter Start -->
					<div class="work-filter filters filter-button-group bree100">
						<ul>
							<li class="active-work" data-filter="*">All</li>
							<?php foreach ( $terms as $term ) : ?>
								<li data-filter=".<?php echo $term->slug ?>"><?php echo $term->name; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- Work layout filter End -->
					<?php 
				endif; ?>

	<?php
		$number_of_categories = get_field('number_of_categories');
		$work_args = array( 'post_type' => 'work', 'posts_per_page' => $count );
		$work_query = new WP_Query( $work_args );
			if ( $work_query->have_posts() ) : ?>
				<!-- Work Grid Start -->
				<div id="work_grid">
					<div class="work_grid grid row">
            <div class="gutter-sizer"></div>
						<?php
						while ( $work_query->have_posts() ) : $work_query->the_post();	?>
							<div id="post-<?php the_ID(); ?>" class="work-item <?php foreach($terms as $term) : echo ' '.$term->slug; endforeach; ?> grid-item">
								<div class="works_list_inner">
								<?php
									if( !empty( get_field('teaser_image') ) ): $image = get_field('teaser_image'); ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<div class="works_list_image image_cut">
											<img class="resposive_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
										</div>
									</a>
									<?php endif; ?>
									<div class="works_list_caption">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<h6 class="bree bree700 text-orange"><?php the_title(); ?></h6>
										</a>
										<span class="bree bree100 text-charcoal">Client: <?php echo get_field( "client", $post->ID ); ?></span>
										<ul class="bree bree100 text-charcoal">
											<?php
											$terms = get_the_terms($post->ID, 'work-category'); $i = 1;
											foreach($terms as $term) : ?>
												<li><?php echo $term->name; if ($i++ == $number_of_categories) break; ?></li>
											<?php endforeach; ?>	
										</ul>
										<div class="hover_text_change">
											<a data-hover-text="Go!" class="works_list_button from6_button fsix-icon-right-arrow fill-orange fill-hover-white bree text-center text-semibold text-charcoal background-white background-hover-orange" href="<?php echo esc_url( the_permalink() ) ?>"><p><?php print $atts['button_text'] ?></p> <svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-right-arrow"></use></svg></a>
										</div>
										
									</div>
								</div>
							</div>
						<?php endwhile;	wp_reset_postdata(); ?>
					</div>
				</div>
				<!-- Work Grid End -->
			<?php else:  ?>
				<div class="alert alert-warning" role="alert">
					<?php _e( 'Sorry, no posts found! Please add posts.' ); ?>
				</div>
			<?php	endif; ?>
		</div>
	</section>
<!-- Work Section End -->