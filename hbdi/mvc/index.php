

<?php
//include_once "./classes/autoloader.class.php";

require_once('Routes.php');

//echo $_GET['url'];

function __autoload($class_name)
{
    if (file_exists('./classes/' . $class_name . '.php')) {
        require_once './classes/' . $class_name . '.php';
    } elseif (file_exists('Controllers/' . $class_name . '.php')) {
        require_once './Controllers/' . $class_name . '.php';
    }
}