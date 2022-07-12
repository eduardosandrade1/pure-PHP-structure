<?php

namespace App\Config;

use BadMethodCallException;

class Route {
    public $controller;


    
    public static function get($route, $controller, $function)
    {

        if (strtoupper($_SERVER['REQUEST_METHOD']) == "GET") {

            if ($route ==  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                $pathController = 'App\\Controllers\\' . $controller . '.php';

                if (file_exists($pathController)) {
                    require 'App\\Controllers\\' . $controller. ".php";
                    return $controller::$function();
                }
               
            }

        }
    }


    public static function post($route, $controller, $function)
    {
        if (strtoupper($_SERVER['REQUEST_METHOD']) == "POST") {
            if ($route ==  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                $pathController = __DIR__ . '/App/Controllers/' . $controller . '.php';
                if (file_exists($pathController)) {
                    require $pathController;
                    $function();

                }
           
            }
        }
    }
}