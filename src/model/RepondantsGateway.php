<?php

//require 'Database.php';

class RepondantsGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom';
		}
		$pdo = Database::connect($order);
		$sql = $pdo->prepare("SELECT * FROM repondant");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$repondants = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$repondants[] = $obj;
		}
		return $repondants;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM repondant WHERE organ_id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function insert($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO repondant (nomRepondant, prenom, fonction, telephone, courriel, organ_id) VALUES(?, ?, ?, ?, ?, ?)");		
		$result = $sql->execute(array($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id));
	}


	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM repondant WHERE organ_id =?");
		$sql->execute(array($id));
	}

}

?>
