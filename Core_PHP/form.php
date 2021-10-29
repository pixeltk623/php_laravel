<?php 

	// 	echo $newValue = "Cricket Football Tenis";
	
	// // echo "<pre>";
	// print_r(explode(" ", $newValue));

	if (isset($_POST['submit'])) {
		$name =  $_POST['name'];
		$email =  $_POST['email'];

		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		} else {
			$gender = "";
		}
		if (isset($_POST['hobby'])) {
			$hobby =  $_POST['hobby'];
		} else {
			$hobby =  array();
		}

		//echo "<pre>";

		//print_r($hobby);

		$dob = $_POST['dob'];

		if ($name=='') {
		 	$er1 =  "<span style='color: red;'>Name Can Not be blank</span>";	
		} 

		if ($email=='') {
			$er2 =  "<span style='color: red;'>Email Can Not be blank</span>";
		}

		if ($gender=='') {
			$er3 =  "<span style='color: red;'>Gender Can Not be blank</span>";
		}

		if (empty($hobby)) {
			$er4 =  "<span style='color: red;'>Hobby is Not selected</span>";
		}

		if ($dob=='') {
			$er5 =  "<span style='color: red;'>DOB can not be blank</span>";
			
		}

		// if ($name!='' && $email !='' && $gender!='' && !empty($hobby) && $dob != '') {
			
		// 	echo $name;
		// 	echo "<br>";
		// 	echo $email;
		// 	echo "<br>";
		// 	echo $gender;
		// 	echo "<br>";
			
		// 	//print_r($hobby);

		// 	echo implode(",", $hobby);


		// 	echo "<br>";
		// 	echo $dob;
		// }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Name: </label>
		<input type="text" name="name">
		<?php
		if (isset($er1)) {
			echo $er1;
		}
		?>
		<br><br>

		<label>Email: </label>
		<input type="text" name="email">
		<?php
		if (isset($er2)) {
			echo $er2;
		}
		?>
		<br><br>

		<label>Gender: </label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<?php
		if (isset($er3)) {
			echo $er3;
		}
		?>
		<br><br>

		<label>Hobby</label>
		<input type="checkbox" name="hobby[]" value="Cricket">Cricket
		<input type="checkbox" name="hobby[]" value="Football">Football
		<input type="checkbox" name="hobby[]" value="Tenis">Tenis
		<input type="checkbox" name="hobby[]" value="Chess">Chess
		<?php
		if (isset($er4)) {
			echo $er4;
		}
		?>

		<br><br>
		<label>DOB: </label>
		<input type="date" name="dob">
		<?php
		if (isset($er5)) {
			echo $er5;
		}
		?>
		<br><br>

		<label>Profile Pic: </label>
		<input type="file" name="profilePic">
		<br><br>

		<input type="submit" name="submit">
	</form>


	<?php

		if (isset($name) && isset($email)) {
			
		
		if ($name!='' && $email !='' && $gender!='' && !empty($hobby) && $dob != '') {
			
			?>

			<table border="1">
				<tr>
					<th>Name</th>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $email; ?></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td><?php echo $gender; ?></td>
				</tr>
				<tr>
					<th>hobby</th>
					<td><?php echo implode(",", $hobby); ?></td>
				</tr>
				<tr>
					<th>dob</th>
					<td><?php echo $dob; ?></td>
				</tr>
			</table>

			<?php
		}
		}
	?>
</body>
</html>