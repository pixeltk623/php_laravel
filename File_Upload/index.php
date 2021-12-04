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
			<th>Name</th>
			<th>Profile Pic</th>
			<th>Created Date</th>
			<th>Action</th>
		</tr>
		<?php 

		$query = "SELECT * FROM `file_upload`";

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
					<td><?php echo $response->name; ?></td>
					<td>
						<img width="100" src="uploads/<?php echo $response->profile_pic; ?>">
					</td>
					<td><?php echo $response->created_at; ?></td>
					<td>
						<a href="">Edit</a>
						<a href="tras.php?id=<?php echo $response->id; ?>&&fileName=<?php echo $response->profile_pic; ?>">Tras</a>
						<a href="delete.php?id=<?php echo $response->id; ?>&&fileName=<?php echo $response->profile_pic; ?>">Delete</a>
					</td>
				</tr>
		<?php
			}

		}
		?>

	</table>
</body>
</html>