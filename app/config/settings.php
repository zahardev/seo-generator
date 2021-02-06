<?php

return [
    'seo_generator_settings' => [
        'title'  => __( 'SEO Generator Settings', SEO_GEN_PLUGIN_BASENAME ),
        'fields' => [
            'seo_text_position'    => [
                'title'   => __( 'Where do you want to show SEO text?', SEO_GEN_PLUGIN_BASENAME ),
                'type'    => 'select',
                'options' => [
                    'before_content' => 'Before content',
                    'after_content'  => 'After content',
                    'shortcode'      => 'With shortcode',
                    'disable'        => 'Nowhere',
                ],
                'default' => 'after_content',
            ],
            'regenerate_seo_texts' => [
                'title' => __( 'Regenerate SEO texts', SEO_GEN_PLUGIN_BASENAME ),
                'type'  => 'checkbox',
            ],
        ],
    ],
];
