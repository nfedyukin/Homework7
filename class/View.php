<?php


class View
{
    protected $data = [];

    public function add($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template): string
    {
        ob_start();
        include $template;
        $out = ob_get_contents();
        ob_end_clean();

        return $out;
    }

}