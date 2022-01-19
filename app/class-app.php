<?php

namespace SEO_Generator;


use SEO_Generator\Controllers\Frontend_Controller;
use SEO_Generator\Controllers\Meta_Box_Controller;
use SEO_Generator\Controllers\Post_Type_Controller;
use SEO_Generator\Controllers\SEO_Generator_Controller;
use SEO_Generator\Controllers\Settings_Controller;

class App {

    public static function init() {
        Post_Type_Controller::init();
        Settings_Controller::init();
        Meta_Box_Controller::init();
        SEO_Generator_Controller::init();
        Frontend_Controller::init();
    }
}
