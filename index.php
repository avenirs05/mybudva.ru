<?php

// if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
//     $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//     header("HTTP/1.1 301 Moved Permanently");
//     header("Location: $redirect");
// }

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/Debugger.php');


// Вызов Router
$router = new Router();
$router->run();