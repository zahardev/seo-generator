<?php

namespace SEO_Generator\Controllers;

class Frontend_Controller {


    const FIELD_NAME = 'seo_generator_text';

    const SHORTCODE = 'seo_generator_text';

    public static function init() {
        self::show_seotext();
    }

    public static function show_seotext() {
        add_filter( 'the_content', function ( $content ) {
            $seo_text = self::get_seo_text();

            if ( empty( $seo_text ) ) {
                return $content;
            }

            $seo_text = wpautop( $seo_text );

            $position = Settings_Controller::get_option( 'seo_text_position' );

            switch ( $position ) {
                case 'after_content':
                    return $content . $seo_text;
                case 'before_content':
                    return $seo_text . $content;
                case 'shortcode':
                    add_shortcode( self::SHORTCODE, function () use ( $seo_text ) {
                        return $seo_text;
                    } );
            }

            return $content;
        } );
    }

    /**
     * @return string
     */
    public static function get_seo_text() {
        $seo_text = Meta_Box_Controller::get_seo_text_field();

        if ( empty( $seo_text ) ) {
            return '';
        }

        global $post;

        preg_match_all( '/\{\{.*?\}\}/', $seo_text, $matches );
        $matches = $matches[0];

        foreach ( $matches as $match ) {
            $field = substr( $match, 2, strlen( $match ) - 4 );
            if ( function_exists( 'get_field' ) ) {
                $field_val = get_field( $field );
            } else {
                $field_val = get_post_meta( $post->ID, $field, true );
            }

            if ( ! is_string( $field_val ) ) {
                $field_val = '';
            }

            $seo_text = str_replace( $match, $field_val, $seo_text );
        }

        return $seo_text;
    }
}
