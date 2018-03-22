<?php

require_once __DIR__ . '/boot.php';

$view = new View();

if(isset($_GET['id']))
{

    $newsList = \Models\Article::findOne($_GET['id']);
    $db = new DB;
    $view->add('newslist', $newsList);
    $view->display(__DIR__ . '/templates/editnews.php');
}