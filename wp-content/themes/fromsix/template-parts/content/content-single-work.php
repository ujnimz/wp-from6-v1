<?php
/**
 * Template part for displaying posts works
 *
 * @package fromsix
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single_work_info_bar_wrapper background-light-gray">
        <div class="single_work_info_bar box_wrapper">
            <div class="single_work_info_bar_left">
                <h2 class="bree text-light text-charcoal">Client:&nbsp;&nbsp; <?php echo get_field( "client" ); ?></h2>
            </div>
            <div class="single_work_info_bar_right">
                <h2 class="bree text-light text-charcoal">Elements: </h2>
                <ul class="bree text-light text-charcoal">
                    <?php
                    $terms = get_the_terms($post->ID, 'work-category'); $i = 1;
                    foreach($terms as $term) : ?>
                        <li><?php echo $term->name; if ($i++ == $number_of_categories) break; ?></li> 
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-${ID} -->
