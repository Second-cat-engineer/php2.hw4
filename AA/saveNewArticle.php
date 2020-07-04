<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$article = new Article();
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$res = $article->save();

header('Location: /adminPanel.php');
