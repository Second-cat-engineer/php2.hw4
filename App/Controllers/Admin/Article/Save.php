<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Admin;
use \App\Models\Article;

class Save extends Admin
{
    protected function action()
    {
        if (empty($_POST['id'])) {
            $article = new Article();
        } else {
            $article = Article::findById($_POST['id']);
        }

        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->save();

        header('Location: /admin/article/all');
    }
}