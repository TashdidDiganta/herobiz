<?php

/**
 * Enqueue scripts and styles.
 */
define('HEROBIZ_THEME_DIR', get_template_directory());
define('HEROBIZ_THEME_URI', get_template_directory_uri());
define('HEROBIZ_THEME_CSS_DIR', HEROBIZ_THEME_URI . '/assets/css/');
define('HEROBIZ_THEME_JS_DIR', HEROBIZ_THEME_URI . '/assets/js/');
define('HEROBIZ_THEME_INC', HEROBIZ_THEME_DIR . '/inc/' );






  function themeslug_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    $wp_customize->add_panel( 'herobiz_settings', array(
        'title' => __( 'Herobiz Settings' ),
        'description' => 'Herobiz Header', // Include html tags such as <p>.
        'priority' => 40, // Mixed with top-level-section hierarchy.
      ) );
      $wp_customize->add_section( 'herobiz_header' , array(
        'title' => __( 'Herobiz Header Settings' ),
        'panel' => 'herobiz_settings',
      ) );

      $wp_customize->add_setting( 'header_settings', array(
        'default' => 'Header Item',
        'transport' => 'refresh',
      ) );

      $wp_customize->add_control( 'custom_theme_css', array(
        'label' => __( 'Custom Theme CSS' ),
        'type' => 'textarea',
        'section' => 'herobiz_header',
        'settings' => 'header_settings',
      ) );
  }


  add_action( 'customize_register', 'themeslug_customize_register');


require HEROBIZ_THEME_INC . 'theme_helper.php';

/**
 * include herobiz functions file
 */
require_once HEROBIZ_THEME_INC . '/common/theme_links.php';

