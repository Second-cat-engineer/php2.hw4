<?php
require __DIR__ . '/autoload.php';

use App\View;

$view = new View();
$view->display(__DIR__ . '/App/templates/admin/addArticle.php');