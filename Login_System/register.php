<?php 
	
	include_once 'config.php';
	
	if (isset($_POST['submit'])) {
		
		$fullName = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$queryU = "SELECT * FROM students WHERE username='$username'";
		$resC = mysqli_query($conn, $queryU);

		if($resC->num_rows>0) {
			$unameE =  "Username is already taken";
		}

		$queryE = "SELECT * FROM students WHERE email='$email'";

		$resE = mysqli_query($conn, $queryE);

		if($resE->num_rows>0) {
			$emailE =  "Email is already taken";
		}

		if($resC->num_rows<1 && $resE->num_rows<1) {


			$query = "INSERT INTO `students`(`full_name`, `email`, `username`, `password`) VALUES ('$fullName','$email','$username','$password')";
			$result = mysqli_query($conn, $query);

			if($result) {
				$message =  "<h2 style='color:green;'>User Has been Registered</h2>";
			} else {
				$message = "<h2 style='color:red;'>Something Error</h2>";
			}


		}


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo (isset($message)) ? $message : '';
	?>
	<form method="POST">
		<label>Full Name: </label>
		<input type="text" name="fullname">
		<br><br>
		<label>Username: </label>
		<input type="text" name="username">
		<?php
			if (isset($unameE)) {
				echo "<small style='color:red;'>".$unameE."</small>";
			}
		?>
		<br><br>
		<label>Email: </label>
		<input type="text" name="email">
		<?php
			if (isset($emailE)) {
				echo "<small style='color:red;'>".$emailE."</small>";
			}
		?>
		<br><br>
		<label>Password: </label>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>
	<br>
	<div>
		Registered User <a href="index.php">Login</a>
	</div>
</body>
</html>