<?php 
	$conn = mysqli_connect("localhost","root","","crud_kol");

	if (!$conn) {
		echo "DB Error";
	}

	if(isset($_GET['id']) && isset($_GET['fileName'])) {

		$did = $_GET['id'];
		$fileName = $_GET['fileName'];

		$queryI = "INSERT INTO `tras_files`(`file_name`, `file_id`) VALUES ('$fileName','$did')";
		$resultI = mysqli_query($conn, $queryI);

		$query = "DELETE FROM file_upload WHERE id =".$did;

		$result = mysqli_query($conn, $query);

		if ($result) {
			header('Location: index.php');
		} else {
			echo "Something Error";
		}
		
	}
?>