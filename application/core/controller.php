<?php

class Controller {
    
    public function view($view, $data = []) {
        require_once '../application/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../application/models/' . $model . '.php';
        return new $model;
    }

    public function redirect($controller, $method = "index", $args = array())
    { 
        $location = BASE_URL . "/" . $controller . "/" . $method . "/" . implode("/",$args);
        header("Location: " . $location);
        exit;
    }
}