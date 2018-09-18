<?php
namespace App\Models;
/**
* 
*/
class Database {

	private $config = [
		'user' 		=>'root',
		'pass' 		=>'',
		'host' 		=>'localhost',
		'database'	=>'lalamove'
	];

	protected $pdo = null;
	
	function __construct() {
		try {
			$this->pdo = new \PDO("mysql:dbname={$this->config['database']};host={$this->config['host']}",$this->config['user'],$this->config['user']);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

}
?>