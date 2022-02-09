<?php
/**
 * Custom widgets for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package fromsix
 */

/**
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function fromsix_widgets_init() {
	$footer = get_field('top_footer', 'option');
	$footer_title_font = $footer['footer_title_font'];
	$footer_title_color = $footer['footer_title_color'];
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'fromsix' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'fromsix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title '.$footer_title_font.' '.$footer_title_color.'">',
		'after_title'   => '</h2>',
  ) );
  
  register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'fromsix' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'fromsix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title '.$footer_title_font.' '.$footer_title_color.'">',
		'after_title'   => '</h2>',
  ) );
  
  register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'fromsix' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'fromsix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title '.$footer_title_font.' '.$footer_title_color.'">',
		'after_title'   => '</h2>',
  ) );
  
  register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'fromsix' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'fromsix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title '.$footer_title_font.' '.$footer_title_color.'">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fromsix_widgets_init' );



// Creating the widget - From6 Contacts
class footer_contacts extends WP_Widget {
  
	function __construct() {
		parent::__construct(
			
		// Base ID of the widget
		'footer_contacts', 
			
		// Widget name will appear in UI
		__('From6 Contacts', 'fromsix'),
			
		// Widget description will appear in UI
		array( 'description' => __( 'Footer contacts widget for From6 theme', 'fromsix' ), ) 
		);
	}
		
	// Creating widget front-end
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
			
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		$footer = get_field('top_footer', 'option');
		$footer_contact_font = $footer['footer_contact_font'];
		$footer_contact_icon_color = $footer['footer_contact_icon_color'];
		$footer_contact_icon_hover_color = $footer['footer_contact_icon_hover_color'];
		$footer_widget_email = get_field('widget_email', 'widget_' . $args['widget_id']);
		$footer_widget_telephone = get_field('widget_telephone', 'widget_' . $args['widget_id']);
		
		$widget_html = '<ul id="widget-contacts-list" class="widget-contacts-list '.$footer_contact_font.'"><li><a class="fsix-icon-email '.$footer_contact_icon_color.' '.$footer_contact_icon_hover_color.'" href="mailto:'.$footer_widget_email.'"><span><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-email"></use></svg></span>'.$footer_widget_email.'</a></li><li><a class="fsix-icon-telephone '.$footer_contact_icon_color.' '.$footer_contact_icon_hover_color.'" href="tel:"><span><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-mobile"></use></svg></span>'.$footer_widget_telephone.'</a></li>';
		
		echo __( $widget_html, 'fromsix' );
		echo $args['after_widget'];
	}
						
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'fromsix' );
		}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
				
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	 
	// Class footer_contacts ends here
} 


// Creating the widget - From6 Social
class footer_social extends WP_Widget {
  
	function __construct() {
		parent::__construct(
			
		// Base ID of the widget
		'footer_social', 
			
		// Widget name will appear in UI
		__('From6 Social', 'fromsix'),
			
		// Widget description will appear in UI
		array( 'description' => __( 'Footer social widget for From6 theme', 'fromsix' ), ) 
		);
	}
		
	// Creating widget front-end
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
			
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		$footer = get_field('social_links', 'option');
		$footer_instagram_link = $footer['instagram_link'];
		$footer_facebook_link = $footer['facebook_link'];
		$footer_linkedin_link = $footer['linkedin_link'];
		$footer_twitter_link = $footer['twitter_link'];

		$footer = get_field('top_footer', 'option');
		$footer_social_icon_color = $footer['footer_social_icons_color'];
		$footer_social_icons_hover_color = $footer['footer_social_icons_hover_color'];

		$widget_html = '<ul id="widget-social-list" class="widget-social-list"><li><a class="social-media fsix-icon-instagram '.$footer_social_icon_color.' '.$footer_social_icons_hover_color.'" target="_blank" href="'.$footer_instagram_link.'"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg></a></li><li><a class="social-media fsix-icon-facebook '.$footer_social_icon_color.' '.$footer_social_icons_hover_color.'" target="_blank" href="'.$footer_facebook_link.'"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-facebook"></use></svg></a></li><li><a class="social-media fsix-icon-linkedin '.$footer_social_icon_color.' '.$footer_social_icons_hover_color.'" target="_blank" href="'.$footer_linkedin_link.'"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-linkedin"></use></svg></a></li><li><a class="social-media fsix-icon-twitter '.$footer_social_icon_color.' '.$footer_social_icons_hover_color.'" target="_blank" href="'.$footer_twitter_link.'"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-twitter"></use></svg></a></li></ul>';

		
		echo __( $widget_html, 'fromsix' );
		echo $args['after_widget'];
	}
						
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'fromsix' );
		}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
				
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	 
	// Class footer_social ends here
} 


// Creating the widget - From6 Subscribe
class footer_subscribe extends WP_Widget {
  
	function __construct() {
		parent::__construct(
			
		// Base ID of the widget
		'footer_subscribe', 
			
		// Widget name will appear in UI
		__('From6 Subscribe', 'fromsix'),
			
		// Widget description will appear in UI
		array( 'description' => __( 'Footer subscribe widget for From6 theme', 'fromsix' ), ) 
		);
	}
		
	// Creating widget front-end 
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
			
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		$footer = get_fields( 'option' );
		$footer_instagram_link = $footer['instagram_link'];
		$footer_facebook_link = $footer['facebook_link'];
		$footer_linkedin_link = $footer['linkedin_link'];
		$footer_twitter_link = $footer['twitter_link'];

		$widget_html = 'Webform here';
		
		echo __( $widget_html, 'fromsix' );
		echo $args['after_widget'];
	}
						
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'fromsix' );
		}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
				
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	 
	// Class footer_social ends here
} 


// Register and load the widget
function fromsix_load_widget() {
	register_widget( 'footer_contacts' );
	register_widget( 'footer_social' );
	register_widget( 'footer_subscribe' );
}
add_action( 'widgets_init', 'fromsix_load_widget' );