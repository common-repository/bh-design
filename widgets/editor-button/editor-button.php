<?php 

add_shortcode( 'recent-posts', 'wptuts_recent_posts' );
function wptuts_recent_posts( $atts ) {
    extract( shortcode_atts( array(
        'numbers' => '5',
    ), $atts ) );
    $rposts = new WP_Query( array( 'posts_per_page' => $numbers, 'orderby' => 'date' ) );
    if ( $rposts->have_posts() ) {
        $html = '<h3>Recent Posts</h3><ul class="recent-posts">';
        while( $rposts->have_posts() ) {
            $rposts->the_post();
            $html .= sprintf(
                '<li><a href="%s" title="%s">%s</a></li>',
                get_permalink($rposts->post->ID),
                get_the_title(),
                get_the_title()
            );
        }
        $html .= '</ul>';
    }
    wp_reset_query();
    return $html;
}



add_action( 'init', 'bh_shortcode_button' );
function bh_shortcode_button() {
    add_filter( "mce_external_plugins", "bh_add_buttons" );
    add_filter( 'mce_buttons', 'bh_register_buttons' );
}
function bh_add_buttons( $plugin_array ) {
    $plugin_array['bhshortcodes'] = plugins_url( '/bh-design/widgets/editor-button/editor-button.js' );
    return $plugin_array;
}
function bh_register_buttons( $buttons ) {
    array_push( $buttons, 'bhshortcodes' ); // dropcap', 'recentposts
    return $buttons;
}