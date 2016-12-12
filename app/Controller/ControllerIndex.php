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
		if(Auth::isOnline())
		{
			Auth::redirect();
		}
		if(!empty($_POST))
		{
			if(!$login->connected($_POST['login'], $_POST['password']))
			{
				$errors = true;
			}
		}
		require($this->getView().$this->getMethod().'.php');

		

	}

	public function accueil()
	{
		$this->setMethod('accueil');
	}

	public function disconnect()
	{
		$this->setMethod('disconnect');
		if(Auth::isOnline())
		{
			Auth::destroy();
		}
		require($this->getView().$this->getMethod().'.php');
	}


}