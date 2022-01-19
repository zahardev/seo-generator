<?php

namespace SEO_Generator\Controllers;

class Post_Type_Controller {

    const POST_TYPE = 'seotext';

    public static function init() {
        self::register_post_type();
    }

    public static function register_post_type() {
        add_action( 'init', function () {
            $args = require SEOGEN_PLUGIN_DIR . 'app/config/cpt-seotext.php';
            register_post_type( self::POST_TYPE, $args );
        } );
    }
}
