<?php
require_once __DIR__ . '/boot.php';

if(isset($_POST['id']))
{
    $article = new \Models\Article();
    $article->id = $_POST['id'];
    $article->created = $_POST['created'];
    $article->headline = $_POST['headline'];
    $article->text = $_POST['text'];
    $article->author = $_POST['author'];
    $article->save();
}
header('Location: /Homework7/index.php');