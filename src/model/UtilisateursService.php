<?php

require_once 'UtilisateursGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class UtilisateursService extends UtilisateursGateway
{

	private $utilisateursGateway = null;

	public function __construct()
	{
		$this->organisationsGateway = new OrganisationsGateway();
	}

	public function getAllOrganisations($order)
	{
		try
		{
			self::connect();
			$result = $this->organisationsGateway->selectAll($order);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
	}

	public function getOrganisation($id)
	{
		try
		{
			self::connect();
			$result = $this->organisationsGateway->selectById($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->organisationsGateway->selectById($id);
	}

	private function validateOrganisationParams($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation)
	{
		$errors = array();

		if ( !isset($nom) || empty($nom) ) { 
		    $errors[] = 'Le non est invailde'; 
		}
		if ( !isset($coordonnees) || empty($coordonnees) ) { 
		    $errors[] = 'Les coordonnees sont invalides'; 
		}
		if ( !isset($ninea) || empty($ninea) ) { 
		    $errors[] = 'Le ninea est invalide'; 
		}
		if ( !isset($contrat) || empty($contrat) ) { 
		    $errors[] = 'Le contrat est invailde'; 
		}
		if ( !isset($formation) || empty($formation) ) { 
		    $errors[] = 'La formation est invalide'; 
		}
		if ( !isset($quotisation) || empty($quotisation) ) { 
		    $errors[] = 'La quotisation est invalide'; 
		}
		if ( !isset($siege) || empty($siege) ) { 
		    $errors[] = 'Le siege est invalide'; 
		}
		if ( !isset($registre) || empty($registre) ) { 
		    $errors[] = 'Le registre est invalide'; 
		}
		if ( !isset($regime) || empty($regime) ) { 
		    $errors[] = 'Le regime est invalide'; 
		}
		if ( !isset($nombre_employe) || empty($nombre_employe) ) { 
		    $errors[] = 'Le nombre employe est invalide'; 
		}
		if ( !isset($date_creation) || empty($date_creation) ) { 
		    $errors[] = 'La date de creation est invalide'; 
		}
		if (empty($errors))
		{
			return;
		}
		throw new ValidationException($errors);
	}

	public function createNewOrganisation($id_organisation, $nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id)
	{
		try 
		{
			self::connect();
			$this->validateOrganisationParams($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation);
			$result = $this->organisationsGateway->insert($id_organisation, $nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

	public function editOrganisation($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id, $id)
	{
		try 
		{
			self::connect();
			$result = $this->organisationsGateway->edit($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id, $id);
			self::disconnect();
		}
		catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}
	public function deleteOrganisation($id)
	{
		try
		{
			self::connect();
			$result = $this->organisationsGateway->delete($id);
			self::disconnect();
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

}

?>
