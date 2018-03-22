<?php

function __autoload(string $className){

    require __DIR__ . '/class/'
        . str_replace('\\', '/',$className)
        . '.php';
}

