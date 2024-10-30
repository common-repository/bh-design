<?php

if($converted != true) {

	$converted = true;

	$update_array_url = array();
	$update_array_color = array();
	$update_array_font_color = array();
	$update_array_name = array();

	if($update_array_url) {	array_push( $update_array_url, $social_icon_url ); }
	if($update_array_color) { array_push( $update_array_color, $social_icon_color ); }
	if($update_array_font_color) { array_push( $update_array_font_color, $social_icon_font_color ); }
	if($update_array_name) { array_push( $update_array_name, $social_icon_font_color ); }

	if($instance['facebook_url']) {
		array_push( $update_array_url, $instance['facebook_url'] );
		array_push( $update_array_color, $instance['facebook_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "facebook");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['twitter_url']) {
		array_push( $update_array_url, $instance['twitter_url'] );
		array_push( $update_array_color, $instance['twitter_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "twitter");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['pinterest_url']) {
		array_push( $update_array_url, $instance['pinterest_url'] );
		array_push( $update_array_color, $instance['pinterest_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "pinterest");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['instagram_url']) {
		array_push( $update_array_url, $instance['instagram_url'] );
		array_push( $update_array_color, $instance['instagram_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "instagram");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['gplus_url']) {
		array_push( $update_array_url, $instance['gplus_url'] );
		array_push( $update_array_color, $instance['gplus_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "google");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['youtube_url']) {
		array_push( $update_array_url, $instance['youtube_url'] );
		array_push( $update_array_color, $instance['youtube_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "youtube");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['rss_color']) {
		array_push( $update_array_url, $instance['rss_color'] );
		array_push( $update_array_color, $instance['rss_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "rss");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

	if($instance['linkedin_url']) {
		array_push( $update_array_url, $instance['linkedin_url'] );
		array_push( $update_array_color, $instance['linkedin_color']);
		array_push( $update_array_font_color, "white");
		array_push( $update_array_name, "linkedin");

		$social_icon_url = $update_array_url;
		$social_icon_color = $update_array_color;
		$social_icon_font_color = $update_array_font_color;
		$social_icon_name = $update_array_name;
	}

}

?>