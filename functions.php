<?php
/**
 *  Theme Functions
 * 
 *  @package Diadem
 */

// echo '<pre>';
// print_r (DIADEM_DIR_PATH);
// wp_die();

if ( !defined('DIADEM_DIR_PATH')) {
    define( 'DIADEM_DIR_PATH', untrailingslashit( get_template_directory() ));
}

if ( !defined('DIADEM_DIR_URI')) {
    define( 'DIADEM_DIR_URI', untrailingslashit( get_template_directory_uri() ));
}

if ( !defined('DIADEM_PLUGINS_PATH')) {
    define( 'DIADEM_PLUGINS_PATH', untrailingslashit( $plugin_dir = ABSPATH . 'wp-content/plugins/' ) );
}

// if ( !defined('DIADEM_PLUGINS_URI')) {
//     define( 'DIADEM_PLUGINS_URI', untrailingslashit( plugin_dir_url() ));
// }

if ( !defined('DIADEM_BUILD_URI')) {
    define( 'DIADEM_BUILD_URI', untrailingslashit( get_template_directory_uri() . '/assets/build' ));
}

if ( !defined('DIADEM_BUILD_PATH')) {
    define( 'DIADEM_BUILD_PATH', untrailingslashit( get_template_directory() . '/assets/build' ));
}

if ( !defined('DIADEM_BUILD_JS_DIR_PATH')) {
    define( 'DIADEM_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/js' ));
}

if ( !defined('DIADEM_BUILD_JS_URI')) {
    define( 'DIADEM_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/js' ));
}

if ( !defined('DIADEM_BUILD_IMG_URI')) {
    define( 'DIADEM_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/img' )); 
}

if ( !defined('DIADEM_BUILD_CSS_URI')) {
    define( 'DIADEM_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/css' ));
}

if ( !defined('DIADEM_BUILD_CSS_DIR_PATH')) {
    define( 'DIADEM_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/css' ));
}

if ( !defined('DIADEM_BLOCK_TEMPLATE_DIR')) {
    define( 'DIADEM_BLOCK_TEMPLATE_DIR', untrailingslashit( get_template_directory() .  '/block-templates/'));
}

if ( !defined('DEVELOPER_URL')) {
    define( 'DEVELOPER_URL', 'https://inter-action.design' );
}

//require_once DIADEM_DIR_PATH . '/inc/helpers/autoloader.php';
require_once DIADEM_DIR_PATH . '/vendor/autoload.php';
require_once DIADEM_DIR_PATH . '/inc/helpers/template-tags.php';
require_once DIADEM_PLUGINS_PATH . '/salemoche-wordpress-essentials/inc/helpers/helpers.php';

function diadem_get_theme_instance() {
    \DiademNamespace\classes\Theme::get_instance();
}

diadem_get_theme_instance();

?>