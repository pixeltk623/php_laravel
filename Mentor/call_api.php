<?php 
	
	$response = file_get_contents('https://reqres.in/api/users?page=2');

	$finalData = json_decode($response)->data;
	


	// echo "<pre>";

	// print_r($finalData);

	


?>