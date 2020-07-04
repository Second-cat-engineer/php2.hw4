<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Шаг за шагом, Step by step">
    <title> Главная </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/App/templates/style/style.css">
</head>
<body>
<div class="container">
    <!-- Шапка -->
    <div style="text-align: center;">
        <img src="/App/templates/style/logo.jpg" alt="Логотип">
    </div>
    <!-- Полоска меню  -->
    <div class="label-danger padding">
        <ul class="pager menu">
            <li>
                <a href="/">
                    <span class="glyphicon glyphicon-home"></span>
                    <div> Главная страница </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- Основная часть сайта -->
    <div class="row" style="padding-top: 10px">
        <h1 style="text-align: center"> Новости </h1>
        <div class="row" style="padding-top: 10px; text-align: center">
            <?php foreach ($this->articles as $article) { ?>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="/article/one/?id=<?php echo $article->getId() ?>">
                                <h2><?php echo $article->title; ?></h2>
                            </a>
                        </div>
                        <div>
                            <?php echo substr($article->content, 0, 200); ?>
                            ...
                            <a href="/article/one/?id=<?php echo $article->getId() ?>">
                                читать далее
                            </a>
                        </div>
                        <div style="font-size: 15px">
                            <?php if (!empty($article->author)) : ?>
                                Автор статьи: <?php echo $article->author->firstName . ' ' . $article->author->lastName; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Подвал сайта -->
    <div class="row label-danger" style="margin: 0px">
        <!-- Левая колонка -->
        <div class="col-sm-12 col-md-4">
            <!-- Необходимо будет добавить поиск по сайту -->
        </div>

        <!-- Центральная колонка -->
        <div  class="col-sm-12 col-md-4" style="text-align: center">
            <span>© Step by step  </span>
            <div>Почта: StepByStep@mail.ru</div>
        </div>

        <!-- Правая колонка, вход в админ панель -->
        <div  class="col-sm-12 col-md-4" style="text-align: center">
        </div>
    </div>
</div>
</body>
</html>