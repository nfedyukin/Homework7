<?php
require_once __DIR__ . '/boot.php';

$view = new View();
$view->display(__DIR__ . '/templates/addnews.php');