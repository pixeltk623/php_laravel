<?php 
	
	session_start();
	include_once '../config.php';

	if (isset($_SESSION['is_admin'])) {
		header("Location: dashboard.php");
	} 
	

	if (isset($_POST['submit'])) {
		
		$userName = $_POST['UserName'];
		$Password = md5($_POST['Password']);

		
		$query = "SELECT * FROM admin WHERE username ='$userName' AND password = '$Password'";

		$result = mysqli_query($conn, $query);

		// echo "<pre>";

		// print_r($result);

		if($result->num_rows==1) {

			$adminInfo = mysqli_fetch_object($result);

			$_SESSION['is_admin'] = true;

			$_SESSION['admin_id'] = $adminInfo->id;

			header("Location: dashboard.php");
			echo "Login Done";

		} else {
			echo "Wrong Username or password";
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
		<label>UserName: </label>
		<input type="text" name="UserName">
		<br><br>
		<label>Password</label>
		<input type="Password" name="Password">
		<br><br>

		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>