<?php
	include_once 'config.php';

	date_default_timezone_set("Asia/Kolkata");
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];

        if($first_name=='') {
            $message = "Name Can Not be blank";
            $className = "is-invalid";
        }

        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];

        if (isset($_POST['customRadio'])) {
            $gender = $_POST['customRadio'];
        } else {
            $gender = '';
        }
        

        if(isset($_POST['hobby'])) {
            $hobby = $_POST['hobby'];
        } else {
           $hobby = array();
        }

        $hobby =  implode(",", $hobby);

        if ($first_name!='') {
            
           $query = "UPDATE `employee` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`mobile`='$mobile',`gender`='$gender',`city`='$city',`hobby`='$hobby',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id = '".$_GET['id']."'";
          
            $result =  mysqli_query($conn, $query);

            if ($result==true) {
                $successMessage = "Employee Updated";
            } else {
                $errorMessage = "Somthing Error";
            }
        }
	}
	
	if (isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])) {
		
		$eid = $_GET['id'];
		$query = "SELECT * FROM employee WHERE id = '$eid'";
		$result =  mysqli_query($conn, $query);

		if($result->num_rows==0) {
			header("Location: 404.php");
		}
		$response = mysqli_fetch_object($result);
		$newHobby = explode(",", $response->hobby);

		
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
        <a href="index.php" class="btn btn-warning">Back To Home</a>
        <br><br>
        <?php
            if (isset($successMessage)) {
                ?>
                    <div class="alert alert-success">
                        <?php echo $successMessage; ?>
                    </div>
                <?php
            }
        ?>
        <?php
            if (isset($errorMessage)) {
                ?>
                    <div class="alert alert-danger">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php
            }
        ?>
        <form method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" value="<?php echo $response->first_name; ?>" class="form-control <?php echo (isset($className)) ? $className : '' ?>">
                            <?php
                                if (isset($message)) {
                                    ?>
                                        <small class="text-danger"><?php echo  $message; ?></small>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="<?php echo $response->last_name; ?>" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $response->email; ?>" class="form-control">
                            <?php
                                if (isset($emailError)) {
                                    ?>
                                        <small class="text-danger"><?php echo  $emailError; ?></small>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" value="<?php echo $response->mobile; ?>" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="Male" <?php echo ($response->gender=='Male') ? 'checked' : '' ?>>
                              <label class="custom-control-label" for="customRadio1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="Female" <?php echo ($response->gender=='Female') ? 'checked' : '' ?>>
                              <label class="custom-control-label" for="customRadio2" >Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                            <label>Hobby</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="hobby[]" value="Cricket" <?php if (in_array('Cricket', $newHobby)) {
                                	echo "checked";
                                } ?>>Cricket
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="hobby[]" value="Football" <?php if (in_array('Football', $newHobby)) {
                                	echo "checked";
                                } ?>>Football
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="hobby[]" value="Tenis" <?php if (in_array('Tenis', $newHobby)) {
                                	echo "checked";
                                } ?>>Tenis
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>City</label>
                <select name="city" class="form-control">
                    <option value="">Select</option>
                    <option value="Vadodara" <?php echo ($response->city=='Vadodara' ? 'selected': '') ?>>Vadodara</option>
                    <option value="Kolkata" <?php echo ($response->city=='Kolkata' ? 'selected': '') ?>>Kolkata</option>
                    <option value="Patna" <?php echo ($response->city=='Patna' ? 'selected': '') ?>>Patna</option>
                </select>
            </div>
            <div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>
		<?php
		
	} else {

		header("Location: 404.php");

	}

?>