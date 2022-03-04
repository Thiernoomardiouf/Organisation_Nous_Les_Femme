<?php

class Database 
{
	private static $dbName 	   = 'femmes';
	private static $dbHost 	   = 'localhost';
	private static $dbUsername = 'thierno';
	private static $dbPassword = '123Diouf@';

	private static $conn = null;

	public function __construct()
	{
		// 
	}

	public static function connect()
	{
		// Une connexion à travers toute l'application
		if (null == self::$conn)
		{
			try
			{
				self::$conn =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbPassword); 
			} 
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		return self::$conn;
	}

	public static function disconnect()
	{
		self::$conn = null;
	}

}

?>
