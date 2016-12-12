<?php

class ControllerIndex extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->setView('index');
		$this->setModel('index');
	}


	public function login()
	{
		$errors = false;
		$this->setMethod('login');
		require($this->getModel().$this->getMethod().'.php');
		$login = new Login;
		if(!empty($_POST))
		{
			if($login->connected($_POST['login'], $_POST['password']))
			{
				Auth::redirect();
			}
			else
			{
				$errors = true;
			}
		}
		require($this->getView().$this->getMethod().'.php');

		

	}

	public function accueil()
	{
		echo 'ça marche';
	}


}