<?php

class Router {

    private $controller;
    private $method;

    public function __construct() {
        $this->matchRoute();
    }

    public function matchRoute () {
        $url = explode('/', BASE_URL);

        $this->controller = !empty($url[1]) ? $url[1] : 'Page';
        $this->method = !empty($url[2]) ? $url[2] : 'home';

        $this->controller = $this->controller . 'Controller';
    }

    public function getController () {
        require_once( __DIR__ . '/controllers/' . $this->controller . '.php');
    }

    public function run () {
        // Get the controller
        $this->getController();
        // Instantiate the controller
        $controller = new $this->controller(); // Ej: new PageController
        $method = $this->method;
        // Call the method
        $controller->$method(); // Ej: PageController->home()
    }
}