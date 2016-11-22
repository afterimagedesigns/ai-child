<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  

require_once get_stylesheet_directory() . '/includes/plugin-list.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

//
// Your code goes below
//

/**
 * Enqueue scripts and styles
 */
function load_style_n_scripts() {
	// load google font css
	wp_enqueue_style( 'source-sans-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', false );
}
add_action( 'wp_enqueue_scripts', 'load_style_n_scripts' );

/**
 * Allow user to upload SVG file
 */
function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');