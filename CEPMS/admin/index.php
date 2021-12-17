<?php 
	
	session_start();
	include_once '../config.php';

	
	if(isset($_SESSION['is_login'])) {

		header("Location: dashboard.php");
	}

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$query = "SELECT  *
		
		FROM
		    admin
		WHERE
		    (
		        username = '$username' AND PASSWORD = '$password'
		    ) OR(
		        email = '$username' AND PASSWORD = '$password'
		)";

		$result = mysqli_query($conn, $query);

		if ($result->num_rows==1) {
			$_SESSION['is_login'] = true;
			$_SESSION['student_id'] = mysqli_fetch_object($result)->id;
			$_SESSION['time'] = time();
			header("Location: dashboard.php");
		} else {
			echo "Wrong Username Or Psassword";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Username/Email: </label>
		<input type="text" name="username" required>
		<br><br>
		<label>Password: </label>
		<input type="password" name="password" required>
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>
	<br>
	
</body>
</html>