<?php

/**
 * Enqueue scripts and styles.
 */
define('HEROBIZ_THEME_DIR', get_template_directory());
define('HEROBIZ_THEME_URI', get_template_directory_uri());
define('HEROBIZ_THEME_CSS_DIR', HEROBIZ_THEME_URI . '/assets/css/');
define('HEROBIZ_THEME_JS_DIR', HEROBIZ_THEME_URI . '/assets/js/');
define('HEROBIZ_THEME_INC', HEROBIZ_THEME_DIR . '/inc/' );





require HEROBIZ_THEME_INC . 'theme_helper.php';

/**
 * include herobiz functions file
 */
require_once HEROBIZ_THEME_INC . '/common/theme_links.php';

