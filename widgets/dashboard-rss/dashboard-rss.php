<?php

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function rss_dashboard_widget() {

	wp_add_dashboard_widget(
                 'rss_dashboard_widget',         // Widget slug.
                 'Online Success Help',         // Title.
                 'rss_dashboard_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'rss_dashboard_widget' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function rss_dashboard_function() {


	$rss = new DOMDocument();
	$rss->load('http://www.brandonturpin.com/feed/');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 5;
	$color = get_user_meta(get_current_user_id(), 'admin_color', true);

	echo '<ul>';
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<li style="border-bottom: 1px solid #ECECEC; margin-bottom: 10px; padding-bottom: 13px;">';
		echo '<h3 style="margin-bottom: 0;"><a style="text-decoration: none;" href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h3>';
		if($x==0) {
			echo '<p style="margin-top: 5px; margin-bottom: 0;">'.$description.'</p>';
		}
		echo '</li>';
	}
	echo '</ul>';
		echo '<p style="text-align: right;"><a class="button-primary" href="http://www.brandonturpin.com" target="_blank" title="brandonturpin.com">Read More</a></p>';

}

?>