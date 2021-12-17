<?php 
	session_start();
	include_once '../config.php';



	$sessionTime = $_SESSION['time'];
	$currentTime = time();
	$diff = $currentTime - $sessionTime;

	if($diff>180) {
		session_destroy();
		header("Location: index.php");
	} else {
		$_SESSION['time'] = time();
	}
	if (isset($_SESSION['is_login'])) {
		
		$userId = $_SESSION['student_id'];

		$query = $query = "SELECT  * FROM admin WHERE id = ".$userId;
		$result = mysqli_query($conn, $query);
		$data = mysqli_fetch_object($result);

		if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
			
		$id = $_GET['id'];

		$queryGet = "DELETE  FROM `categories` WHERE id=".$id;

      	$resultQ = mysqli_query($conn, $queryGet);

      	if($resultQ) {
      		header("Location: http://localhost/kolkata/CEPMS/admin/manage_cat.php");
      	}

		}

		// echo "<pre>";

		// print_r($data);

     

     

	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>


<div class="container-fluid">
  <div class="row content">
    <?php 
      include_once 'navbar.php';
    ?>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">

         <div class="well">
        
         	<table class="table table-bordered">
         		<tr>
         			<th>Sr.No</th>
         			<th>Category Name</th>
         			<th>Action</th>
         		</tr>
         		<?php 
         			 $queryGet = "SELECT * FROM `categories`";

      				$resultQ = mysqli_query($conn, $queryGet);

         			if ($resultQ->num_rows>0) {
         				$sl = 0;
         				while ($response = mysqli_fetch_object($resultQ)) {
         					?>
         					<tr>
         						<td><?php echo ++$sl; ?></td>
         						<td><?php echo $response->name; ?></td>
         						<td>
         							<a href="" class="btn btn-info">Edit</a>
         							<a href="?id=<?php echo $response->id; ?>" class="btn btn-danger">Delete</a>
         						</td>
         					</tr>
         					<?php
         				}

         			} else {
         				?>
         					<tr>
         						<td colspan="3" class="text-center text-danger">No Category Found</td>
         					</tr>
         				<?php
         			}

         		?>
         	</table>
      </div>
      </div>
      	
    </div>
  </div>
</div>

</body>
</html>
<?php
} else {
	header("Location: index.php");
}

?>