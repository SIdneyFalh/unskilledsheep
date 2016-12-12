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
		if(!empty($_POST))
		{
			$login = new Login;
			var_dump($login->auth($_POST['login'], $_POST['password']));
		}

		

	}


}