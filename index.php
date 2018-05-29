<?php
require_once('phpQuery-onefile.php');
$results_page = file_get_contents('https://ambervapes.com/boxmod/');
echo $results_page;
//$results = phpQuery::newDocument($results_page);
//echo($results);
