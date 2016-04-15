<?php
/**
 Plugin Name: No FSP
 Plugin URI: https://github.com/boogah/nofsp
 Description: Deactivate the Force Strong Passwords plugin on hosts that install and activate it on your behalf.
 Version: 1.0
 Author: Jason Cosper
 Author URI: http://jasoncosper.com/
 License: GPLv2
 @package nofsp
 */

add_action('init', function() {
	remove_action( 'admin_enqueue_scripts', 'slt_fsp_enqueue_force_zxcvbn_script' );
	remove_action( 'login_enqueue_scripts', 'slt_fsp_enqueue_force_zxcvbn_script' );
	remove_action( 'user_profile_update_errors', 'slt_fsp_validate_profile_update', 0, 3 );
	remove_action( 'validate_password_reset', 'slt_fsp_validate_strong_password', 10, 2 );
});
