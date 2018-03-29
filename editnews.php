<?php

require_once __DIR__ . '/boot.php';

$view = new View();

if(isset($_GET['id']))
{

    $news = \Models\Article::findOne($_GET['id']);
    $db = new DB;
    $view->add('news', $news);
    $view->display(__DIR__ . '/templates/editnews.php');
} else
{
    $view->display(__DIR__ . '/templates/404.php');
}