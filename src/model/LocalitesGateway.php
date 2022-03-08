<?php

//require 'Database.php';

class LocalitesGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom';
		}
		$pdo = Database::connect($order);
		$sql = $pdo->prepare("SELECT * FROM quartier");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$quartiers = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$quartiers[] = $obj;
		}
		return $quartiers;
	}

	public function selectByIdQuartier($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM quartier WHERE id_quartier = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function selectByIdCommune($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM commune WHERE id_commune IN (SELECT commune_id FROM quartier WHERE id_quartier = ?)");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

    public function selectByIdDepartement($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM departement WHERE id_departement IN (SELECT departement_id FROM commune WHERE id_commune IN (SELECT commune_id FROM quartier WHERE id_quartier = ?))");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

    public function selectByIdRegion($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM `region` WHERE `id_region` IN (SELECT region_id FROM `departement` WHERE `id_departement` IN (SELECT departement_id FROM `commune` WHERE `id_commune` IN (SELECT commune_id FROM `quartier` WHERE id_quartier=?)));");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}  
	
}

?>
