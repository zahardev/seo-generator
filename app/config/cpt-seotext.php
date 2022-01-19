<?php

$labels = [
    'name'               => _x( 'SEO Texts', 'Post Type General Name', SEOGEN_PLUGIN_BASENAME ),
    'singular_name'      => _x( 'SEO Text', 'Post Type Singular Name', SEOGEN_PLUGIN_BASENAME ),
    'menu_name'          => __( 'SEO Texts', SEOGEN_PLUGIN_BASENAME ),
    'parent_item_colon'  => __( 'Parent SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'all_items'          => __( 'All SEO Texts', SEOGEN_PLUGIN_BASENAME ),
    'view_item'          => __( 'View SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'add_new_item'       => __( 'Add New SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'add_new'            => __( 'Add New', SEOGEN_PLUGIN_BASENAME ),
    'edit_item'          => __( 'Edit SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'update_item'        => __( 'Update SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'search_items'       => __( 'Search SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'not_found'          => __( 'Not Found', SEOGEN_PLUGIN_BASENAME ),
    'not_found_in_trash' => __( 'Not found in Trash', SEOGEN_PLUGIN_BASENAME ),
];


return [
    'label'               => __( 'SEO Text', SEOGEN_PLUGIN_BASENAME ),
    'description'         => __( 'SEO Text news and reviews', SEOGEN_PLUGIN_BASENAME ),
    'labels'              => $labels,
    'supports'            => [ 'title', 'editor', 'author', 'revisions' ],
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest'        => false,
];
