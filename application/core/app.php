<?php

class App {
    
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {

        $url = $this->parseURL();
        var_dump($url);
        if( file_exists('../application/controllers/' . $url[0] . '.php' )) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../application/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}