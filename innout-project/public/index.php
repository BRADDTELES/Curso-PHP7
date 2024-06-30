<?php 
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(CONTROLLER_PATH . '/loginController.php');
$uri = urldecode(parse_url($_SERVER['SCRIPT_FILENAME'], PHP_URL_PATH));
// $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// $uri = urldecode($_SERVER['REQUEST_URI']);
// echo $uri;
if($uri === '/' || $uri === '' ||  $uri === '/index.php' || $uri == '/Curso-PHP7/innout-project/public/' || $uri == '/Curso-PHP7/innout-project/public/index.php' || $uri == '/innout-project/public/' || $uri == '/innout-project/public/index.php' || $uri == '/innout/public/index.php' || $uri == '/innout/public/' || $uri == '/innout/public/index.php' || $uri == '\xampp\htdocs\Curso-PHP7\innout-project\public\index.php'  || $uri == '/xampp/htdocs/Curso-PHP7/innout-project/public/index.php' || $uri == '\wamp64\www\Curso-PHP7\innout-project\public\index.php' || $uri == '/wamp64/www/Curso-PHP7/innout-project/public/index.php' || $uri == '\MAMP\htdocs\Curso-PHP7\innout-project\public\index.php' || $uri == '/MAMP/htdocs/Curso-PHP7/innout-project/public/index.php' ) {
    $uri = '/day_recordsController.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");