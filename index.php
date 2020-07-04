<?php
require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$module = !empty($parts[1]) ? ucfirst($parts[1]) : 'Index';
$controller = !empty($parts[2]) ? ucfirst($parts[2]) : null;

if ('Admin' === $module) {
    $action = !empty($parts[3]) ? ucfirst($parts[3]) : null;
    $ctrlName = '\App\Controllers\\' . $module . '\\' . $controller . '\\' . $action;
} elseif ('Index' === $module) {
    $ctrlName = '\App\Controllers\\' . $module;
} else {
    $ctrlName = '\App\Controllers\\' . $module . '\\' . $controller;
}
//var_dump($ctrlName); die();

if (!class_exists($ctrlName)) {
    die('страница не найдена!');
}
$ctrl = new $ctrlName();
$ctrl();