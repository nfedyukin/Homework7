<?php

require_once __DIR__ . '/boot.php';

if(isset($_GET['id'])) {
    $article = new \Models\Article();
    $article->id = $_GET['id'];
    $article->delete();
}
header('Location: /Homework7/index.php');

