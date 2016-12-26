<?php
	class Login
	{
		public function connected($login, $password)
		{
			$connect = false;
			if(isset($password) && isset($login))
			{
				$password = Secu::hashed($login.$password);
				$req = "SELECT count(id) AS nb 
						FROM users 
						WHERE login = :login
						AND password = :password
						AND activate = 1";
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