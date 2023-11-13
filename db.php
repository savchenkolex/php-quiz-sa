<?php 
require_once 'config.php';

class Database {
	private $db;

	function __construct($dsn, $db_user, $db_pass)
	{
		try {
			$this->db = new PDO($dsn, $db_user, $db_pass, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	// public function anyQuery($query='SELECT * FROM results')
	// {
	// 	$statement = $this->db->prepare($query);
	// 	$statement->execute();
	// 	$result = $statement->fetchAll();
	// 	return $result;
	// }

	public function setResults($arr)
	{
		if (!$arr) {
			return "The array is empty or not defined";
		}

		$statement = $this->db->prepare("INSERT INTO `results` (`name`, `total`, `correct`, `incorrect`) VALUES (:name, '8', :correct, :incorrect)");
		$statement->execute($arr);

	}

	public function getResults()
	{
		$statement = $this->db->prepare("SELECT * FROM results");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}


}

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

$quizdb = new Database($dsn, $db_user, $db_pass);

//create table results if not exists: 
/*
CREATE TABLE `quiz`.`results` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(256) NOT NULL , `total` INT(3) NOT NULL , `correct` INT(3) NOT NULL , `incorrect` INT(3) NOT NULL , PRIMARY KEY (`id`) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
*/
// $query = "SHOW TABLES";
// $statement = $db->prepare($query);
// $statement->execute();
// $result = $statement->fetch();
// echo $result[0];