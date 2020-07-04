<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Admin;
use \App\Models\Article;

class Delete extends Admin
{
    protected function action()
    {
        $article = Article::findById($_POST['id']);
        $article->delete();

        header('Location: /admin/article/all');
    }
}