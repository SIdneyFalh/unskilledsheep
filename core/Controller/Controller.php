<?php

class Controller
{
	private $view;
	private $model;
	private $method;

	public function __construct()
	{
	}

	public function setView($view)
	{
		$this->view = ROOT.'/app/Views/'.$view.'/';
	}

	public function setModel($model)
	{
		$this->model = ROOT.'/app/Models/'.$model.'/';
	}

	public function setmethod($method)
	{
		$this->method = $method;
	}

	public function getView()
	{
		return $this->view;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function getMethod()
	{
		return $this->method;
	}
}
?>