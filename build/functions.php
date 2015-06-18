<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
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
*  WooCommerce Integration
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="content" class="site-content content-sidebar"><div id="main" role="main">';
}

function my_theme_wrapper_end() {
  echo '</div></div>';
}


/**
*	Safe Pasting for TinyMCE (automatically clean up MS Word HTML)
*/
function tinymce_paste_options($init) {
	$init['paste_auto_cleanup_on_paste'] = true;
	$init['paste_convert_headers_to_strong'] = true;
	return $init;
}
if( is_admin() ) add_filter('tiny_mce_before_init', 'tinymce_paste_options');

function tinymce_edit_options($init) {
	$init['theme_advanced_buttons1'] = 'bold';
	return $init;
}
if( is_admin() ) add_filter('tiny_mce_before_init', 'tinymce_edit_options');


// remove ajax search result positioning

add_filter( 'searchwp_live_search_base_styles', '__return_false' );
