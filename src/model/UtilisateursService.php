<?php

require_once 'UtilisateursGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class UtilisateursService extends UtilisateursGateway
{

	private $utilisateursGateway = null;

	public function __construct()
	{
		$this->utilisateursGateway = new UtilisateursGateway();
	}

	public function getAllUtilisateurs($order)
	{
		try
		{
			self::connect();
			$result = $this->utilisateursGateway->selectAll($order);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
	}

	public function getUtilisateur($id)
	{
		try
		{
			self::connect();
			$result = $this->utilisateursGateway->selectById($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->utilisateursGateway->selectById($id);
	}

	private function validateUtilisateurParams($nom, $prenom, $adresse, $mot_de_passe, $logine)
	{
		$errors = array();

		if ( !isset($nom) || empty($nom) ) { 
		    $errors[] = 'Le non est invailde'; 
		}
		if ( !isset($prenom) || empty($prenom) ) { 
		    $errors[] = 'Le prenom sont invalides'; 
		}
		if ( !isset($adresse) || empty($adresse) ) { 
		    $errors[] = 'Le adresse est invalide'; 
		}
		if ( !isset($mot_de_passe) || empty($mot_de_passe) ) { 
		    $errors[] = 'Le mot de passe est invailde'; 
		}
		if ( !isset($logine) || empty($logine) ) { 
		    $errors[] = 'Le login est invalide'; 
		}
		if (empty($errors))
		{
			return;
		}
		throw new ValidationException($errors);
	}

	public function createNewUtilisateur($nom, $prenom, $adresse, $mot_de_passe, $logine)
	{
		try 
		{
			self::connect();
			$this->validateUtilisateurParams($nom, $prenom, $adresse, $mot_de_passe, $logine);
			$result = $this->utilisateursGateway->insert($nom, $prenom, $adresse, $mot_de_passe, $logine);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

	public function deleteUtilisateur($id)
	{
		try
		{
			self::connect();
			$result = $this->utilisateursGateway->delete($id);
			self::disconnect();
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

    public function loginUtilisateur($mot_de_passe, $logine)
	{
		try
		{
			self::connect();
			$result = $this->utilisateursGateway->login($mot_de_passe, $logine);
			self::disconnect();
            return $result; 
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

}

?>
