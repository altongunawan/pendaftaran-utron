<?php

class Framework {

    public static function run() {
        self::init();
        self::autoload();
        self::dispatch();
    }

    private static function init() {
        
        define("DS", DIRECTORY_SEPARATOR);
        define("APP_PATH". ROOT . 'application' . DS);
        define("CONFIG_PATH". APP_PATH . "config" . DS);

        $GLOBALS['config'] = include CONFIG_PATH . "config.php";
        
        session_start();

    }

    private static function autoload() {

    }

    private static function dispatch() {

    }
    
}