<?php

/*

@package cpac
	=====================
		Custom Post Portfolio Portfolio Types
	=====================
*/


// Custom Post Portfolio Type: Portfolio
add_action('init', 'cp_portfolio');

function cp_portfolio() {

$supports = array(
'title', // post title
'editor', // post content
//'author', // post author
'thumbnail', // featured images
//'excerpt', // post excerpt
//'custom-fields', // custom fields
//'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('Portfolio', 'plural'),
'singular_name' => _x('Portfolio', 'singular'),
'menu_name' => _x('Portfolio', 'admin menu'),
'name_admin_bar' => _x('Portfolio', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Portfolio'),
'new_item' => __('New Portfolio'),
'edit_item' => __('Edit Portfolio'),
'view_item' => __('View Portfolio'),
'all_items' => __('All Portfolios'),
'search_items' => __('Search Portfolios'),
'not_found' => __('No Portfolio found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'menu_icon' => 'dashicons-format-aside',
'menu_position' => 5,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('portfolio', $args);
}



// Taxonomies for portfolio post Portfolio Type
function cp_portfolio_taxonomies() {

	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Portfolio Categories' ),
		'all_items'         => __( 'All Portfolio Categories' ),
		'parent_item'       => __( 'Parent Portfolio Category'),
		'parent_item_colon' => __( 'Parent Portfolio Category:'),
		'edit_item'         => __( 'Edit Portfolio Category' ),
		'update_item'       => __( 'Update Portfolio Category' ),
		'add_new_item'      => __( 'Add New Portfolio Category' ),
		'new_item_name'     => __( 'New Portfolio Category Name' ),
		'menu_name'         => __( 'Portfolio Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
	'name'                       => _x( 'Portfolio Tags', 'taxonomy general name'),
	'singular_name'              => _x( 'Portfolio Tag', 'taxonomy singular name'),
	'search_items'               => __( 'Search Portfolio Tags'),
	'popular_items'              => __( 'Popular Portfolio Tags'),
	'all_items'                  => __( 'All Portfolio Tags'),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Edit Portfolio Tags' ),
	'update_item'                => __( 'Update Portfolio Tag'),
	'add_new_item'               => __( 'Add New Portfolio Tag'),
	'new_item_name'              => __( 'New Portfolio Tag'),
	'separate_items_with_commas' => __( 'Separate portfolio tags with commas'),
	'add_or_remove_items'        => __( 'Add or remove portfolio tags'),
	'choose_from_most_used'      => __( 'Choose from the most used portfolio tags'),
	'not_found'                  => __( 'No portfolio tags found.'),
	'menu_name'                  => __( 'Portfolio Tags'),
);

$args = array(
	'hierarchical'          => false,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'update_count_callback' => '_update_post_term_count',
	'query_var'             => true,
	'rewrite'               => array( 'slug' => 'portfolio-tag' ),
);

register_taxonomy( 'portfolio_tag', array('portfolio'), $args );

}



add_action( 'init', 'cp_portfolio_taxonomies');



?>
