<?php

namespace SEO_Generator;

class ACF_Handler {
    public static function init() {
        self::register_fields();
    }

    public static function register_fields() {
        if ( function_exists( 'acf_add_local_field_group' ) ):
            acf_add_local_field_group( require __DIR__ . '/config/acf.php' );
        endif;
    }
}
