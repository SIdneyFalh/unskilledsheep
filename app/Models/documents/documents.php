<?php
class Documents
{
	public function listDocuments($category)
	{
		$req = "SELECT documents.id, login, titre, description, contenu
				FROM documents
				INNER JOIN users ON documents.uid = users.id
				WHERE categorie = :category";
		$lesDocs = $_SESSION['bdd']->query($req, array('category'=>$category));
		return $lesDocs;
	}

	public function getDocument($id, $category)
	{
		$req = "SELECT login, titre, description, contenu, libelle
				FROM documents
				INNER JOIN type ON type.id = documents.tid
				INNER JOIN users ON documents.uid = users.id
				WHERE categorie = :category
				AND documents.id = :id";
		$document = $_SESSION['bdd']->query($req, array('id'=>$id, 'category'=>$category), Bdd::SINGLE_RES);
		return $document;
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

	public function addDoc($titre, $description, $contenu, $category, $type)
	{
		$added = false;
		$login = $_SESSION['login'];
		$req = "SELECT id
				FROM users
				WHERE login = :login";
		$data = $_SESSION['bdd']->query($req ,array('login'=>$login),Bdd::SINGLE_RES);
		$id = $data->id;
		$req = "INSERT INTO documents (titre, description, contenu, categorie, uid, tid)
				VALUES (:titre, :description, :contenu, :category, :uid, :type)";
		$data = $_SESSION['bdd']->exec($req, array('titre'=>$titre, 'description'=>$description, 'contenu'=>$contenu, 'category'=>$category, 'uid'=>$id, 'type'=>$type));
		if(!empty($data))
		{
			$added = true;
		}
		return $added;
	}

	public function listTypes()
	{
		$req = "SELECT id, libelle
				FROM type";
		$lesTypes = $_SESSION['bdd']->query($req);
		return $lesTypes;
	}
}