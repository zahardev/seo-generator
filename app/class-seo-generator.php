<?php

namespace SEO_Generator;

class SEO_Generator {

    public static function init() {
        add_filter( 'pre_update_option_seo_generator_settings', [ self::class, 'regenerate' ] );
    }

    /**
     * @param $settings
     *
     * @return array
     */
    public static function regenerate( $settings ) {
        if ( empty( $settings['regenerate_seo_texts'] ) ) {
            return $settings;
        }

        $settings['regenerate_seo_texts'] = 0;

        $seo_texts = self::get_seo_texts();

        if ( empty( $seo_texts ) ) {
            return $settings;
        }

        $posts = self::get_posts( 'post' );

        foreach ( $posts as $post ) {
            $rand     = rand( 0, count( $seo_texts ) - 1 );
            $seo_text = $seo_texts[ $rand ];
            update_field( Seotext::FIELD_NAME, $seo_text->post_content, $post->ID );
        }

        return $settings;
    }

    /**
     * @return \WP_Post[]
     */
    public static function get_seo_texts() {
        $seo_texts = self::get_posts( Seotext::POST_TYPE );

        return $seo_texts;
    }

    /**
     * @param string $post_type
     *
     * @return \WP_Post[]
     */
    public static function get_posts( $post_type ) {
        $args = [
            'post_type'   => $post_type,
            'post_status' => [ 'publish' ],
        ];

        $query = new \WP_Query( $args );

        return $query->get_posts();
    }
}
