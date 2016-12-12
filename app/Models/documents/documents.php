<?php
class Documents
{
	public function listDocuments($category)
	{
		$req = "SELECT id, titre, description, contenu
				FROM documents
				WHERE categorie = :category";
		$lesDocs = $_SESSION['bdd']->query($req, array('category'=>$category));
		return $lesDocs;
	}

	public function getDocument($id, $category)
	{
		$req = "SELECT id, titre, description, contenu
				FROM documents
				WHERE categorie = :category
				AND id = :id";
		$exploit = $_SESSION['bdd']->query($req, array('id'=>$id, 'category'=>$category), Bdd::SINGLE_RES);
	}

	public function existeDoc($id, $category)
	{
		$req = "SELECT count(id) as nb
				FROM documents
				WHERE id = :id
				AND categorie = :category";
		$data = $_SESSION['bdd']->query($req ,array('id'=>$id, 'category'=>$category),Bdd::SINGLE_RES);
		return !empty($data->nb);
	}
}