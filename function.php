<?php 
require_once 'config.php';

function dd($param){
	echo "<pre>";
	var_dump($param);
	echo "</pre>";
	die();
}

$current_url = parse_url($_SERVER["REQUEST_URI"]);

$title;

if($current_url["path"] !== "/statistics.php") {
	$title = "Тест по PHP";
} else {
	$title = "Статистика";
} 

$nav = [];

if($current_url["path"] !== "/" && $current_url["path"] !== "/index.php" ) {
	$nav["link"] = "/";
	$nav["name"] = "Назад";
} else {
	$nav["link"] = "/statistics.php";
	$nav["name"] = "Статистика";
} 