<?php

class Controller
{
	protected $view;
	protected $model;
	protected $method;

	public function setView($view)
	{
		$this->$view = $view;
	}

	public function setModel($model)
	{
		$this->$model = $model;
	}

	public function setmethod($method)
	{
		$this->$method = $method;
	}

	public function getView()
	{
		return $this->$view;
	}

	public function getModel()
	{
		return $this->$model;
	}

	public function getMethod()
	{
		return $this->$method;
	}
}
?>