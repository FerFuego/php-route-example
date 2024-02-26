<?php

$forlderPath = dirname($_SERVER['SCRIPT_NAME']);
$urlPath     = $_SERVER['REQUEST_URI'];
$urlBase     = substr($urlPath, strlen($forlderPath));

define('BASE_URL', $urlBase);