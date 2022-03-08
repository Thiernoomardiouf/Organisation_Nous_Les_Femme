<?php

require_once 'LocalitesGateway.php';
require_once 'ValidationException.php';
require_once 'Database.php';

class LocalitesService extends LocalitesGateway
{

	private $localitesGateway = null;

	public function __construct()
	{
		$this->localitesGateway = new LocalitesGateway();
	}

	public function getAllLocalites($order)
	{
		try
		{
			self::connect();
			$result = $this->localitesGateway->selectAll($order);
			self::disconnect();
			return $result;
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
	}

	public function getQuatier($id)
	{
		try
		{
			self::connect();
			$result = $this->localitesGateway->selectByIdQuartier($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->localitesGateway->selectByIdQuartier($id);
	}

	public function getCommune($id)
	{
		try
		{
			self::connect();
			$result = $this->localitesGateway->selectByIdCommune($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->localitesGateway->selectByIdCommune($id);
	}

	public function getDepartement($id)
	{
		try
		{
			self::connect();
			$result = $this->localitesGateway->selectByIdDepartement($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->localitesGateway->selectByIdDepartement($id);
	}

	public function getRegion($id)
	{
		try
		{
			self::connect();
			$result = $this->localitesGateway->selectByIdRegion($id);
			self::disconnect();
		}
		catch(Exception $e)
		{	
			self::disconnect();
			throw $e;
		}
		return $this->localitesGateway->selectByIdRegion($id);
	}

}

?>
