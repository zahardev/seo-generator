<?php

namespace SEO_Generator;


class App {

    public static function init() {
        Seotext::init();
        Settings::init();
        ACF_Handler::init();
        SEO_Generator::init();
    }
}
