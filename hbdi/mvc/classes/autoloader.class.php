<?php

//spl_autoload_register('myAutoLoader');

function __autoLoader($class_name)
{
//    $path = "./classes/";
//    $extension = ".php";
//    $className = strtolower($className);
//    $fullPath = $path . $className . $extension;
//
//    if (file_exists($fullPath))
//    if (!file_exists($fullPath)){
//        return false;
//    }
//    error_log("$fullPath");
//    include_once $fullPath;

    if (file_exists('./classes/' . $class_name . 'php')) {
        require_once './classes/' . $class_name . '.php';
    } elseif (file_exists('./Controllers/' . $class_name . 'php')) {
        require_once './Controllers/' . $class_name . '.php';
    }

}

//function spl_autoloader_register($class_name)
//{
//    if (file_exists('./classes/' . $class_name . 'php')) {
//        require_once './classes/' . $class_name . '.php';
//    } elseif (file_exists('Controllers/' . $class_name . 'php')) {
//        require_once './Controllers/' . $class_name . '.php';
//    }
//}