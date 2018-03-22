<?php


class Config
{
    protected $config = [];

    public function __construct($path)
    {
        $lines = file($path, FILE_IGNORE_NEW_LINES);

        foreach($lines as $line){
            [$k,$v] = explode('|', $line);
            $this->config[$k] = $v;
        }
    }

    public function getParamValue(string $paramName)
    {
        return $this->config[$paramName];
    }
}