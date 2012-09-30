<?php
require_once('yellowpages_api_class.php');

$obj = new YellowPagesAPI();

try{
	
	$result = $obj->getDeals('Florida');
}catch(Exception $e){
	
	echo $e->getMessage();
}

var_dump($result);