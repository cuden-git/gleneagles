<?php
/**
 * Site Options
 *
 * Configuration for Site Options pages
 */
namespace App\SiteOptions;

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Configuration',
		'menu_title'	=> 'Configuration',
		'menu_slug' 	=> 'configuration',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
