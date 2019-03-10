<?php

//require get_template_directory() . '/inc/cpac-cpt-support.php';
add_theme_support( 'title-tag' );


//require get_template_directory() . '/inc/function-admin.php';

function theme_styles() {
	//wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	//wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');

	//wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Abril+Fatface|Droid+Serif|Lato:300,400,700' );
	wp_enqueue_style( 'google_fonts_ultra', 'https://fonts.googleapis.com/css?family=Playfair+Display');
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Josefin+Slab|Open+Sans+Condensed:300');
	//wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Dosis|Open+Sans');
	//wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/cpac.css' );
	wp_enqueue_style( 'cpac', get_stylesheet_uri(), array(), '1.4', 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'cpac' ),
) );

//require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image

add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
}

// function cpac_excerpt_length( $length ) {
// 	return 30;
// }
// add_filter( 'excerpt_length', 'cpac_excerpt_length', 999 );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


/*

@package cpac
	=====================
		Custom Post Portfolio Portfolio Types
	=====================
*/


	// Custom Post Portfolio Type: Portfolio
	function cpaccione_custom_portfolio() {

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
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'post-formats'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
		'menu_position' => 5,
		'public' => true,
		'query_var' => true,
		//'rewrite' => true,
		'rewrite' => array('slug' => 'portfolio-piece'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'cpaccione_custom_portfolio');



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
		'show_in_rest'			=> true,
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
