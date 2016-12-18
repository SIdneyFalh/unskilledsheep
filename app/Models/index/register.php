<?php
	class Register
	{
		public function regist($login, $password)
		{
			$registered = false;
			if(isset($password) && isset($login))
			{
				$password = Secu::hashed($login.$password);
				$req = "SELECT count(id) AS nb 
						FROM users 
						WHERE login = :login";
				$data = $_SESSION['bdd']->query($req ,array('login'=>$login),Bdd::SINGLE_RES);
                if (empty($data->nb))
				{
					$req = "INSERT INTO users (login, password)
							VALUES (:login, :password)";
					$data = $_SESSION['bdd']->exec($req ,array('login'=>$login, 'password'=>$password));
					if(!empty($data))
					{
						$registered = true;
					}
				}
			}
			return $registered;
		}


				
	}