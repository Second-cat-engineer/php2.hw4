<?php

namespace App\Controllers;

class Article extends Controller
{
    protected function actionAll()
    {
        $this->view->articles = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/articles.php');
    }

    protected function actionOne()
    {
        $id = $_GET['id'];
        if (empty($id) || !is_numeric($id)) {
            header('Location: /');
            exit();
        }

        $article = \App\Models\Article::findById($id);

        if (false === $article) {
            $this->view->display(__DIR__ . '/../templates/error.php');
            exit();
        }
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../templates/article.php');
    }

    protected function actionLastCount()
    {
        //доделать чтоб можно было передавать число в качестве аргумента!
        $count = 3;
        $this->view->articles = \App\Models\Article::findLastCount($count);
        $this->view->display(__DIR__ . '/../templates/articles.php');
    }
}