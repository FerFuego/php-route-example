<?php

class view {

    private $view;

    public function __construct($view)
    {
        $this->view = $view;
        $this->render();
    }

    public function render()
    {
        require_once( __DIR__ . '/views/' . $this->view . '.php');
    }
}