<?php
	class Login
	{
		public function auth($login, $password)
		{
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
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function isOnline($bool)
		{
			if($bool)
			{
				header('Location: /unskilledsheep/public/index.php?page=index.accueil');
				exit;
			}
		}
	}