<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/modern-normalize_v2.0.0.css">
	<link rel="stylesheet" href="./css/main.css">
	<title><?= currentTitle($current_url) ?></title>
</head>
<body>
<header>
	<div class="container">
		<div class="title-box">
		
		<h1><?= currentTitle($current_url) ?></h1>
		</div>
		<div class="nav-box">
			<a href=<?= $nav["link"] ?> ><?= $nav["name"] ?></a>
		</div>
	</div>
</header>
