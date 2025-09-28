<?php

namespace app\core;

/**
 * Class Application
 * @author Tsangyao Chen <tychen742@gmail.com>
 * @package app\core
 *
 */
//require_once "./Router.php";
class Application
{
//    public Router $router;
    public $router = array();

    public function __construct()
    {
        $this->router = new Router();
    }


    public function run()
    {
        $this->router->resolve();
    }

}