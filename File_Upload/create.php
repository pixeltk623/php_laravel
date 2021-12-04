<?php 
	
	$conn = mysqli_connect("localhost","root","","crud_kol");

	if (!$conn) {
		echo "DB Error";
	}


	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$profilePic = $_FILES['ProfilePic'];

		// echo "<pre>";

		// print_r($profilePic);

		$size = round($profilePic['size']/1024);

		$ext = strtolower(pathinfo($profilePic['name'],PATHINFO_EXTENSION));

		if($ext=='jpg' || $ext == 'png' || $ext == 'jpeg') {
			$extStatus = true;
		} else {
			echo "File Extension is not allowed";
		}

		if ($size>=10 && $size <=100) {
			//echo "File Size is Ok";
			$sizeStatus = true;
		} else {
			echo "File size is too large or to short";
		}

		$fileName = time().".".$ext;

		if (!file_exists("uploads/".$fileName)) {
			//echo "File is Not there";
			$fileStatus = true;
		} else {
			echo "File is Already exits";
		}
		

		if(isset($extStatus) && isset($fileStatus) && isset($sizeStatus)) {
			$status = move_uploaded_file($profilePic['tmp_name'], "uploads/".$fileName);

			$query = "INSERT INTO file_upload (name,profile_pic) VALUES ('$name','$fileName')";
			
			$result = mysqli_query($conn, $query);

			if ($result && $status) {
				header('Location: index.php');
			} else {
				echo "Something Error";
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

	<form method="post" enctype="multipart/form-data">
		
		<label>Name: </label>
		<input type="text" name="name" required>
		<br><br>
		<label>Profile Pic</label>
		<input type="file" name="ProfilePic" required>
		<br><br>
		<input type="submit" name="submit">

	</form>

</body>
</html>