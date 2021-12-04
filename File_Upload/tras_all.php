<?php 
	$conn = mysqli_connect("localhost","root","","crud_kol");

	if (!$conn) {
		echo "DB Error";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>

	<a href="create.php">New File</a>
	<br><br>
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<th>Sr.No</th>
			<th>Profile Pic</th>
			<th>Created Date</th>
			<th>Action</th>
		</tr>
		<?php 

		$query = "SELECT * FROM `tras_files`";

		$result = mysqli_query($conn, $query);

		// echo "<pre>";

		// print_r($result);

		if($result->num_rows==0) {
			?>
			<tr>
				<th colspan="5" style="color: red;"> No Record Found</th>
			</tr>
			<?php
		} else {

			$srNo = 1;
			while ($response = mysqli_fetch_object($result)) {
				
		?>
				<tr>
					<td><?php echo $srNo++; ?></td>
					
					<td>
						<img width="100" src="uploads/<?php echo $response->file_name; ?>">
					</td>
					<td><?php echo $response->created_at; ?></td>
					<td>
						
						<a href="delete.php?id=<?php echo $response->file_id; ?>&&fileName=<?php echo $response->file_name; ?>">Perament Delete</a>
					</td>
				</tr>
		<?php
			}

		}
		?>

	</table>
</body>
</html>