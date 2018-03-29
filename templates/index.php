<?php
$newsList = $this->data['newslist'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа №7</title>
</head>
<body>
<h1>Новости</h1>


    <?php
    foreach ($newsList as $news)
    {
        ?><b><?php echo $news->headline; ?></b><br>
        <?php echo mb_strimwidth( $news->text, 0, 60, "..." ); ?><br><hr>
        <?php
    }
    ?><br>

<i><a href="/Homework7/admin.php">Администратоивная панель</a></i>




</body>
</html>