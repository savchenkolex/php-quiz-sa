<?php 
require_once 'function.php';
require_once 'db.php';

function checkAnswers($arr)
{
	$answers = [
		"01"=>"0103",
		"02"=>"0201",
		"03"=>"0302",
		"04"=>"0404",
		"05"=>"0501",
		"06"=>"0603",
		"07"=>"0702",
		"08"=>"0801"
	];

	$result["name"] = $arr["name"];

	$cleared_data;

	foreach ($arr as $key => $value) {
		if ($key !== "name") {
			$cleared_data[$key] = $value;
		}
	}

	$incorrect = count(array_diff_assoc($answers, $cleared_data));
	$correct = count(array_intersect_assoc($answers, $cleared_data));
	$result["incorrect"] = $incorrect;
	$result["correct"] = $correct;

	return $result;
}

$results = checkAnswers($_POST);

$quizdb->setResults($results);

require_once 'views/result.view.php';