<?php
class Auth
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

	public static function isOnline()
	{
		$online = true;
		if(empty($_SESSION['login']))
		{
			$online = false;
		}
		return $online;
	}

	public static function redirect($action)
	{
		header('Location: /unskilledsheep/public/index.php?page=index.'.$action);
		exit;
	}

	public static function destroy()
	{
		session_destroy();
	}
}