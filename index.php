<?php
/**
 * Created by Fer Catalano.
*/
require_once( __DIR__ . '/config.php');
require_once( __DIR__ . '/router.php');
require_once( __DIR__ . '/view.php');

$controller = new Router();
$controller->run();