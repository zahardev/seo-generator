<?php
/*
 Plugin Name: SEO Generator
 Author: Sergey Zakharchenko
 Author URI:  https://github.com/zahardev
 Description: Generates SEO texts by templates
 Version: 1.0.0
 License: GPL2

SEO Generator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

SEO Generator is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Stripe Payments Custom Fields. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.

*/

use SEO_Generator\App;

if ( ! function_exists( 'add_action' ) ) {
    exit;
}

define( 'SEO_GEN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SEO_GEN_PLUGIN_BASENAME', plugin_basename(__FILE__));
define( 'SEO_GEN_PLUGIN_URL', plugins_url('', __FILE__));
define( 'SEO_GEN_VERSION', '1.0.0');

require_once 'wp-autoloader.php';

App::init();
