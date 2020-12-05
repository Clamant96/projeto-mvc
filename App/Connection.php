<?php
namespace App;
session_start();
class Connection {
	public static function getDb() {
		try {

			/*$conn = new \PDO(
				"mysql:host=localhost;dbname=mvc;charset=utf8",
				"root",
				"" 
			);*/
			$conn = new \PDO(
				"mysql:host=fdb22.awardspace.net;dbname=3486769_cadastro;charset=utf8",
				"3486769_cadastro",
				"Edkaike1" 
			);
			return $conn;
		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}
?>