<?php

class PageController {
    public function home () {
        return new view('home');
    }

    public function about () {
        return new view('about');
    }

    public function contact () {
        return new view('contact');
    }
}