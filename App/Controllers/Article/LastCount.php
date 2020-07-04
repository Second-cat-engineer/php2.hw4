<?php

namespace App\Controllers\Article;

use \App\Controllers\Controller;
use \App\Models\Article;

class LastCount extends Controller
{
    protected function action()
    {
        //доделать чтоб можно было передавать число в качестве аргумента!
        $count = 3;
        $this->view->articles = Article::findLastCount($count);
        $this->view->display(__DIR__ . '/../../templates/articles.php');
    }
}