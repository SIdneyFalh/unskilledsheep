<?php

class Controller
{
	protected $view;
	protected $model;

	public function setView($view)
	{
		$this->$view = ROOT.'/app/Views/'.$view.'/';
	}
}
?>