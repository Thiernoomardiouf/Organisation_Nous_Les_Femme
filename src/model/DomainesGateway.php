<?php

//require 'Database.php';

class DomainesGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom_dommaine';
		}
		$pdo = Database::connect($order);
		$sql = $pdo->prepare("SELECT * FROM dommaine");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$domaines = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$domaines[] = $obj;
		}
		return $domaines;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM dommaine WHERE organ_id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function insert($nom_dommaine, $numero)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO dommaine (nom_dommaine, numero) VALUES(?, ?)");		
		$result = $sql->execute(array($nom_dommaine, $numero));
	}


	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM dommaine WHERE id_dommaine =?");
		$sql->execute(array($id));
	}

}

?>
