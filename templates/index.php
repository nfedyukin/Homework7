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
<h1>Административная панель</h1>

<table border="width=1px">
    <?php
    foreach ($newsList as $news)
    {
        ?>
        <tr><?php
            ?><td><?php echo $news->id; ?></td><?php
            ?><td><?php echo $news->headline; ?></td><?php
            ?><td>
                <a href = /Homework7/editnews.php?id=<?php echo $news->id ?>> Изменить </a>
            </td><?php
            ?><td>
                <a href = /Homework7/delnews.php?id=<?php echo $news->id ?>> Удалить </a>
            </td><?php
        ?></tr><?php
    }
    ?>
</table>
<br>
<a href="/Homework7/addnews.php">Добавить новость</a>

</body>
</html>