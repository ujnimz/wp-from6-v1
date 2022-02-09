<?php
/**
 * Template part for displaying single post
 *
 * @package fromsix
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
    <?php the_content(); ?>
	</div>
	<!-- .entry-content -->

</article><!-- #post-${ID} -->
