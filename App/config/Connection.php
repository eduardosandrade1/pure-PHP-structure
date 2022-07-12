<?php

namespace App\Config;

class Connection {
    private static $instance;

    public static function getCon() {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO("mysql:host=localhost;dbname=suporte", 'root', 'usbw');
        }
        return self::$instance;
    }
}