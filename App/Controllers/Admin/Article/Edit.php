<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Admin;
use \App\Models\Article;

class Edit extends Admin
{
    protected function action()
    {
        $this->view->article = Article::findById($_POST['id']);
        $this->view->display(__DIR__ . '/../../../templates/admin/editArticle.php');
    }
}