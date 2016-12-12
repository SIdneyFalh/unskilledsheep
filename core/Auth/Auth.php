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

	public function isOnline()
	{
		$online = true;
		if(empty($_SESSION['login']))
		{
			$online = false;
		}
		return $online;
	}

	public function redirect()
	{
		header('Location: /unskilledsheep/public/index.php?page=index.accueil');
		exit;
	}
}