<?php


function bh_shortcode_styles() {
  $script_url = WP_PLUGIN_URL . '/bh-design/';
  wp_enqueue_style( 'bh-shortcodes', $script_url . '/widgets/shortcodes/shortcodes.css' );
}
add_action('wp_head', 'bh_shortcode_styles');


/* Feature Box Shortcode */
add_shortcode('feature-box', 'bh_feature_box');

function bh_feature_box ($atts) {
	$atts = shortcode_atts(
		array(
			'width' => 'four',
			'background' => 'blue',
			'icon' => 'icon-price-tags',
			'title' => 'Icon Title Here',
			'image' => '',
			'link' => "#"
		), $atts);

	return '
		<div class="bh-feature-box ' . $atts['width'] . '">
		    <a href="' . $atts['link'] . '">
		        <header style="background-color: ' . $atts['background'] . '">
		            <span class="' . $atts['icon'] . '"></span>
		            <h1>' . $atts['title'] . '</h1>
		        </header>
		        <section>
		            <img src="' . $atts['image'] . '">
		        </section>
		    </a>
		</div>
	';
}

/* Our Team Shortcode */
add_shortcode('our-team', 'our_team');

function our_team ($atts, $content = null) {
	$atts = shortcode_atts(
		array(
			'width' => 'three',
			'image' => '',
			'name' => 'Person Name',
			'title' => 'Person Title',
			'facebook' => '',
			'twitter' => '',
			'linkedin' => '',
			'pinterest' => '',
			'instagram' => '',
			'google' => ''
		), $atts);

	$output = '<div class="our-team-wrapper '  . $atts['width'] . '">';
	if($atts['image']){ $output .= '<img src="' . $atts['image'] . '">'; }
	if($atts['name']){ $output .= '<h2>' . $atts['name'] . '</h2>'; }
	if($atts['title']){ $output .= '<h3>' . $atts['title'] . '</h3>'; }
	if($content){ $output .= '<p>' . do_shortcode($content) . '</p> '; }
	$output .= '<div class="social-media">';
	if($atts['facebook']){ $output .= '<a href="' . $atts['facebook'] . '" class="icon-facebook2" target="_BLANK"> </a>'; }
	if($atts['twitter']){ $output .= '<a href="' . $atts['twitter'] . '" class="icon-twitter2" target="_BLANK"> </a> '; } 
	if($atts['linkedin']){ $output .= '<a href="' . $atts['linkedin'] . '" class="icon-linkedin" target="_BLANK"> </a>'; }  
	if($atts['pinterest']){ $output .= '<a href="' . $atts['pinterest'] . '" class="icon-pinterest2" target="_BLANK"> </a>'; }  
	if($atts['instagram']){ $output .= '<a href="' . $atts['instagram'] . '" class="icon-instagram" target="_BLANK"> </a>'; } 
	if($atts['google']){ $output .= '<a href="' . $atts['google'] . '" class="icon-google-plus2" target="_BLANK"> </a>'; }

	$output .= '</div></div>';


	return $output;		

}





/* Pricing Wrapper Shortcode */
add_shortcode('price', 'bh_price');

function bh_price ($atts, $content = null) {
	$atts = shortcode_atts(
		array(
			'columns' => 'four',
			'color' => '#F79320',
			'title' => 'Title',
			'price' => '$0.00',
			'price_sub' => '',
			'url' => '#'
		), $atts);

	$output = '	<div class="bh-pricing-table ' . $atts['columns'] . '">
		<header style="background-color: ' . $atts['color'] . ';">
			<h1 class="bh-price-title">' . $atts['title'] . '</h1>
			<h3 class="bh-price-cost">' . $atts['price'] . '</h3>
			<h5 class="bh-price-cost-subtext">' . $atts['price_sub'] . '</h5> 
		</header>
		<main>
			<ul>' . do_shortcode($content) . '</ul>
		</main>
		<footer>
			<a href="' . $atts['url'] . '" style="background-color: ' . $atts['color'] . '">Buy Now</a>
		</footer>
	</div>	';

	return $output;		

}

/* Pricing Feature Shortcode */
add_shortcode('price_feature', 'bh_price_feature');

function bh_price_feature ($atts, $content = null) {
	$atts = shortcode_atts(
		array(
			'url' => ''
		), $atts);

	if($atts['url']) {
		$output = '<li><a href="' . $atts['url'] . '">' . do_shortcode($content) . '</a></li>';
	} else {
		$output = '<li>' . do_shortcode($content) . '</li>';
	}

	return $output;		

}


/** Contact Page Shortcode **/
add_shortcode('contact-page', 'contactPage');

function contactPage ($atts, $content = null) {
	$atts = shortcode_atts(
		array(
			'map_src' => '',
			'map_width' => '100%',
			'map_height' => '500px',
			'formID' => '1',
			'address1' => '',
			'address2' => '',
			'phone' => '',
			'fax' => '',
			'email' => ''
		), $atts);

		$gravity_form = '[gravityform id="' . $atts['formID'] . '" title="false" description="false"]';

		$output = '<div class="contact_page_wrapper">
		<div class="contact-page-left">
			<div class="contact-page-map"><iframe src="' . $atts['map_src'] . '" width="' . $atts['map_width'] . '" height="' . $atts['map_height'] . '" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="contact-page-details">' . do_shortcode($content) . '</div>
			<ul class="contact-page-contact">';

		if($atts['address1']) { $output .= '<li class="icon-location">' . $atts['address1'] . '</li>'; }
		if($atts['address2']) { $output .= '<li class="address2">' . $atts['address2'] . '</li>'; }
		if($atts['phone']) { $output .= '<li class="icon-phone">' . $atts['phone'] . '</li>'; }
		if($atts['fax']) { $output .= '<li class="icon-phone">' . $atts['fax'] . '</li>'; }
		if($atts['email']) { $output .= '<li class="icon-envelop">' . $atts['email'] . '</li>'; }

		$output .= '</ul></div>
		<div class="contact-page-right">' . do_shortcode($gravity_form) . '</div>';

		$output .= '</div>';
		return $output;		
}