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
			Auth::redirect('accueil');
		}
		if(!empty($_POST))
		{
			if($login->connected($_POST['login'], $_POST['password']))
			{
				Auth::redirect('accueil');
			}
			else
			{
				$errors = true;
			}

		}
		require($this->getView().$this->getMethod().'.php');
	}

	public function register()
	{
		$this->setMethod('register');
		require($this->getModel().$this->getMethod().'.php');
		$register = new Register;
		if(Auth::isOnline())
		{
			Auth::redirect('accueil');
		}
		if(!empty($_POST))
		{
			if($register->regist($_POST['login'], $_POST['password']))
			{
				Auth::redirect('accueil');
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
		$this->setMethod('accueil');
		require($this->getView().$this->getMethod().'.php');
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