<?php

namespace SEO_Generator;

class Seotext {

    const POST_TYPE = 'seotext';

    const FIELD_NAME = 'seo_generator_text';

    const SHORTCODE = 'seo_generator_text';

    public static function init() {
        self::register_post_type();
        self::show_seotext();
    }

    public static function register_post_type() {
        add_action( 'init', function () {
            $args = require __DIR__ . '/config/cpt-seotext.php';
            register_post_type( self::POST_TYPE, $args );
        } );
    }

    public static function show_seotext() {
        add_filter( 'the_content', function ( $content ) {
            $seo_text = self::get_seo_text();

            if ( empty( $seo_text ) ) {
                return $content;
            }

            $position = Settings::get_option( 'seo_text_position' );

            switch ( $position ) {
                case 'after_content':
                    return $content . '<br>' . $seo_text;
                case 'before_content':
                    return $seo_text . '<br>' . $content;
                case 'shortcode':
                    add_shortcode( self::SHORTCODE, function () use ( $seo_text ) {
                        return $seo_text;
                    } );
            }

            return $content;
        } );
    }

    public static function get_seo_text() {
        $seo_text = get_field( self::FIELD_NAME );

        preg_match_all( '/\{\{.*?\}\}/', $seo_text, $matches );
        $matches = $matches[0];

        foreach ( $matches as $match ) {
            $field     = substr( $match, 2, strlen( $match ) - 4 );
            $field_val = get_field( $field );
            $seo_text  = str_replace( $match, $field_val, $seo_text );
        }

        return $seo_text;
    }
}
