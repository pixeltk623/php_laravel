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

		// echo "<pre>";

		// print_r($data);

    if (isset($_POST['submit'])) {
      $cname = $_POST['cname'];

      $query = "INSERT INTO `categories`(`name`) VALUES ('$cname')";

      $resultQ = mysqli_query($conn, $query);

      if ($resultQ) {
        
        $message = "Category Added";

      }
    }
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
          <?php 

            if (isset($message)) {
              ?>
                <div class="alert alert-success">
                  <?php echo $message; ?>
                </div>
              <?php 
            }
          ?>
        <form method="post">
           <div class="form-group">
          <label>Category Name</label>
          <input type="text" name="cname" class="form-control">
         
        </div>


        <div class="form-group">
          <label>Category</label>
          <select name="cat_name" class="form-control">
            
      
          <?php 

            $queryC = "SELECT * FROM `categories`";

            $resultC = mysqli_query($conn, $queryC);
            while ($response = mysqli_fetch_object($resultC)) {
              ?>
                <option value="<?php echo $response->id; ?>"><?php echo $response->name; ?></option>
              <?php 

            }

          ?>
              </select>
        </div>


          <div class="form-group">
             <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </form>
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