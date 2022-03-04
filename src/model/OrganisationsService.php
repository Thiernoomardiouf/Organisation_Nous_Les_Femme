<?php

require_once 'OrganisationsGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class OrganisationsService extends OrganisationsGateway
{

	private $organisationsGateway = null;

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
		    $errors[] = 'Le non est vailde'; 
		}
		if ( !isset($coordonnees) || empty($coordonnees) ) { 
		    $errors[] = 'Les coordonnees sont valides'; 
		}
		if ( !isset($ninea) || empty($ninea) ) { 
		    $errors[] = 'Le ninea est valide'; 
		}
		if ( !isset($contrat) || empty($contrat) ) { 
		    $errors[] = 'Le contrat est vailde'; 
		}
		if ( !isset($formation) || empty($formation) ) { 
		    $errors[] = 'La formation est valide'; 
		}
		if ( !isset($quotisation) || empty($quotisation) ) { 
		    $errors[] = 'La quotisation est valide'; 
		}
		if ( !isset($siege) || empty($siege) ) { 
		    $errors[] = 'Le siege est valide'; 
		}
		if ( !isset($registre) || empty($registre) ) { 
		    $errors[] = 'Le registre est valide'; 
		}
		if ( !isset($regime) || empty($regime) ) { 
		    $errors[] = 'Le regime est vailde'; 
		}
		if ( !isset($nombre_employe) || empty($nombre_employe) ) { 
		    $errors[] = 'Le nombre employe est valide'; 
		}
		if ( !isset($date_creation) || empty($date_creation) ) { 
		    $errors[] = 'La date de creation est valide'; 
		}
		if (empty($errors))
		{
			return;
		}
		throw new ValidationException($errors);
	}

	public function createNewOrganisation($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id)
	{
		try 
		{
			self::connect();
			$this->validateContactParams($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation);
			$result = $this->organisationsGateway->insert($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id);
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
