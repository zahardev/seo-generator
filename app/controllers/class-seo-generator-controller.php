<?php

namespace SEO_Generator\Controllers;

use SEO_Generator\Services\SEO_Generator;

class SEO_Generator_Controller {

    public static function init() {
        add_filter( 'pre_update_option_seo_generator_settings', [ SEO_Generator::class, 'generate' ] );
    }
}
