<?php 
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
var_dump($uri);
if ($uri === '/' || $uri === '' || $uri === '/index.php' || $uri === '/Curso-PHP7/innout-project/public/index.php') {
    $uri = '/day_records.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");