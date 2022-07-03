<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

session_start();

require (__DIR__) . "/vendor/autoload.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = explode('/', $uri);
$uri = explode("/",filter_var(trim($_SERVER['REQUEST_URI'],"/")));
$uri[1] = explode("?", $uri[1]);

$controller;

if (isset($uri[1][0]) && file_exists( (__DIR__) ."/controller/".$uri[1][0].".php"))
{
    try 
    {
        $controller = new $uri[1][0]();
    }
    catch (Exception $e) 
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
else
{
    $controller = new Home();
}

$url_components = parse_url($_SERVER['REQUEST_URI']);
try 
{
    if (isset($url_components['query']))
        parse_str($url_components['query'], $params);
}
catch (Exception $e)
{

}

if (isset($params['method']) && method_exists($controller, $params['method']))
{
    
    $method = $params['method'];
    // // $controller->{$method}();
    // call_user_func(array($controller, $method));
    $controller->$method();
    
}
else
{
    $controller->info();
}


?>