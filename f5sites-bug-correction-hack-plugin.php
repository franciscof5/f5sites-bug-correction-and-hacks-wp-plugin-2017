<?php
/*
Plugin Name: F5 Sites | Bug Correction Hack Plugin
Plugin URI: https://www.f5sites.com/software/wordpress/f5sites-bug-correction-hack-plugin/
Plugin Description: When some 3rd part plugin has a bug and we dont modify it source code to avoid update issues, so we make changes in our custom hack plugin. WordPress F5 Sites DEV projects. 
Author: Francisco Matelli Matulovic
Author URI: https://www.franciscomat.com/
License: GPLv3
Tags: mu-plugins */

add_action( 'wpcf7_before_send_mail', 'cfdb7_pugin_activation_send', 10, 2 );
add_action( 'toplevel_page_cfdb7-list', 'cfdb7_pugin_activation_send' );

function cfdb7_pugin_activation_send() {
	#echo "cfdb7_pugin_activation_send(primeiro)";
	global $wpdb;
	$old_p = $wpdb->prefix;
	$wpdb->prefix="7fnetwork_";
}
function cfdb7_pugin_activation_init() {
	if(function_exists('cfdb7_pugin_activation')) {
		global $wpdb;
		$old_p = $wpdb->prefix;
		$wpdb->prefix="7fnetwork_";
		#var_dump($old_p);
		#die;
		cfdb7_pugin_activation();
		$wpdb->prefix=$old_p;
	}
}


if(!is_admin()) { 
	add_action('wp_loaded', 'correct_bugs_f5sites');
}
function correct_bugs_f5sites() { ?>
	<style type="text/css">
		ul.post-meta {display: none;}
	</style>
<?php } 

#add_action( 'plugins_loaded', 'cfdb7_pugin_activation_init', 10, 2 );
#add_action( 'wpcf7_before_send_mail', 'cfdb7_pugin_activation_send', 10, 2 );
#add_action( 'cfdb7_admin_init', 'cfdb7_pugin_activation_send', 10, 2 );
/*
function cfdb7_pugin_activation_send() {
	echo "cfdb7_pugin_activation_send(primeiro)";
	global $wpdb;
	$old_p = $wpdb->prefix;
	$wpdb->prefix="7fnetwork_";
}

function cfdb7_pugin_activation_init() {
	if(function_exists('cfdb7_pugin_activation')) {
		global $wpdb;
		$old_p = $wpdb->prefix;
		$wpdb->prefix="7fnetwork_";
		#var_dump($old_p);
		#die;
		cfdb7_pugin_activation();
		$wpdb->prefix=$old_p;
	}
}*/

