<?php
	include_once 'config.php';
	
	if (isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])) {
		
		$eid = $_GET['id'];
		$query = "SELECT * FROM employee WHERE id = '$eid'";
		$result =  mysqli_query($conn, $query);

		if($result->num_rows==0) {
			header("Location: 404.php");
		}

		$response = mysqli_fetch_object($result);

		// echo "<pre>";
		// print_r($response);

		?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  	<body>
	    <div class="container">
	        <h1 class="text-center text-primary mt-3">Crud In Core PHP</h1>
	        <h4 class="mb-2">Employee Detail: - <?php echo $response->first_name." ".$response->last_name; ?></h4>
	        <table class="table table-bordered">
	        	<tr>
	        		<th>First Name</th>
	        		<td><?php echo $response->first_name; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Last Name</th>
	        		<td><?php echo $response->last_name; ?></td>
	        	</tr>     
	        	<tr>
	        		<th>Email</th>
	        		<td><?php echo $response->email; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Mobile</th>
	        		<td><?php echo $response->mobile; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>City</th>
	        		<td><?php echo $response->city; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Gender</th>
	        		<td><?php echo $response->gender; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Hobby</th>
	        		<td><?php echo $response->hobby; ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Creadted At</th>
	        		<td><?php echo date("Y-m-d", strtotime($response->created_at)); ?></td>
	        	</tr> 
	        	<tr>
	        		<th>Updated At</th>
	        		<td><?php echo $response->updated_at; ?></td>
	        	</tr> 
	        	<tr>
	        		<th colspan="2">
	        			<a href="index.php" class="text-center d-block btn btn-info">Back To Home</a>
	        		</th>
	        		
	        	</tr> 
			</table>
		</div>
	</body>
</html>
		<?php
		
	} else {

		header("Location: 404.php");

	}

?>