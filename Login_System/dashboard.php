<?php 
	session_start();
	include_once 'config.php';

	$sessionTime = $_SESSION['time'];
	$currentTime = time();
	$diff = $currentTime - $sessionTime;

	if($diff>10) {
		session_destroy();
		header("Location: index.php");
	} else {
		$_SESSION['time'] = time();
	}
	if (isset($_SESSION['is_login'])) {
		
		$userId = $_SESSION['student_id'];

		$query = $query = "SELECT  * FROM students WHERE id = ".$userId;
		$result = mysqli_query($conn, $query);
		$data = mysqli_fetch_object($result);

		// echo "<pre>";

		// print_r($data);
	?>

		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>Dashboard</h1>
			<?php 
				echo "Welcome to ". $data->full_name;
			?>
			<a href="logout.php">Logout</a>
		</body>
		</html>


		<?php
	} else {
		header("Location: index.php");
	}

?>
