<?php

/*

@package cpac
	=====================
		ADMIN PAGE
	=====================
*/

function cpac_add_admin_page() {

	//Generate cpac Admin Page
	add_menu_page( 'cpac Theme Options', 'cpac', 'manage_options', 'cpac', 'cpac_theme_create_page', 'dashicons-admin-generic', 110 );

	//Generate cpac Admin Sub Pages
	add_submenu_page( 'cpac', 'cpac Theme Options', 'Theme Options', 'manage_options', 'cpac', 'cpac_theme_create_page' );
	add_submenu_page( 'cpac', 'cpac CSS Options', 'Custom CSS', 'manage_options', 'cpac_css', 'cpac_theme_settings_page' );

	//Activate custom settings
	add_action( 'admin_init', 'sunset_custom_settings' );

}
add_action( 'admin_menu', 'cpac_add_admin_page');

function cpac_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/cpac-admin.php' );
}

function cpac_theme_settings_page() {

}