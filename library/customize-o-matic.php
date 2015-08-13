<?php 

function squarefoot_customize_register( $wp_customize ) {

    //Add Custom Header
    $wp_customize->add_section( 'squarefoot_logo_section' , array(
    'title'       => __( 'Squarefoot Logo', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload a logo to replace the default squarefoot name and
    description in the header',
    ) );
    $wp_customize->add_setting( 'squarefoot_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_logo', array(
    'label'   => __( 'Logo', 'themeslug' ),
    'section' => 'squarefoot_logo_section',
    'settings' => 'squarefoot_logo',
    ) ) );
    
     //Add Home Hero Image
    $wp_customize->add_section( 'squarefoot_home_hero_section' , array(
    'title'       => __( 'Squarefoot Hero Image', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the home hero section of the homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_home_hero' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_home_hero', array(
    'label'   => __( 'Home Hero Image', 'themeslug' ),
    'section' => 'squarefoot_home_hero_section',
    'settings' => 'squarefoot_home_hero',
    ) ) );
    
    //Add Home Card One
    $wp_customize->add_section( 'squarefoot_card_one_section' , array(
    'title'       => __( 'Squarefoot Card Image One', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the home card section of the homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_card_one' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_card_one', array(
    'label'   => __( 'Home Card One Image', 'themeslug' ),
    'section' => 'squarefoot_card_one_section',
    'settings' => 'squarefoot_card_one',
    ) ) );
    
    //Add Home Hero BG
    $wp_customize->add_section( 'squarefoot_hero_bg_section' , array(
    'title'       => __( 'Squarefoot Hero BG', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the hero homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_hero_bg' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_hero_bg', array(
    'label'   => __( 'Home Hero BG', 'themeslug' ),
    'section' => 'squarefoot_hero_bg_section',
    'settings' => 'squarefoot_hero_bg',
    ) ) );
    
    //Add Home Card Two
    $wp_customize->add_section( 'squarefoot_card_two_section' , array(
    'title'       => __( 'Squarefoot Card Image Two', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the home card section of the homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_card_two' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_card_two', array(
    'label'   => __( 'Home Card Two Image', 'themeslug' ),
    'section' => 'squarefoot_card_two_section',
    'settings' => 'squarefoot_card_two',
    ) ) );
    
    //Add Home Card Three
    $wp_customize->add_section( 'squarefoot_card_three_section' , array(
    'title'       => __( 'Squarefoot Card Image Three', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to add to the home card section of the homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_card_three' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_card_three', array(
    'label'   => __( 'Home Card Three Image', 'themeslug' ),
    'section' => 'squarefoot_card_three_section',
    'settings' => 'squarefoot_card_three',
    ) ) );
    
    //Add Home Card Three
    $wp_customize->add_section( 'squarefoot_cta_section' , array(
    'title'       => __( 'Squarefoot CTA Image', 'squarefoot' ),
    'priority'   => 30,
    'description' => 'Upload an image to the CTA section of the homepage',
    ) );
    $wp_customize->add_setting( 'squarefoot_cta' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'squarefoot_cta', array(
    'label'   => __( 'Home CTA Background Image', 'themeslug' ),
    'section' => 'squarefoot_cta_section',
    'settings' => 'squarefoot_cta',
    ) ) );

}
add_action( 'customize_register', 'squarefoot_customize_register' );

// Register Custom Floor Plan Post Type
function floor_plans_posts() {

	$labels = array(
		'name'                => 'Floor Plans',
		'singular_name'       => 'Floor Plan',
		'menu_name'           => 'Floor Plans',
		'name_admin_bar'      => 'Floor Plans',
		'parent_item_colon'   => 'Floor Plan:',
		'all_items'           => 'All Floor Plans',
		'add_new_item'        => 'Add New Floor Plan',
		'add_new'             => 'Add New',
		'new_item'            => 'New Floor Plan',
		'edit_item'           => 'Edit Floor Plan',
		'update_item'         => 'Update Floor Plan',
		'view_item'           => 'View Floor Plan',
		'search_items'        => 'Search Floor Plan',
		'not_found'           => 'Floor Plan Not Found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Floor Plan',
		'description'         => 'Posts used on the Floor Plans page, including specific information',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'floor_plans', $args );

}
add_action( 'init', 'floor_plans_posts', 0 );

/**
 * Generated by the excellent WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 * 
 * Thanks, Jeremy! 
 * 
 */

function floor_plan_details_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function floor_plan_details_add_meta_box() {
	add_meta_box(
		'floor_plan_details-floor-plan-details',
		__( 'Floor Plan Details', 'floor_plan_details' ),
		'floor_plan_details_html',
		'floor_plans',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'floor_plan_details_add_meta_box' );

function floor_plan_details_html( $post) {
	wp_nonce_field( '_floor_plan_details_nonce', 'floor_plan_details_nonce' ); ?>

	<p>Add extra information about the floor plan here. </p>

	<p>
		<label for="floor_plan_details_price"><?php _e( 'Price', 'floor_plan_details' ); ?></label><br>
		<input type="text" name="floor_plan_details_price" id="floor_plan_details_price" value="<?php echo floor_plan_details_get_meta( 'floor_plan_details_price' ); ?>">
	</p>	<p>
		<label for="floor_plan_details_squarefeet"><?php _e( 'Squarefeet', 'floor_plan_details' ); ?></label><br>
		<input type="text" name="floor_plan_details_squarefeet" id="floor_plan_details_squarefeet" value="<?php echo floor_plan_details_get_meta( 'floor_plan_details_squarefeet' ); ?>">
	</p>	<p>
		<label for="floor_plan_details_bed"><?php _e( 'Bed', 'floor_plan_details' ); ?></label><br>
		<input type="text" name="floor_plan_details_bed" id="floor_plan_details_bed" value="<?php echo floor_plan_details_get_meta( 'floor_plan_details_bed' ); ?>">
	</p>	<p>
		<label for="floor_plan_details_bath"><?php _e( 'Bath', 'floor_plan_details' ); ?></label><br>
		<input type="text" name="floor_plan_details_bath" id="floor_plan_details_bath" value="<?php echo floor_plan_details_get_meta( 'floor_plan_details_bath' ); ?>">
	</p><?php
}

function floor_plan_details_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['floor_plan_details_nonce'] ) || ! wp_verify_nonce( $_POST['floor_plan_details_nonce'], '_floor_plan_details_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['floor_plan_details_price'] ) )
		update_post_meta( $post_id, 'floor_plan_details_price', esc_attr( $_POST['floor_plan_details_price'] ) );
	if ( isset( $_POST['floor_plan_details_squarefeet'] ) )
		update_post_meta( $post_id, 'floor_plan_details_squarefeet', esc_attr( $_POST['floor_plan_details_squarefeet'] ) );
	if ( isset( $_POST['floor_plan_details_bed'] ) )
		update_post_meta( $post_id, 'floor_plan_details_bed', esc_attr( $_POST['floor_plan_details_bed'] ) );
	if ( isset( $_POST['floor_plan_details_bath'] ) )
		update_post_meta( $post_id, 'floor_plan_details_bath', esc_attr( $_POST['floor_plan_details_bath'] ) );
}
add_action( 'save_post', 'floor_plan_details_save' );


?>