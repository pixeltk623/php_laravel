<?php 
		

	$name = "asdsa";

	if ($name=='') {
		echo "<input type = 'text' value='$name'";
	} else {
		echo "<input type = 'text' value='$name'";
	}

	// echo $_POST['first_name'];

	// echo "<pre>";
	// print_r($_FILES['file']) ;

	// die;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form In HTML</title>
</head>
<body>

	<h2>Form In HTML</h2>
<!-- 
	GET
	method="" action="" enctype=""
	POST 
	by default form method = GET

	2,048 characters, 
-->

	<form method="POST" action="form1.php">
		<label>Name</label>
		<input type="text" name="first_name">
		<input type="submit" name="submit" value="Send">

		<!-- <button type="button">Send</button> -->
	</form>

</body>
</html>