<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$article = Article::findById($_POST['id']);
$article->delete();

header('Location: /adminPanel.php');