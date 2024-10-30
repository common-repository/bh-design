<?php

/*
 * Plugin Name: Design Plugin
 * Plugin URI: http://www.bluehostdesign.com
 * Description: Plugin for the design service
 * Version: 1.3.5
 * Author: Brandon Turpin
 * Author URI: http://www.brandonturpin.com
 * License: GPL2
 *
*/


/* 
 * GLOBAL VARIABLES 
 *
*/

$plugin_url = WP_PLUGIN_URL . '/bh-design';
$bhdesign_company_name = '';
$options = array();
$variables = array();
$bhdesign_password_error;
$bhdesign_icon_moon;


/* 
 * Add admin settings page in menu
 *
*/

function bhdesign_menu() {

  $options = get_option( 'bhdesign_settings' );
  $bhdesign_menu_name = $options['bhdesign_company_name'];

  if ($bhdesign_menu_name == "") {
    $bhdesign_menu_name = "Select Company";
  }

  if ($bhdesign_menu_name == "Bluehost") {
    $bhdesign_icon = "bh";
  } else if ($bhdesign_menu_name == "Hostmonster") {
    $bhdesign_icon = "hm";
  } else if ($bhdesign_menu_name == "Justhost") {
    $bhdesign_icon = "jh";
  } else {
    $bhdesign_icon = "bh";
  }

  add_menu_page( 
    'Design Settings Plugin', 
    $bhdesign_menu_name, 
    'manage_options', 
    'bhdesign_settings', 
    'bhdesign_settings_options_page', 
    WP_PLUGIN_URL . '/bh-design/images/' . $bhdesign_icon . '-icon.png'
  );
}

add_action( 'admin_menu', 'bhdesign_menu');


function bhdesign_settings_options_page() {
   
   if(!current_user_can('manage_options')) {
      wp_die('You do not have sufficient permissions to access this page.');
   }

   global $plugin_url;
   global $bhdesign_company_name;
   global $options;
   global $variables;
   global $bhdesign_password_error;
   global $bhdesign_icon_moon;

   if (isset( $_POST['bhdesign_company_form_submitted'] ) ) {

      $hidden_field = esc_html( $_POST['bhdesign_company_form_submitted'] );

      if ($hidden_field =="Y") {

         $options = get_option( 'bhdesign_settings' );

         $bhdesign_company_name = esc_html( $_POST['bhdesign_company'] );

         $options['bhdesign_company_name'] = $bhdesign_company_name;

         update_option( 'bhdesign_settings', $options );
         
      }

   }

   /** CLEAR COMPANY NAME **/
  if (isset( $_POST['bhdesign_company_clear_submited'] ) ) {

    $hidden_field = esc_html( $_POST['bhdesign_company_clear_submited'] );

    if ($hidden_field == "Y") {

      $hidden_pass = "bhdesign";
      $hidden_field2 = esc_html( $_POST['bhdesign_clear_password'] );

      if ($hidden_field2 == $hidden_pass) {


        $options = get_option( 'bhdesign_settings' );

        $options['bhdesign_company_name'] = "";
  
        update_option( 'bhdesign_settings', $options );

      } else {

        $bhdesign_password_error = true;

      }
    }
  }

/***** SAVE GENERAL SETTINGS *****/

if (isset( $_POST['bhdesign_settings_submitted'] ) ) {

    $hidden_field = esc_html( $_POST['bhdesign_settings_submitted'] );

    if ($hidden_field == "Y") {

      $bhdesign_icon_moon = esc_html( $_POST['bhdesign_iconmoon'] );

      $options = get_option( 'bhdesign_settings' );

      $options['bhdesign_icon_moon'] = $bhdesign_icon_moon;

      update_option( 'bhdesign_settings', $options);

    }

  }


 

   $options = get_option( 'bhdesign_settings' );

   if ( $options != '') {

       $bhdesign_company_name = $options['bhdesign_company_name'];
       $bhdesign_icon_moon =  $options['bhdesign_icon_moon'];


   }

   require( 'includes/options-page-wrapper.php' );

}

/******* BH SOCIAL ICONS *********/
require('widgets/social-icons/social-icons.php');

/******* DASHBOARD RSS FEED *********/
// require('widgets/dashboard-rss/dashboard-rss.php');


/******* Admin Styles and Scripts *********/

function bhdesign_settings_styles() {  

  $script_url = WP_PLUGIN_URL . '/bh-design/';

  wp_enqueue_style( 'bhdesign_settings_styles', $script_url . 'bhdesign-plugin.css' );
  wp_enqueue_style( 'bhdesign_featherlight_styles', $script_url . 'css/featherlight.min.css' );
}

add_action( 'admin_head', 'bhdesign_settings_styles' );


function bh_lightbox_scripts() {
  $script_url = WP_PLUGIN_URL . '/bh-design/';
  wp_enqueue_script( 'bhdesign_featherlight_scripts', $script_url . 'js/featherlight.min.js', array('jquery'), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'bh_lightbox_scripts' );



/******* Include Icon Moon *********/

if ($bhdesign_icon_moon = "true") {

  function bhdesign_iconmoon_includes(){

    $script_url = WP_PLUGIN_URL . '/bh-design/';
    wp_enqueue_style( 'bhdesign_settings_styles', $script_url . 'fonts/style.css' );

  }

  add_action( 'wp_head', 'bhdesign_iconmoon_includes' );

  
}

/******* Include Shortcodes *********/

require( 'widgets/shortcodes/shortcodes.php' );


/******* Update login screen *********/
require( 'includes/login-screen.php' );


/******* WP Editor Button *********/
require( 'widgets/editor-button/editor-button.php' );



?>