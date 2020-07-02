<?php

namespace App;

class View implements \Countable, \Iterator
{
    use Magical;

    protected $data = [];

    /**
     * @param $template
     */
    public function display($template)
    {
        //include $template;
        echo $this->render($template);
    }

    /**
     * @param $template
     * @return false|string
     */
    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    // Метод должен вернуть значение текущего элемента
    public function current()
    {
        return current($this->data);
    }

    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next()
    {
        next($this->data);
    }

    // Метод должен вернуть ключ текущего элемента
    public function key()
    {
        return key($this->data);
    }

    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid()
    {
        return null !== key($this->data);
    }

    // Метод должен поставить "указатель" на первый элемент
    public function rewind()
    {
        reset($this->data);
    }
}