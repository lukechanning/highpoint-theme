<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	
	register_sidebar(array(
	  'id' => 'home-hero',
	  'name' => __( 'Home Hero', 'foundationpress' ),
	  'description' => __( 'Add a text widget to the Home Hero section', 'foundationpress' ),
	  'before_title' => '<h1>',
	  'after_title' => '</h1>',
	  'before_widget' => '<div>',
	  'after_widget' => '</div>',
	));


	register_sidebar(array(
	  'id' => 'home-hero-buttons',
	  'name' => __( 'Home Hero Buttons', 'foundationpress' ),
	  'description' => __( 'Add a text widget to add buttons to the Home Hero section', 'foundationpress' ),
	  'before_widget' => '<div class="button-group" data-grouptype="OR">',
	  'after_widget' => '</div>',
	));
	
	register_sidebar(array(
	  'id' => 'home-middle-text',
	  'name' => __( 'Home Middle Text', 'foundationpress' ),
	  'description' => __( 'Add a text widget to the Home Middle Section', 'foundationpress' ),
	  'before_widget' => '<div class="button-group" data-grouptype="OR">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2 class="lined">',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'id' => 'home-middle-card-one',
	  'name' => __( 'Home Card One', 'foundationpress' ),
	  'description' => __( 'Add a text widget to display the first home card text', 'foundationpress' ),
	  'before_widget' => '<div class="image-overlay-content">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'id' => 'home-middle-card-two',
	  'name' => __( 'Home Card Two', 'foundationpress' ),
	  'description' => __( 'Add a text widget to display the second home card text', 'foundationpress' ),
	  'before_widget' => '<div class="image-overlay-content">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'id' => 'home-middle-card-three',
	  'name' => __( 'Home Card Three', 'foundationpress' ),
	  'description' => __( 'Add a text widget to display the third home card text', 'foundationpress' ),
	  'before_widget' => '<div class="image-overlay-content">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
