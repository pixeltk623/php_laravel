<?php
	include_once 'config.php';
	
	if (isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])) {
		
		$did = $_GET['id'];
		$query = "DELETE  FROM employee WHERE id = '$did'";
		$result =  mysqli_query($conn, $query);

		if ($result==true) {
			header("Location: index.php");
		} else {
			echo "Something Error";
		}
		// echo "<pre>";
		// print_r($response);

		
	} else {

		header("Location: 404.php");

	}

?>