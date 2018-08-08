<?php

// includes theme styles
function padlab_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/theme-style.css' );
	wp_enqueue_style( 'google_font_spectral', 'https://fonts.googleapis.com/css?family=Spectral&amp;subset=latin-ext' );
	wp_enqueue_style( 'google_font_playfair_display', 'https://fonts.googleapis.com/css?family=Playfair+Display' );
	wp_enqueue_style( 'google_font_vidaloka', 'https://fonts.googleapis.com/css?family=Vidaloka' );
	wp_enqueue_style( 'flexslider-style', get_template_directory_uri() . '/flexslider/flexslider.css' );
}

add_action( 'wp_enqueue_scripts', 'padlab_styles');

	// // includes Google Fonts
	// function google_fonts() {
	// 	$query_args = array(
	// 		'family' => 'Spectral',
	// 		// 'family' => 'Lato:100,300,400,700',
	// 		'subset' => 'latin,latin-ext',
	// 	);
	// 	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	// }
	            
	// add_action('wp_enqueue_scripts', 'google_fonts');

// includes theme js
function padlab_js() {

	global $wp_scripts;

	//Registering Scripts
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false ); //2 blanks - If there's dependencies & version #, final parameter tells wordpress false to load in footer. So it will load in header.
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	//Additoinal Functions Scripts
	wp_register_script( 'single_listings_js', get_template_directory_uri() . '/assets/js/single-listings.js', array('jquery'), '', true );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	//Scripts Loaded in head
	wp_enqueue_script( 'fa_font', 'https://use.fontawesome.com/b8f6ba1eb4.js', '', '', false);
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/flexslider/jquery.flexslider.js', array('jquery'), '', false);
	wp_enqueue_script( 'flexslider-run', get_template_directory_uri() . '/flexslider/flexslider-script.js', array('jquery'), '', false);

	//Scripts Loaded in footer
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '', true );
	

	//Load scripts on specific pages

		//Single Listings Page
	    if ( is_singular( 'listings' ) ) {
	        wp_enqueue_script( 'single_listings_js' );
	    }

}

add_action( 'wp_enqueue_scripts', 'padlab_js' );

// function padlab_conditional_scripts() {
//     if ( is_page_template( 'single-listings.php' ) ) {
//         wp_enqueue_script( 'single_listings_js', get_template_directory_uri() . '/js/single-listings.js', array('jquery'), '', true );
//     }
// }

// add_action( 'wp_enqueue_scripts', 'padlab_conditional_scripts' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

add_action( 'init', 'register_theme_menus' );

// function to produce widget parameters
function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

// creates widget fields in Appearance > Widget section of Admin Panel
create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on side of blog with sidebar' );

?>