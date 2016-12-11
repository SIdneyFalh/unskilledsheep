<?php
class App
{
	private static $instance;
	
	public static function getInstance()
	{
        if(is_null(self::$_instance))
        {
           	self::$_instance = new App();
        }
        return self::$_instance;
    }

	public static function load()
    {
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }
}