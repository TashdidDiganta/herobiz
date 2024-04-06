<?php



function theme_scripts(){
    wp_enqueue_style('arckytech-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap', array(), time());
    wp_enqueue_style('aos', HEROBIZ_THEME_CSS_DIR . 'aos.css', []);
    wp_enqueue_style('bootrap', HEROBIZ_THEME_CSS_DIR . 'bootstrap.css', []);
    wp_enqueue_style('bootrap-min', HEROBIZ_THEME_CSS_DIR . 'bootstrap.min.css', []);
    wp_enqueue_style('bootstrap-icons', HEROBIZ_THEME_CSS_DIR . 'bootstrap-icons.css', []);
    wp_enqueue_style('bootstrap-icons.min', HEROBIZ_THEME_CSS_DIR . 'bootstrap-icons.min.css', []);
    wp_enqueue_style('glightbox.min', HEROBIZ_THEME_CSS_DIR . 'glightbox.min.css', []);
    wp_enqueue_style('variables', HEROBIZ_THEME_CSS_DIR . 'variables.css', []);
    wp_enqueue_style('swiper-bundle.min', HEROBIZ_THEME_CSS_DIR . 'swiper-bundle.min.css', []);
    wp_enqueue_style('herobiz', HEROBIZ_THEME_CSS_DIR . 'main.css', []);
    wp_enqueue_style('herobiz-style', get_stylesheet_uri());


    // all js
    wp_enqueue_script('aos',  HEROBIZ_THEME_JS_DIR . 'aos', ['jquery'], '', true);
    wp_enqueue_script('bootstrap.min',  HEROBIZ_THEME_JS_DIR . 'bootstrap.min.js', ['jquery'], '', true);
    wp_enqueue_script('glightbox',  HEROBIZ_THEME_JS_DIR . 'glightbox.js', ['jquery'], '', true);
    wp_enqueue_script('isotope.pkgd.min',  HEROBIZ_THEME_JS_DIR . 'isotope.pkgd.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('main',  HEROBIZ_THEME_JS_DIR . 'main.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');