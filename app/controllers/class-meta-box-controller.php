<?php

namespace SEO_Generator\Controllers;

class Meta_Box_Controller {

    const FIELD_NAME = 'seo_generator_text';

    public static function init() {
        self::add_meta_box();
    }

    public static function add_meta_box() {
        add_action( 'add_meta_boxes', function () {
            add_meta_box( 'seo_generator_section', 'SEO text', array( self::class, 'output_meta_box' ), 'post', 'normal' );
        } );

        add_action( 'save_post', function ( $post_id ) {
            if ( empty( $_POST[ self::FIELD_NAME ] ) ) {
                return;
            }
            $val = filter_input( INPUT_POST, self::FIELD_NAME );
            update_post_meta( $post_id, self::FIELD_NAME, $val );
        } );
    }

    public static function output_meta_box( $post ) {
        $text = self::get_seo_text_field( $post->ID );
        $text = $text ?: '';
        $args = array(
            'textarea_name' => self::FIELD_NAME,
            'textarea_rows' => 20,
            'wpautop'       => true,
        );
        wp_editor( $text, self::FIELD_NAME . '_editor', $args );
    }

    public static function get_seo_text_field( $post_id = null ) {
        $post = get_post( $post_id );

        return get_post_meta( $post->ID, self::FIELD_NAME, true );
    }
}
