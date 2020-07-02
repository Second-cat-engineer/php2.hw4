<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->articles = Article::findLastCount(3);
$view->display(__DIR__ . '/App/templates/articles.php');