<?php

namespace Models;


class Article extends Model
{

    public $created;
    public $headline;
    public $text;
    public $author;

    public const TABLE = 'news';

}