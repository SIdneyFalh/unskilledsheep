<?php
	class Login
	{
		public function ($login, $password)
		{
			$connect = false;
			if(isset($password) && isset($login))
			{
				$req = "SELECT count(id) AS nb 
						FROM users 
						WHERE login = :login
						AND password = :password";
				$data = $_SESSION['bdd']->query($req ,array('login'=>$login, 'password'=>$password),Bdd::SINGLE_RES);
                if (!empty($data->nb))
				{
					$_SESSION['login'] = $login;
					$connect = true;
				}
			}
			return $connect;
				
		}


	}