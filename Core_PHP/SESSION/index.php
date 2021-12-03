<?php 

session_start();
		
	$userName = "admin";

	$_SESSION['user_name'] = $userName;
	$_SESSION['is_admin'] = true;
	echo $userName;

?>