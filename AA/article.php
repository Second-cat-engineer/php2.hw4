<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;
use App\View;

$id = $_GET['id'];

if (empty($id) || !is_numeric($id)) {
    header('Location: /index.php');
    exit();
}

$article = Article::findById($id);

if (false === $article) {
    echo 'Страница не найдена!';
    exit();
}

$view = new View();
$view->article = $article;
$view->display(__DIR__ . '/App/templates/article.php');