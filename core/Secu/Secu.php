<?php
class Secu
{
	private static $instance;

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new Auth();
		}
		return self::$instance;
	}

	public static function xss($str)
	{
		return htmlentities($str, ENT_QUOTES);
	}

	public static function hashed($str)
	{
		return hash('sha512', $str);
	}
}