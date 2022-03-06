<?php

require_once 'RepondantsGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class RepondantsService extends RepondantsGateway
{

	private $repondantsGateway = null;

	public function __construct()
	{
		$this->repondantsGateway = new RepondantsGateway();
	}

	public function getAllRepondants($order)
	{
		try
		{
			self::connect();
			$result = $this->repondantsGateway->selectAll($order);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
	}

	public function getRepondant($id)
	{
		try
		{
			self::connect();
			$result = $this->repondantsGateway->selectById($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->repondantsGateway->selectById($id);
	}

	private function validateRepondantParams($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id)
	{
		$errors = array();

		if ( !isset($nomRepondant) || empty($nomRepondant) ) { 
		    $errors[] = 'Le non est invailde'; 
		}
		if ( !isset($prenom) || empty($prenom) ) { 
		    $errors[] = 'Le prenom sont invalides'; 
		}
		if ( !isset($fonction) || empty($fonction) ) { 
		    $errors[] = 'La fonction est invalide'; 
		}
		if ( !isset($telephone) || empty($telephone) ) { 
		    $errors[] = 'Le telephone est invailde'; 
		}
		if ( !isset($courriel) || empty($courriel) ) { 
		    $errors[] = 'Le courriel est invalide'; 
		}
		if ( !isset($organ_id) || empty($organ_id) ) { 
		    $errors[] = 'Le numéro de entrprise est invalide'; 
		}
		if (empty($errors))
		{
			return;
		}
		throw new ValidationException($errors);
	}

	public function createNewRepondant($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id)
	{
		try 
		{
			self::connect();
			$this->validateRepondantParams($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id);
			$result = $this->repondantsGateway->insert($nomRepondant, $prenom, $fonction, $telephone, $courriel, $organ_id);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

	public function deleteRepondant($id)
	{
		try
		{
			self::connect();
			$result = $this->repondantsGateway->delete($id);
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
