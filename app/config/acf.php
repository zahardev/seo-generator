<?php

use SEO_Generator\Seotext;

return [
    'key'                   => 'group_6015c3f40593a',
    'title'                 => 'SEO Generator',
    'fields'                => [
        [
            'key'               => 'field_6015c403de995',
            'label'             => 'SEO text',
            'name'              => Seotext::FIELD_NAME,
            'type'              => 'wysiwyg',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'default_value'     => '',
            'tabs'              => 'all',
            'toolbar'           => 'full',
            'media_upload'      => 1,
            'delay'             => 0,
        ],
    ],
    'location'              => [
        [
            [
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'post',
            ],
        ],
    ],
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen'        => '',
    'active'                => true,
    'description'           => '',
];
