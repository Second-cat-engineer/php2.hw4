<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->article = Article::findById($_POST['id']);
$view->display(__DIR__ . '/App/templates/admin/editArticle.php');