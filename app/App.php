<?php
class App
{
    private static $instance;

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new App();
        }
        return self::$instance;
    }

    public static function load($class)
    {
        require ROOT . '/app/Controller/'.$class.'.php';
    }
}