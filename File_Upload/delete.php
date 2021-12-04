<?php 
	$conn = mysqli_connect("localhost","root","","crud_kol");

	if (!$conn) {
		echo "DB Error";
	}

	if(isset($_GET['id']) && isset($_GET['fileName'])) {

		$did = $_GET['id'];
		$fileName = $_GET['fileName'];


		$query = "DELETE FROM file_upload WHERE id =".$did;

		$result = mysqli_query($conn, $query);

		unlink("uploads/".$fileName);

		if ($result) {
			header('Location: index.php');
		} else {
			echo "Something Error";
		}
		
	}
?>