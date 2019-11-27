<?php
/**
 * Theme Setup
 *
 * Place necessary theme config files, for example configuring default image sizes
 */
namespace App\Setup;

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('sandbox/main.css', \App\Utilities\get_asset('styles/main.css'), false, null);
	wp_enqueue_script('sandbox/main.js', \App\Utilities\get_asset('scripts/main.js'), ['jquery'], null, true);
	wp_localize_script('sandbox/main.js', 'localizedData', array('siteURL' => site_url()));

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

add_theme_support( 'title-tag' );

/**
 *  Add menus
 */
add_action('init', function () {
  register_nav_menus(
    array(
		'page-navigation' => __( 'Page Navigation' )
    )
  );
});

add_action('init', function () {
    $labels = array(
  		'name'               => __( 'Accommodation' ),
  		'singular_name'      => __( 'Accommodation' ),
  		'menu_name'          => __( 'Accommodation' ),
  		'name_admin_bar'     => __( 'Accommodation' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Accommodation' ),
  		'new_item'           => __( 'New Accommodation' ),
  		'edit_item'          => __( 'Edit Accommodation' ),
  		'view_item'          => __( 'View Accommodation' ),
  		'all_items'          => __( 'All Accommodation' ),
  		'search_items'       => __( 'Search Accommodation' ),
  		'parent_item_colon'  => __( 'Parent Accommodation:' ),
  		'not_found'          => __( 'No accommodations found.' ),
      'not_found_in_trash' => __( 'No accommodations found in Trash.' ),
      'attributes' => __( 'Accommodation Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'accommodation' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-admin-home',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);

  	register_post_type( 'accommodation', $args );


    $labels = array(
  		'name'               => __( 'Dine & Drink' ),
  		'singular_name'      => __( 'Dine & Drink' ),
  		'menu_name'          => __( 'Dine & Drink' ),
  		'name_admin_bar'     => __( 'Dine & Drink' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Dine & Drink' ),
  		'new_item'           => __( 'New Dine & Drink' ),
  		'edit_item'          => __( 'Edit Dine & Drink' ),
  		'view_item'          => __( 'View Dine & Drink' ),
  		'all_items'          => __( 'All Dine & Drink' ),
  		'search_items'       => __( 'Search Dine & Drink' ),
  		'parent_item_colon'  => __( 'Parent Dine & Drink:' ),
  		'not_found'          => __( 'No Dine & Drink found.' ),
      'not_found_in_trash' => __( 'No Dine & Drink found in Trash.' ),
      'attributes' => __( 'Dine & Drink Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'dine-drink' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-carrot',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);

  	register_post_type( 'dine-drink', $args );


    $labels = array(
  		'name'               => __( 'Wellness' ),
  		'singular_name'      => __( 'Wellness' ),
  		'menu_name'          => __( 'Wellness' ),
  		'name_admin_bar'     => __( 'Wellness' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Wellness' ),
  		'new_item'           => __( 'New Wellness' ),
  		'edit_item'          => __( 'Edit Wellness' ),
  		'view_item'          => __( 'View Wellness' ),
  		'all_items'          => __( 'All Wellness' ),
  		'search_items'       => __( 'Search Wellness' ),
  		'parent_item_colon'  => __( 'Parent Wellness:' ),
  		'not_found'          => __( 'No Wellness found.' ),
      'not_found_in_trash' => __( 'No Wellness found in Trash.' ),
      'attributes' => __( 'Wellness Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'wellness' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-universal-access',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);

  	register_post_type( 'wellness', $args );


    $labels = array(
  		'name'               => __( 'Explore' ),
  		'singular_name'      => __( 'Explore' ),
  		'menu_name'          => __( 'Explore' ),
  		'name_admin_bar'     => __( 'Explore' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Explore' ),
  		'new_item'           => __( 'New Explore' ),
  		'edit_item'          => __( 'Edit Explore' ),
  		'view_item'          => __( 'View Explore' ),
  		'all_items'          => __( 'All Explore' ),
  		'search_items'       => __( 'Search Explore' ),
  		'parent_item_colon'  => __( 'Parent Explore:' ),
  		'not_found'          => __( 'No Explore found.' ),
      'not_found_in_trash' => __( 'No Explore found in Trash.' ),
      'attributes' => __( 'Explore Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'explore' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-location-alt',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);

    register_post_type( 'explore', $args );

    $labels = array(
  		'name'               => __( 'Pursuits' ),
  		'singular_name'      => __( 'Pursuits' ),
  		'menu_name'          => __( 'Pursuits' ),
  		'name_admin_bar'     => __( 'Pursuits' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Pursuit' ),
  		'new_item'           => __( 'New Pursuits' ),
  		'edit_item'          => __( 'Edit Pursuits' ),
  		'view_item'          => __( 'View Pursuits' ),
  		'all_items'          => __( 'All Pursuits' ),
  		'search_items'       => __( 'Search Pursuits' ),
  		'parent_item_colon'  => __( 'Parent Pursuits:' ),
  		'not_found'          => __( 'No Pursuits found.' ),
      'not_found_in_trash' => __( 'No Pursuits found in Trash.' ),
      'attributes' => __( 'Pursuits Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'pursuits' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-buddicons-activity',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);
    register_post_type( 'pursuits', $args );

    $labels = array(
  		'name'               => __( 'Golf' ),
  		'singular_name'      => __( 'Golf' ),
  		'menu_name'          => __( 'Golf' ),
  		'name_admin_bar'     => __( 'Golf' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Golf' ),
  		'new_item'           => __( 'New Golf' ),
  		'edit_item'          => __( 'Edit Golf' ),
  		'view_item'          => __( 'View Golf' ),
  		'all_items'          => __( 'All Golf' ),
  		'search_items'       => __( 'Search Golf' ),
  		'parent_item_colon'  => __( 'Parent Golf:' ),
  		'not_found'          => __( 'No Golf found.' ),
      'not_found_in_trash' => __( 'No Golf found in Trash.' ),
      'attributes' => __( 'Golf Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'golf' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-flag',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);
    register_post_type( 'golf', $args );

    $labels = array(
  		'name'               => __( 'Meetings' ),
  		'singular_name'      => __( 'Meetings' ),
  		'menu_name'          => __( 'Meetings' ),
  		'name_admin_bar'     => __( 'Meetings' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Meeting' ),
  		'new_item'           => __( 'New Meeting' ),
  		'edit_item'          => __( 'Edit Meetings' ),
  		'view_item'          => __( 'View Meetings' ),
  		'all_items'          => __( 'All Meetings' ),
  		'search_items'       => __( 'Search Meetings' ),
  		'parent_item_colon'  => __( 'Parent Meetings:' ),
  		'not_found'          => __( 'No Meetings found.' ),
      'not_found_in_trash' => __( 'No Meetings found in Trash.' ),
      'attributes' => __( 'Meetings Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'meetings' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-groups',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);
    register_post_type( 'meetings', $args );

    $labels = array(
  		'name'               => __( 'Meetings & Occaisions' ),
  		'singular_name'      => __( 'Meetings & Occaisions' ),
  		'menu_name'          => __( 'Meetings & Occaisions' ),
  		'name_admin_bar'     => __( 'Meetings & Occaisions' ),
  		'add_new'            => __( 'Add New' ),
  		'add_new_item'       => __( 'Add New Meeting' ),
  		'new_item'           => __( 'New Meeting' ),
  		'edit_item'          => __( 'Edit Meetings & Occaisions' ),
  		'view_item'          => __( 'View Meetings & Occaisions' ),
  		'all_items'          => __( 'All Meetings & Occaisions' ),
  		'search_items'       => __( 'Search Meetings & Occaisions' ),
  		'parent_item_colon'  => __( 'Parent Meetings & Occaisions:' ),
  		'not_found'          => __( 'No Meetings & Occaisions found.' ),
      'not_found_in_trash' => __( 'No Meetings & Occaisions found in Trash.' ),
      'attributes' => __( 'Meetings & Occaisions Attributes' )
  	);

  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'meetings-occaisions' ),
  		'capability_type'    => 'post',
  		'has_archive'        => false,
  		'hierarchical'       => true,
  		'menu_position'      => null,
      'menu_icon'           => 'dashicons-buddicons-community',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  	);
    register_post_type( 'meetings-occaisions', $args );


  });

/**
 * Disable Posts' meta from being preloaded
 * This fixes memory problems in the WordPress Admin
 */

// Only do this for admin
if ( is_admin() ) {
	add_action( 'pre_get_posts', function ( $wp_query ) {
		if ( in_array( $wp_query->get( 'post_type' ), array( 'accommodation', 'acf-field-group', 'acf-field' ), true ) ) {
			$wp_query->set( 'update_post_meta_cache', false );
		}
	});
}
