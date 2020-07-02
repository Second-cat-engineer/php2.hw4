<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Шаг за шагом, Step by step">
    <title> Новость </title>
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
                <a href="/index.php">
                    <span class="glyphicon glyphicon-home"></span>
                    <div> Главная страница </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- Основная часть сайта -->
    <div class="row" style="padding-top: 10px; text-align: center">
        <div class="row" style="padding-top: 10px">
            <div class="thumbnail">
                <div class="caption">
                    <h2><?php echo $this->article->title; ?></h2>
                </div>
                <div style="text-align: left">
                    <?php echo $this->article->content; ?>
                </div>
                <div style="font-size: 15px">
                    <?php if (!empty($this->article->author)) : ?>
                        Автор статьи: <?php echo $this->article->author->firstName . ' ' . $this->article->author->lastName; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Подвал сайта -->
    <div class="row label-danger" style="margin: 0px">
        <!-- Левая колонка -->
        <div class="col-sm-12 col-md-4">
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