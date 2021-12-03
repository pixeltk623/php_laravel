<?php

session_start();

echo "<pre>";

print_r($_SESSION); 

echo $_SESSION['user_name'];

if (isset($_SESSION['is_admin'])) {
	echo "string";
} 

// unset($_SESSION['user_name']);

session_destroy();
	
?>