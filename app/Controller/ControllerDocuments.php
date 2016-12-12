<?php

class ControllerDocuments extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->setView('documents');
		$this->setModel('documents');
	}

	public function exploits()
	{
		$category = 'exploit';
		$this->setMethod('documents');
		require($this->getModel().$this->getMethod().'.php');
		$documents = new Documents;
		$lesDocs = $documents->listDocuments($category);
		require($this->getView().$this->getMethod().'.php');
	}

	public function exploit($parametre)
	{
		$category = 'exploit';
		$this->setMethod('documents');
		require($this->getModel().$this->getMethod().'.php');
		$documents = new Documents;
		$unExploit = $documents->getDocument($parametre, $category);
		if($documents->existeDoc($parametre, $category))
		{
			$this->setMethod('exploit');
			require($this->getView().$this->getMethod().'.php');
		}
		else
		{
			$this->setMethod('nodoc');
			require($this->getView().$this->getMethod().'.php');
		}
	}
}