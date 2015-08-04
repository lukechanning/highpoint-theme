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

}
add_action( 'customize_register', 'squarefoot_customize_register' );

?>