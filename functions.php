<?php

// Add CSS
function amalfi_theme_styles() {

	wp_enqueue_style( 'build_css', get_template_directory_uri() . '/build/css/build.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'amalfi_theme_styles' );

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );


// Add JS
function amalfi_theme_js() {

	// False to be on top, true to be at the bottom:
	wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/build/js/script.min.js', '', '', true );
	// If it depends on jQuery:
	// wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'amalfi_theme_js' );


// Register Widget Areas
function amalfi_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

amalfi_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
amalfi_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


// Add support for featured images
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, array( 'top', 'top') );
update_option('thumbnail_size_w', 150);
update_option('thumbnail_size_h', 150);


// Remove Default Image Link
function amalfi_imagelink_setup() {

    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {

        update_option('image_default_link_type', 'none');

    }

}

add_action('admin_init', 'amalfi_imagelink_setup', 10);


// Add support for menus
add_theme_support( 'menus' );


// Register the theme menus
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);

}

add_action( 'init', 'register_theme_menus' );


// Remove p tags from category description
remove_filter('term_description','wpautop');

?>
