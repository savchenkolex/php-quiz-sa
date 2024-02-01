<?php 

function dd($param){
	echo "<pre>";
	var_dump($param);
	echo "</pre>";
	die();
}

$current_url = parse_url($_SERVER["REQUEST_URI"]);
//dd(getcwd());
function currentTitle ($current_url) {
	if(str_contains($current_url["path"], "/statistics.php")) {
		return "Статистика";
	} else {
		return "Тест по PHP";
	} 
}

function targetNavLink($current_url){
	$nav = [];
	if($current_url["path"] !== "/" && $current_url["path"] !== "/index.php" ) {
		$nav["link"] = "/";
		$nav["name"] = "Назад";
	} else {
		$nav["link"] = "/statistics.php";
		$nav["name"] = "Статистика";
	}
	return $nav;
}

$nav = targetNavLink($current_url);

