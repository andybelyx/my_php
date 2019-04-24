<?php
class DB {	
    static $obj;

    private function __clone(){}
    private function __wakeup(){}

    private function __construct() {
      	$dsn = "mysql:host=localhost;dbname=videos";
		$user = "php";
		$passwd = "toor";
    $this->pdo = new PDO($dsn, $user, $passwd);
    }

    static public function getConnect() {
        if(empty(self::$obj))
            self::$obj = new self();
        return self::$obj->pdo;
    }
}
$db = DB::getConnect();
print_r($db->query("SELECT name FROM videos WHERE id = 5")->fetchAll());

