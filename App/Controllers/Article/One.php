<?php

namespace App\Controllers\Article;

use \App\Controllers\Controller;
use \App\Models\Article;

class One extends Controller
{
    protected function action()
    {
        $id = $_GET['id'];
        if (empty($id) || !is_numeric($id)) {
            header('Location: /App/templates/error.php');
            exit();
        }

        $article = Article::findById($id);

        if (false === $article) {
            $this->view->display(__DIR__ . '/../../templates/error.php');
            exit();
        }
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}