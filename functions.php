<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );


// Register Sidebar
function ssc_custom_sidebar() {

	$args = array(
		'id'            => 'abovecontentarea',
		'name'          => 'Above Content Area',
		'description'   => 'Widget to appear above main content and below the header',
		'class'         => 'abovecontentarea',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="entry-content above-content-widget">',
		'after_widget'  => '</div>',
	);

	register_sidebar( $args );

}


// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'ssc_custom_sidebar' );