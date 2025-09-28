<?php
//include_once "./Views/AboutUs.php";
//include_once "./Views/ContactUs.php";
class Controller extends Database
{

    public static function CreateView($viewName)
    {
        require_once("./Views/$viewName.php");
        static::doSomething();
    }
}