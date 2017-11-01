<?php
/*
Plugin Name: F5 Sites | Bug Correction Hack Plugin
Plugin URI: https://www.f5sites.com/software/wordpress/f5sites-bug-correction-hack-plugin/
Plugin Description: When some 3rd part plugin has a bug and we dont modify it source code to avoid update issues, so we make changes in our custom hack plugin. WordPress F5 Sites DEV projects. 
Author: Francisco Matelli Matulovic
Author URI: https://www.franciscomat.com/
License: GPLv3
Tags: mu-plugins */


if(!is_admin()) { 
	add_action('wp_loaded', 'correct_bugs_f5sites');
}
function correct_bugs_f5sites() { ?>
	<style type="text/css">
		ul.post-meta {display: none;}
	</style>
<?php } 