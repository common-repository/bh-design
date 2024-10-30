<?php
/*
 * Social Icon Widget
 */



function bh_social_styles() {

	$script_url = WP_PLUGIN_URL . '/bh-design/';

	wp_register_style( 'bh_main_styles', $script_url . '/widgets/social-icons/style.css' );
	wp_enqueue_style('bh_main_styles');
}


add_action('wp_head', 'bh_social_styles');
add_action('admin_head', 'bh_social_styles');



function bh_social_scripts() {
  $script_url = WP_PLUGIN_URL . '/bh-design/widgets/social-icons/inc/';
  wp_enqueue_script( 'bhdesign_icon_dahsboard_scripts', $script_url . 'script.js', array('jquery'), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'bh_social_scripts' );







class BhSocialIcons extends WP_Widget {

	function __construct() {
		parent::__construct(
			'bh_social_media_widget', // Base ID
			__( 'Design - Social Media Icons', 'text_domain' ), // Name
			array( 'description' => __( 'Display social media profiles.', 'text_domain' ), ) // Args
		);
	}

	function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}

		$social_align = $instance['social_align'];
		$new_window = $instance['new_window'];
		$font_size = $instance['font_size'];
		$border_radius = $instance['border_radius'];
		$font_color = $instance['font_color'];
		$social_icon_name = $instance['social_icon_name'];
		$social_icon_font_color = $instance['social_icon_font_color'];
		$social_icon_color = $instance['social_icon_color'];
		$social_icon_url = $instance['social_icon_url'];

		require( 'inc/convert.php' );
		require( 'inc/output.php' );

		echo $args['after_widget'];

	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
		$instance = array();
		$instance['convert'] =  strip_tags( $new_instance['convert']);
		$instance['title'] =  strip_tags( $new_instance['title']);
		$instance['social_align'] = strip_tags($new_instance['social_align']);
		$instance['new_window'] = strip_tags($new_instance['new_window']);
		$instance['font_size'] = strip_tags($new_instance['font_size']);
		$instance['border_radius'] = strip_tags($new_instance['border_radius']);
		$instance['font_color'] = strip_tags($new_instance['font_color']);

		$instance['social_icon_name'] = array();
		$instance['social_icon_font_color'] = array();
		$instance['social_icon_color'] = array();
		$instance['social_icon_url'] = array();

		foreach($_POST['social_media_names_list'] as $url) {
			array_push($instance['social_icon_name'], $url);
		}

		foreach($_POST['social_icon_font_color_list'] as $url) {
			array_push($instance['social_icon_font_color'], $url);
		}

		foreach($_POST['social_media_color_list'] as $url) {
			array_push($instance['social_icon_color'], $url);
		}

		foreach($_POST['social_icon_url_list'] as $url) {
			array_push($instance['social_icon_url'], $url);
		}


	

		

		return $instance;
	}

	function form( $instance ) {
		
		$convert = esc_attr($instance['convert']);

		$title = esc_attr($instance['title']);
		$social_align = esc_attr($instance['social_align']);
		$new_window = esc_attr($instance['new_window']);
		$font_size = esc_attr($instance['font_size']);
		$border_radius = esc_attr($instance['border_radius']);
		$font_color = esc_attr($instance['font_color']);
		$social_icon_name = $instance['social_icon_name'];
		$social_icon_font_color = $instance['social_icon_font_color'];
		$social_icon_color = $instance['social_icon_color'];
		$social_icon_url = $instance['social_icon_url'];

		require( 'inc/convert.php' );
		require( 'inc/options.php' );

		}
}

function bhsocial_register_widgets() {
	register_widget( 'BhSocialIcons' );
}

add_action( 'widgets_init', 'bhsocial_register_widgets' ); ?>