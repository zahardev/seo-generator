<?php
/*
 Plugin Name: SEO Generator
 Author: Sergey Zakharchenko
 Author URI:  https://github.com/zahardev
 Description: Generates SEO texts by templates
 Version: 1.1.0
 License: GPL2
*/

use SEO_Generator\App;

if ( ! function_exists( 'add_action' ) ) {
    exit;
}

define( 'SEOGEN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SEOGEN_PLUGIN_BASENAME', plugin_basename(__FILE__));
define( 'SEOGEN_PLUGIN_URL', plugins_url('', __FILE__));
define( 'SEOGEN_VERSION', '1.1.0');

require_once 'wp-autoloader.php';

App::init();
