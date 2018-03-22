<?php

require_once __DIR__ . '/boot.php';

$newsList = \Models\Article::findAll();

$view = new View();
$db = new DB;
$view->add('newslist', $newsList);


$view->display(__DIR__ . '/templates/index.php');