<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$article = Article::findById($_POST['id']);
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->save();

header('Location: /adminPanel.php');
