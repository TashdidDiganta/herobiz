<?php

function herobiz_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Main Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );
}


function herobiz_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'primary_menu',
            'menu_class'     => '',
            'container'      => '',
        ] );
    ?>
    <?php
}



//Customizer setting

// Register custom panel
function custom_theme_customizer_panel( $wp_customize ) {
    // Add panel
    $wp_customize->add_panel( 'custom_panel_id', array(
        'title'       => __( 'Custom Panel', 'custom-theme' ),
        'description' => __( 'Custom panel description.', 'custom-theme' ),
        'priority'    => 10, // Adjust panel priority
    ) );

    // Add setting
    $wp_customize->add_setting( 'custom_setting_id', array(
        'default'           => '#ffffff', // Default value
        'sanitize_callback' => 'sanitize_hex_color', // Sanitization callback
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_setting_id', array(
        'label'    => __( 'Custom Setting', 'custom-theme' ),
        'section'  => 'colors', // Section to which control belongs
        'settings' => 'custom_setting_id', // Corresponding setting ID
        'priority' => 10, // Adjust control priority
    ) ) );
}
add_action( 'customize_register', 'custom_theme_customizer_panel' );

add_action('after_setup_theme', 'herobiz_nav_menu');


