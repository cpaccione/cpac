<?php 

// function my_add_frontend_scripts() {
//         wp_enqueue_script('jquery');
//         wp_enqueue_script('jquery-ui-core');
// }
// add_action('wp_enqueue_scripts', 'my_add_frontend_scripts');


function theme_styles() {
	wp_enqueue_style( 'jqueryui_smoothness', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css' );
	wp_enqueue_style( 'font-mfizz', get_template_directory_uri() . '/css/font-mfizz.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Lato:400,300' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	// wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	// wp_register_script( 'jquery_ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), '', true );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	// wp_register_script( 'jqueryui_js', get_template_directory_uri () . 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', '', '', false );
	wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'CAPE' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

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
create_widget( 'Blog Sidebar', 'blog-right', 'Displays on the side of pages in the blog section' );

?>