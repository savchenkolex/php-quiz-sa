<?php 
require_once 'config.php';

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

try {
	$db = new PDO($dsn, $db_user, $db_pass);
} catch (Exception $e) {
	die($e->getMessage());
}


//create table results if not exists: 
/*
CREATE TABLE `quiz`.`results` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(256) NOT NULL , `total` INT(3) NOT NULL , `correct` INT(3) NOT NULL , `incorrect` INT(3) NOT NULL , PRIMARY KEY (`id`) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
*/
$query = "SHOW TABLES";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetch();

var_dump($result);

