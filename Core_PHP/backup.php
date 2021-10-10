<?php 
	

	// $number = 12;

	// $number2 = "120";

	// echo $number===$number2;


	// if ($number>0) {
	// 	echo $number." Positive Number";
	// }



	// if ($number>0) {
	// 	echo $number." Positive Number";
	// } else {
	// 	echo $number." Negative Number";
	// }

	// if ($number%2==0) {
	// 	echo $number." Even Number";
	// } else {
	// 	echo $number." Odd Number";
	// }

	// if ($number>0) {
	// 	if ($number%2==0) {
	// 		echo $number." Even Number";
	// 	} else {
	// 		echo $number." Odd Number";
	// 	}
	// } else {
	// 	echo "Invalid Number";
	// }



	// $a = 16;

	// $b = 16;

	// $c = 16;

	// if ($a>$b && $a>$c) {
	// 	echo $a. " A";
	// } elseif ($b>$a && $b>$c) {
	// 	echo $b. " B";
	// } elseif ($b==$a && $b==$c) {
	// 	echo "All Numbers are same";
	// } else {
	// 	echo $c. "C";
	// }


	// Mobile Apps 
	// 	Core Java Or kotlin
	// 	XML 
	// Install AS 
	// 	XML =>  Design (UI & UX )
	// 	Behind The scene (Backend)
	// 		Bysiness Logic
	// 		Java
	// Firebase 
	// HTML 
	// CSS 
	// Js (ES6) (BS)
	// 	React Native (Js)

	// Java (Spring)
	// .net 

	// PHP

	// Python

	// Java 

	// Flutter (dart)


	//The isset() function is an inbuilt function in PHP which checks whether a variable is set and is not NULL. This function also checks if a declared variable, array or array key has null value, if it does, isset() returns false, it returns true in all other possible cases
		

	$className = 'alert-success';
	

	// if (isset($name)) {
	// 	echo "Hello";
	// } else {
	// 	echo "Nothin";
	// }

	// echo (isset($name)) ? $name : 'nothing';
	// (expression) ? '' : '';

	// if (false) {
	// 	echo "string";
	// }

	// if (false) {
	// 	echo "True";
	// } else {
	// 	echo "False";
	// }

	// $name = NULL;

	// echo isset($name);
	
	// $a = 20;

	// $b = 2;

	// +
	// echo $a + $b; //22
	// echo "<br>";
	// // -
	// echo $a - $b; // 18
	// echo "<br>";
	// // *
	// echo $a * $b; // 40
	// echo "<br>";
	// // / 
	// echo $a / $b; // 10
	// echo "<br>";
	// // %
	// echo $a % $b; // 0
	// echo "<br>";
	// // >
	// echo $a > $b; // 1
	// echo "<br>";
	// // <
	// echo $a < $b; // 0
	// echo "<br>";
	// // >=
	// echo $a >= $b; // 1
	// echo "<br>";
	// // <=
	// echo $a <= $b; // 0
	// echo "<br>";
	// // ===
	// echo $a === $b; // 1
	// echo "<br>";
	// // ==
	// echo $a == $b; // 0 
	// echo "<br>";
	
	// // !=
	// echo $a != $b; // 1
	// echo "<br>";
	// && 
	// echo $a>$b && $a>50;
	// echo "<br>";
	// echo $a>$b OR $a>50;
	// echo "<br>";
	// $isStatus = false;
	// echo !$isStatus;
	// OR
	// !
	// echo "Hello This is Kumar";
	// echo "<br>";
	// echo 5;
	// echo "<br>";
	// echo 5.8;
	// echo "<br>";
	// echo true;
	// $isStatus = true;
	// var_dump($isStatus);
	// die;
	echo "<br>";
	//$num1 = (int) "5";
	$num1 = "5";
	$num2 = "6";

	var_dump($num1+$num2);

	echo "<br>";
	echo $num1+$num2;

	echo "<br>";
	var_dump($num1);

	// die();

	echo "<br>";
	$urlOfGoogle = "https://www.google.com/";

	$number = 1;

	var_dump($number);

	var_dump($urlOfGoogle);

	$firstName = "Sharvan";

	$lastName = "Kumar";

	echo "<h2>".$firstName." ".$lastName."</h2>";

	// print_r(array("5","6"))

	//array(5,true,5.8)

	// if (condition) {
	// 	# code...
	// }

	// if (isset($_POST['submit'])) {
		
	// 	$name = $_POST['name'];

	// 	if ($name=='') {
	// 		$newClass = "is-invalid";
	// 	} else {
	// 		$newClass = "is-valid";
	// 	}
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo $urlOfGoogle; ?>">Google</a>
	<h1><?php echo "Hello This is ". $firstName." ".$lastName; ?></h1>

	<h2><?php echo isset($name) ? $name : ''; ?></h2>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">
    	/*h1 {
    		background-color: <?php echo "green"; ?>;
    	}*/
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
    	<div class="alert <?php echo $className; ?>">
    		Alert
    	</div>

    	<form method="post">
    		<input type="text" name="name" class="form-control <?php echo (isset($newClass)) ? $newClass : ''; ?>">
    		<br>
    	 	<input type="submit" name="submit" class="btn btn-danger">
    
    	</form>

    	 


    </div>




    <script type="text/javascript">
    	
    
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>