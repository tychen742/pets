<?php

namespace app\core;

/**
 * Class Router
 *
 * @author Tsangyao Chen <tychen742@gmail.com>
 * @package app\core
 */
class Router
{

    public  $routes = array();

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
        exit;
    }

}