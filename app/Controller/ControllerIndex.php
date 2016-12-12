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
		$this->setMethod('login');
		require($this->getModel().$this->getMethod().'.php');
		require($this->getView().$this->getMethod().'.php');
		$login = new Login;
		if(!empty($_POST))
		{
				if(isOnline($_SESSION['login']))
					$login->isOnline($login->auth($_POST['login'], $_POST['password']));

		}

		

	}

	public function accueil()
	{
		echo 'ça marche';
	}


}