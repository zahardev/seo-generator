<?php

namespace SEO_Generator\Controllers;

use SEO_Generator\Services\SEO_Generator;

class Settings_Controller {

    protected static $options;

    protected static $settings;

    public static function init() {
        self::$settings = include SEOGEN_PLUGIN_DIR . 'app/config/settings.php';

        add_action( 'admin_menu', [ self::class, 'add_admin_menu' ] );
        add_action( 'admin_init', [ self::class, 'settings_init' ] );
        add_filter( 'pre_update_option_seo_generator_settings', [ SEO_Generator::class, 'generate' ] );
    }

    public static function add_admin_menu() {
        add_submenu_page( 'edit.php?post_type=seotext', __( 'SEO Generator Settings', SEOGEN_PLUGIN_BASENAME ), __( 'Settings', SEOGEN_PLUGIN_BASENAME ), 'manage_options', 'seo-generator-settings', [
            self::class,
            'options_page',
        ] );
    }

    public static function settings_init() {

        register_setting( 'seo_generator_settings', 'seo_generator_settings' );

        foreach ( self::settings() as $section_id => $section ) {
            add_settings_section(
                $section_id,
                $section['title'],
                null,
                'seo_generator_settings'
            );

            foreach ( $section['fields'] as $field_id => $field ) {
                add_settings_field(
                    $field_id,
                    $field['title'],
                    [ self::class, 'render_' . $field['type'] ],
                    'seo_generator_settings',
                    $section_id,
                    array_merge( [ 'field_id' => $field_id ], $field )
                );
            }
        }
    }

    public static function settings() {
        return self::$settings;
    }

    public static function render_time( $args ) {
        $id  = $args['field_id'];
        $val = self::get_option( $id, null );
        $val = is_null( $val ) && isset( $args['default'] ) ? $args['default'] : $val;
        ?>
        <input type="time" class="<?php echo $id ?>" name='seo_generator_settings[<?php echo $id ?>]' value="<?php echo $val ?>"/>

        <?php
    }

    public static function render_text( $args ) {
        $id  = $args['field_id'];
        $val = self::get_option( $id, null );
        $val = is_null( $val ) && isset( $args['default'] ) ? $args['default'] : $val;
        ?>
        <input type="text" class="<?php echo $id ?>" name='seo_generator_settings[<?php echo $id ?>]' value="<?php echo $val ?>"/>

        <?php
    }

    public static function render_textarea( $args ) {
        $id   = $args['field_id'];
        $val  = self::get_option( $id, null );
        $val  = is_null( $val ) && isset( $args['default'] ) ? $args['default'] : $val;
        $cols = $args['cols'] ?? 100;
        $rows = $args['rows'] ?? 10;
        ?>
        <textarea name='seo_generator_settings[<?php echo $id ?>]' cols="<?php echo $cols ?>" rows="<?php echo $rows ?>"><?php echo $val ?></textarea>

        <?php
    }


    public static function render_select( $args ) {
        $id      = $args['field_id'];
        $options = $args['options'];

        $val = self::get_option( $id, null );
        $val = is_null( $val ) && isset( $args['default'] ) ? $args['default'] : $val;

        ?>
        <select name='seo_generator_settings[<?php echo $id ?>]'>
            <?php foreach ( $options as $k => $v ) : ?>
                <option value='<?php echo $k ?>' <?php selected( $k, $val ); ?>>
                    <?php echo $v ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }


    public static function render_checkbox( $args ) {
        $id  = $args['field_id'];
        $val = self::get_option( $id, null );
        $val = is_null( $val ) && isset( $args['default'] ) ? $args['default'] : $val;
        ?>

        <input type="checkbox" class="<?php echo $id ?>" name='seo_generator_settings[<?php echo $id ?>]' value="1" <?php checked( $val, '1' ) ?> />

        <?php
    }

    public static function options_page() {
        ?>

        <form action='options.php' method='post'>
            <?php
            settings_fields( 'seo_generator_settings' );
            do_settings_sections( 'seo_generator_settings' );
            submit_button();
            ?>
        </form>
        <?php
    }

    public static function get_option( $option, $default = '' ) {
        $options = self::get_options();

        return isset( $options[ $option ] ) ? $options[ $option ] : $default;
    }

    public static function get( $option, $default = '' ) {
        return self::get_option( $option, $default );
    }

    public static function get_options() {
        if ( empty( self::$options ) ) {
            self::$options = get_option( 'seo_generator_settings', null );
        }

        return self::$options;
    }
}
