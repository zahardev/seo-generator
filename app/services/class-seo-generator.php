<?php

namespace SEO_Generator\Services;

use SEO_Generator\Controllers\Meta_Box_Controller;
use SEO_Generator\Controllers\Post_Type_Controller;

class SEO_Generator {

    /**
     * @param $settings
     *
     * @return array
     */
    public static function generate( $settings ) {
        if ( empty( $settings['generate_seo_texts'] ) ) {
            return $settings;
        }

        $settings['generate_seo_texts'] = 0;

        $seo_texts = self::get_all_posts( Post_Type_Controller::POST_TYPE );

        if ( empty( $seo_texts ) ) {
            return $settings;
        }

        $posts = self::get_posts_to_generate( $settings );

        foreach ( $posts as $post ) {
            $rand     = rand( 0, count( $seo_texts ) - 1 );
            $seo_text = $seo_texts[ $rand ];
            update_post_meta( $post->ID, Meta_Box_Controller::FIELD_NAME, $seo_text->post_content );
        }

        return $settings;
    }


    /**
     * @param array $settings
     *
     * @return \WP_Post[]
     */
    public static function get_posts_to_generate( $settings ) {
        $args = array(
            'meta_query' => array(
                array(
                    'key' => 'seo_generator_text',
                    'compare' => 'NOT EXISTS',
                ),
            ),
        );

        if ( ! empty( $settings['overwrite_previous_seo_texts'] ) ) {
            $args = array();
        }

        return self::get_all_posts( 'post', $args );
    }



    /**
     * @param string $post_type
     * @param array $args
     *
     * @return \WP_Post[]
     */
    public static function get_all_posts( $post_type, $args = array() ) {
        $default_args = [
            'post_type'      => $post_type,
            'post_status'    => [ 'publish' ],
            'posts_per_page' => - 1,
        ];

        $args = wp_parse_args( $args, $default_args );

        $query = new \WP_Query( $args );

        return $query->get_posts();
    }
}
