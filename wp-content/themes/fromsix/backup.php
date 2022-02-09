<?php
if( !empty($atts['count']) ) { $count = $atts['count']; }
if(!$count) $count = 4;
global $post;
$args = array(
'numberposts' => $count,
'post_type'   => 'testimonial',
'language'    => pll_current_language(),
'orderby'     => 'rand',
'language'    => pll_current_language()
);

$testimonials = get_posts( $args );
if ( ! empty( $testimonials ) ) : ?>
<section class="testimonials testimonials--main">
    <div class="testimonials__wrapper">
    <div class="glide testimonials__slider">
        <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <?php foreach ( $testimonials as $post ) :
            setup_postdata( $post );
            $testimonial_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <li class="glide__slide">
                <blockquote class="testimonial">
                <div class="testimonial__text"><?php echo get_the_title($post->ID); ?></div>
                <img src="<?php print $testimonial_image[0]; ?>">
                <cite class="testimonial__author"><?php echo get_post_field('post_content', $post->ID); ?></cite>
                
                </blockquote>
            </li>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </ul>
        </div>
        <div class="glide__arrows glide__arrows--testimonials" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" type="button" data-glide-dir="<">Previous</button>
        <button class="glide__arrow glide__arrow--right" type="button" data-glide-dir=">">Next</button>
        </div>
    </div>
    </div>
</section>
<?php endif;