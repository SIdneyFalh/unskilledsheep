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

	public static function token()
	{
		$token = uniqid(rand(), true);
		$_SESSION['token'] = $token;
		$_SESSION['token_time'] = time();
		return $token;
	}

	public static function verifToken($token)
	{
		$result = false;
		if ($token === $_SESSION['token'])
		{
			$oldTime = time() - (15*60);
			if($_SESSION['token_time'] >= $oldTime)
			{
				$result = true;
			}
		}
		return $result;
	}

	public static function verifReferer($ref)
	{
		$result = false;
		if ($_SERVER['HTTP_REFERER'] === $ref)
		{
			$result = true;
		}
		return $result;
	}
}
