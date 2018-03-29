<?php
$news = $this->data['news'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменение новости <?php echo $news->id ?></title>
</head>
<body>
<h2>Изменение новости <?php echo $news->id ?></h2>
<div style="width: 500px">
    <form style="border: 1px solid black" method="post" action="/Homework7/updatenews.php">
        <input type="hidden" name="id" value="<?php echo $news->id ?>">
        Заголовок:<br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="headline"  rows="3"><?php echo $news->headline ?></textarea><br>
        Дата:<br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="created"  rows="1"><?php echo $news->created ?></textarea><br>
        Текст новости:<br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="text"  rows="5"><?php echo $news->text ?></textarea><br>
        Автор:<br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="author"  rows="3"><?php echo $news->author ?></textarea><br>
        <button type="submit" style="margin: 0px 15px 15px 15px">Подтвердить изменения</button><br>
    </form>
</div>

</body>
</html>