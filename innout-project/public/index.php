<?php 
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(CONTROLLER_PATH . '/loginController.php');
$uri = urldecode($_SERVER['REQUEST_URI']);

if($uri === '/' || $uri === '' ||  $uri === '/index.php' ||  $uri == '/innout-project/public/index.php' || $uri == '\\' || $uri == '//innout-project//public//index.php') {
    $uri = '/loginController.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");