<?php

namespace App\Controllers;

use App\Models\Article;

class Index extends Controller
{
    protected function action()
    {
        $this->view->articles = Article::findLastCount(3);
        $this->view->display(__DIR__ . '/../templates/articles.php');
    }
}