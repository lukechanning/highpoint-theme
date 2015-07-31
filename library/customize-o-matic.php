<?php 

function squarefoot_customize_register( $wp_customize ) {

    //Add Custom Header
    $wp_customize->add_section( 'squarefoot_logo_section' , array(
    'title'       => __( 'squarefoot Logo', 'squarefoot' ),
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

}
add_action( 'customize_register', 'squarefoot_customize_register' );

?>