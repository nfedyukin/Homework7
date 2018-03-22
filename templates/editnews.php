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
    <title>Изменение новости <?php echo $newsList->id ?></title>
</head>
<body>
<h2>Изменение новости <?php echo $newsList->id ?></h2>
<div style="width: 500px">
    <form style="border: 1px solid black" method="post" action="/Homework7/updatenews.php">
        <input type="hidden" name="id" value="<?php echo $newsList->id ?>">
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="headline"  rows="3"><?php echo $newsList->headline ?></textarea><br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="created"  rows="1"><?php echo $newsList->created ?></textarea><br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="text"  rows="5"><?php echo $newsList->text ?></textarea><br>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="author"  rows="3"><?php echo $newsList->author ?></textarea><br>
        <button type="submit" style="margin: 0px 15px 15px 15px">Подтвердить изменения</button><br>
    </form>
</div>

</body>
</html>