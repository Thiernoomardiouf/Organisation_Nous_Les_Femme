<?php

//require 'Database.php';

class UtilisateursGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom';
		}
		$pdo = Database::connect($order);
		$sql = $pdo->prepare("SELECT * FROM utilisateur");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$utilisateurs = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$utilisateurs[] = $obj;
		}
		return $utilisateurs;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM utilisateur WHERE id_utilisa = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function insert($nom, $prenom, $adresse, $mot_de_passe, $logine)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, adresse, mot_de_passe, logine) VALUES(?, ?, ?, ?, ?)");		
		$result = $sql->execute(array($nom, $prenom, $adresse, $mot_de_passe, $logine));
	}

	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM utilisateur WHERE id_utilisa =?");
		$sql->execute(array($id));
	}

	public function login($mot_de_passe, $logine)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT id_utilisa FROM utilisateur WHERE mot_de_passe = ? AND logine = ? limit 1 ");
		$sql->execute(array($mot_de_passe, $logine));
		$result = $sql->fetchAll();
		return $result;
	}

}

?>
