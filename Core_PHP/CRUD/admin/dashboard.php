<?php 
	session_start();
	include_once '../config.php';
	// echo "<pre>";

	// print_r($_SESSION);

	if(isset($_SESSION['is_admin'])) {
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
    	<a href="logout.php">LogOut</a>
        <h1 class="text-center text-primary mt-3">Crud In Core PHP</h1>
        <a href="create.php" class="btn btn-primary">Add New Employee</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM employee";
                    $result =  mysqli_query($conn, $query);

                    if ($result->num_rows==0) {

                    ?>
                       <tr>
                           <th class="text-danger text-center" colspan="5">No Record Found</th>
                       </tr> 
                    <?php
                    } else {
                        $srNo = 1;
                        while ($response = mysqli_fetch_object($result)) {
                            
                            ?>
                                <tr>
                                    <td><?php echo $srNo++; ?></td>
                                    <td><?php echo ucfirst($response->first_name) . " " .ucfirst($response->last_name); ?></td>
                                    <td><?php echo $response->email; ?></td>
                                    <td><?php echo $response->mobile; ?></td>
                                    <td>
                                        <a href="show.php?id=<?php echo $response->id; ?>" class="btn btn-info">Show</a>
                                        <a href="edit.php?id=<?php echo $response->id; ?>" class="btn btn-warning">Edit</a>
                                        <a href="delete.php?id=<?php echo $response->id; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php

                        }

                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>
	<?php

	} else {
		header("Location: index.php");
	}

?>