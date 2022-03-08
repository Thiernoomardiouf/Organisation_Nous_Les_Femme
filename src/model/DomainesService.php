<?php

require_once 'DomainesGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class DomainesService extends DomainesGateway
{

	private $domainesGateway = null;

	public function __construct()
	{
		$this->domainesGateway = new DomainesGateway();
	}

	public function getAllDomaines($order)
	{
		try
		{
			self::connect();
			$result = $this->domainesGateway->selectAll($order);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
	}

	public function getDomaine($id)
	{
		try
		{
			self::connect();
			$result = $this->domainesGateway->selectById($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->domainesGateway->selectById($id);
	}

	private function validateDomaineParams($nom_dommaine, $numero)
	{
		$errors = array();

		if ( !isset($nom_dommaine) || empty($nom_dommaine) ) { 
		    $errors[] = 'Le non est invailde'; 
		}
		if ( !isset($numero) || empty($numero) ) { 
		    $errors[] = 'Le numéro est invalide'; 
		}
		if (empty($errors))
		{
			return;
		}
		throw new ValidationException($errors);
	}

	public function createNewDomaine($nom_dommaine, $numero)
	{
		try 
		{
			self::connect();
			$this->validateDomaineParams($nom_dommaine, $numero);
			$result = $this->domainesGateway->insert($nom_dommaine, $numero);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{
			self::disconnect();
			throw $e;
		}
	}

	public function deleteDomaine($id)
	{
		try
		{
			self::connect();
			$result = $this->domainesGateway->delete($id);
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
