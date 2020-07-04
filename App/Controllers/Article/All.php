<?php

namespace App\Controllers\Article;

use \App\Controllers\Controller;
use \App\Models\Article;

class All extends Controller
{
    protected function action()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/articles.php');
    }
}