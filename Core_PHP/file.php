<?php 
	

	$finalData = file_get_contents("http://localhost/php-6pm/rest_api/product/read.php");


	$finalData = json_decode($finalData);

	//$finalDataNew = json_decode($finalData, true);

	// echo "<pre>";

	// print_r($finalDataNew['records']);

	// die;

	// die;
	// =>Uploads 
	// 	=>Year 
	// 		=>Month 
	// 			=>FileName
	// Ex = > uploads/2021/08/it_training_in_vadodara-1536x1023.jpg
	// Ex = > uploads/2022/01/it_training_in_vadodara-1536x1023.jpg

	// if ($sizeInKB>=100 && $sizeInKB<=500) {
	// 	move_uploaded_file($tmpName, "uploads/".$fileName);

	// 	echo "Uploaded";
	// } else {
	// 	echo "Invalid Size";
	// }
	

	// unlink("uploads/Screenshot (214).png");

	// die;
		
	// mkdir("tasest/2021/09");

	//mkdir("asest/2021/09");

	// echo $year = "2020";
	// echo "<br>";
	// echo $month = date("m");

	// die;
		
	// if( !is_dir("sdadsa")) {
		
	// 	mkdir("sdadsa")

	// } else {
	// 	echo "Folder is alreday There";
	// }
	
	//mkdir("upload/2021/08");
	//die;
	if (isset($_POST['submit'])) {
		
		//echo $_POST['profilePic'];

		$file = $_FILES['profilePic'];

		// echo "<pre>";

		// print_r($file);

		$fileName = $file['name'];
		$size = $file['size'];
		$tmpName = $file['tmp_name'];
		$type = $file['type'];	

		$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

		$sizeInKB = round($size/1024);

		// echo rand(100,100000);

		// die;

		$newFileName = time().".".$ext;

		// echo file_exists("uploads/".$fileName);


		// echo strlen($fileName);

		// die;

		if ($size<1) {
			echo "File you have not selected";
		} else {

			if ($ext=='jpg' OR $ext=='png') {
				if (file_exists("uploads/".$fileName)) {
					echo "File is Areday Exits";
					} else {

						if($sizeInKB>=100) {

							if ($sizeInKB>500) {
								echo "your file size is greater than 500KB";
							} else {
								move_uploaded_file($tmpName, "uploads/".$fileName);
								echo "Uploaded";
							}

						} else {
							echo "your file size is less than 100KB";
						}
					}
			} else {
				echo "File allowed types is only jpg and png";
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
	<!-- enctype="multipart/form-data" -->
	<form method="POST" enctype="multipart/form-data">
	
		<label>Profile Pic: </label>
		<input type="file" name="profilePic">
		<br><br>

		<input type="submit" name="submit">
	</form>

	<table border="1" width="100%">
		<tr>
			<th>Sr.No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Category Name</th>
			<th>Description</th>
		</tr>

		<?php 
			foreach ($finalData->records as $key => $value) {
					
				?>
				<tr>
					<td><?php echo ++$key; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><?php echo $value->price; ?></td>
					<td><?php echo $value->category_name; ?></td>
					<td><?php echo $value->description; ?></td>
				</tr>
				<?php
			}
		?>

		<?php 
			//foreach ($finalDataNew['records'] as $key => $value) {
					
				?>
				<!-- <tr>
					<td><?php echo ++$key; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value->price; ?></td>
					<td><?php echo $value->category_name; ?></td>
					<td><?php echo $value->description; ?></td>
				</tr> -->
				<?php
			//}
		?>
	</table>


	
</body>
</html>