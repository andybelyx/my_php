<?php

class DbConnection
{
	private static $instance;
	private $pdo;
	
	private function __construct() {
		$dsn = "mysql:host=localhost;dbname=mvc";
		$user = "php";
		$passwd = "toor";

		$this->pdo = new PDO($dsn, $user, $passwd);
	}
	
	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new DbConnection();
		}
		return self::$instance;
	}
	
	public function runQuery($query) {
		$statement = $this->pdo->query($query);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}