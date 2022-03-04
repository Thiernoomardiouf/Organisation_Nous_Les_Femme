<?php

require 'Database.php';

class OrganisationsGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom';
		}
		$pdo = Database::connect($order);
		$sql = $pdo->prepare("SELECT * FROM organisation");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$organisations = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$organisations[] = $obj;
		}
		return $organisations;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM organisation WHERE id_organisation = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function insert($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO organisation (nom, coordonnees, ninea, contrat, formation, quotisation, siege, registre, regime, nombre_employe, date_creation, admin_id, ressource_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");		
		$result = $sql->execute(array($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id));
	}

	public function edit($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("UPDATE organisation SET nom = ?, coordonnees = ?, ninea = ?, contrat = ?, formation = ?, quotisation = ?, siege = ?, registre = ?, regime = ?, nombre_employe = ?, date_creation = ?, admin_id = ?, ressource_id = ? WHERE id_organisation = ? LIMIT 1");
		$result = $sql->execute(array($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id, $id));
	}

	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM organisation WHERE id_organisation =?");
		$sql->execute(array($id));
	}

}

?>
