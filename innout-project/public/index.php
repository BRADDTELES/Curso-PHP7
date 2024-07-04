<?php 
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// $uri = urldecode(parse_url($_SERVER['SCRIPT_FILENAME'], PHP_URL_PATH));
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// echo $uri . '<br>';
if ($uri === '/' || 
    $uri === '' ||  
    $uri === '/index.php' ||  
    $uri === '/public/index.php' || 
    $uri === '/public/login.php' || 
    $uri === '/Curso-PHP7/innout-project/public/' || 
    $uri === '/Curso-PHP7/innout-project/public/index.php' || 
    $uri === '/innout-project/public/' || 
    $uri === '/innout-project/public/index.php' || 
    $uri === '/innout/public/index.php' || 
    $uri === '/innout/public/' || 
    $uri === '/innout/public/index.php' || 
    $uri === '\xampp\htdocs\Curso-PHP7\innout-project\public\index.php'  || 
    $uri === '/xampp/htdocs/Curso-PHP7/innout-project/public/index.php' || 
    $uri === '\wamp64\www\Curso-PHP7\innout-project\public\index.php' || 
    $uri === '/wamp64/www/Curso-PHP7/innout-project/public/index.php' || 
    $uri === '\MAMP\htdocs\Curso-PHP7\innout-project\public\index.php' || 
    $uri === '/MAMP/htdocs/Curso-PHP7/innout-project/public/index.php' || 
    $uri === '/MAMP/htdocs/Curso-PHP7/innout-project/public/login.php' || 
    $uri === '/home/cobranca1/Downloads/nova pasta/Web/Curso-PHP7/innout-project/public/index.php') 
{
    $uri = '/day_records.php';
    // $uri = '/login.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");

// ||  $uri === '/login.php' ||  $uri === '/public/index.php' || $uri == '/Curso-PHP7/innout-project/public/' || $uri == '/Curso-PHP7/innout-project/public/index.php' || $uri == '/innout-project/public/' || $uri == '/innout-project/public/index.php' || $uri == '/innout/public/index.php' || $uri == '/innout/public/' || $uri == '/innout/public/index.php' || $uri == '\xampp\htdocs\Curso-PHP7\innout-project\public\index.php'  || $uri == '/xampp/htdocs/Curso-PHP7/innout-project/public/index.php' || $uri == '\wamp64\www\Curso-PHP7\innout-project\public\index.php' || $uri == '/wamp64/www/Curso-PHP7/innout-project/public/index.php' || $uri == '\MAMP\htdocs\Curso-PHP7\innout-project\public\index.php' || $uri == '/MAMP/htdocs/Curso-PHP7/innout-project/public/index.php' || $uri == '/MAMP/htdocs/Curso-PHP7/innout-project/public/login.php' || $uri == '/home/cobranca1/Downloads/nova pasta/Web/Curso-PHP7/innout-project/public/index.php' 