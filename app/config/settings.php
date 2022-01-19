<?php

return [
    'seo_generator_settings' => [
        'title'  => __( 'SEO Generator Settings', SEOGEN_PLUGIN_BASENAME ),
        'fields' => [
            'seo_text_position'    => [
                'title'   => __( 'Where do you want to show SEO text?', SEOGEN_PLUGIN_BASENAME ),
                'type'    => 'select',
                'options' => [
                    'before_content' => 'Before content',
                    'after_content'  => 'After content',
                    'shortcode'      => 'With shortcode',
                    'disable'        => 'Nowhere',
                ],
                'default' => 'after_content',
            ],
            'generate_seo_texts' => [
                'title' => __( 'Generate SEO texts', SEOGEN_PLUGIN_BASENAME ),
                'type'  => 'checkbox',
            ],
            'overwrite_previous_seo_texts' => [
                'title' => __( 'Overwrite previously generated SEO texts', SEOGEN_PLUGIN_BASENAME ),
                'type'  => 'checkbox',
            ],
        ],
    ],
];
