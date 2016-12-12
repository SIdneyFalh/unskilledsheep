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

    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

	public static function autoload($class)
    {
        session_start();
        require ROOT . '/app/Controller/'.$class.'.php';
    }

}