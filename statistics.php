<?php 
require_once 'function.php';
require_once 'db.php';

$results = $quizdb->getResults();

require_once 'views/statistics.view.php';