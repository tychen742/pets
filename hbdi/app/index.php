<?php

//require_once "./core/Router.php";
use app\core\Application;


function __autoload($class_name)
{
    if (file_exists('./core/' . $class_name . '.php')) {
        require_once './core/' . $class_name . '.php';
    } elseif (file_exists('Controllers/' . $class_name . '.php')) {
        require_once './Controllers/' . $class_name . '.php';
    }
}

//require_once __DIR__.'/vendor/autoload.php';
//use \app\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return 'hello world';
});
$app->router->get('/contact', function () {
    return 'Contact';
});

//$app->userRouter($router);

$app->run();