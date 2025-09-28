<?php

//include_once "Controller.php";
class AboutUs extends Controller
{
    public static function doSomething()
    {
        print_r(self::query("SELECT * FROM user WHERE email = ?", ['tychen742@gmail.com']));
    }
}