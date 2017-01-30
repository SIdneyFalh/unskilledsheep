<?php

class ControllerDocuments extends Controller
{
	private $category;
	public function __construct()
	{
		parent::__construct();
		$this->setView('documents');
		$this->setModel('documents');
	}

	public function exploits()
	{
		$this->setCategory('exploit');
		$this->setMethod('documents');
		require($this->getModel().$this->getMethod().'.php');
		$documents = new Documents;
		$lesDocs = $documents->listDocuments($this->getCategory());
		require($this->getView().$this->getMethod().'.php');
	}

	public function exploit($id)
	{
		$this->setCategory('exploit');
		$this->setMethod('documents');
		require($this->getModel().$this->getMethod().'.php');
		$documents = new Documents;
		$unExploit = $documents->getDocument($id, $this->getCategory());
		if($documents->existeDoc($id, $this->getCategory()))
		{
			$this->setMethod('exploit');
		}
		else
		{
			$this->setMethod('nodoc');
		}
		require($this->getView().$this->getMethod().'.php');
	}

	public function add()
	{
		$errors = false;
		$this->setCategory('exploit');
		$this->setMethod('documents');
		require($this->getModel().$this->getMethod().'.php');
		$documents = new Documents;
		$lesTypes = $documents->listTypes();
		if(!empty($_POST))
		{
			if($_POST['categorie'] === 'exploit')
			{
					if (Secu::verifToken($_POST['csrf']))
					{
						if(!$documents->addDoc($_POST['titre'], $_POST['description'], $_POST['contenu'], $_POST['categorie'], $_POST['type']))
						{
							$errors = true;
						}
					}
					else
					{
						$errors = true;
					}
			}
			else
			{
				$errors = true;
			}
		}
		$tk = Secu::token();
		$this->setMethod('add');
		require($this->getView().$this->getMethod().'.php');
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategory($category)
	{
		$this->category = $category;
	}
}