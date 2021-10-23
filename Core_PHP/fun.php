<?php
	
	// Two Types of function 

	// 1. userdefined function = > getMyName()
	// 2. inbulit or pre defined function  = >strpbrk(haystack, char_list) , strlen(string)


	
	// function printMyName() {

	// 	echo "my Name is Sharvan kumar";

	// }

	
	// $nameN = "Kumar";


	// echo $nameN;


	// function printMyName() {
	// 	return "my Name is Sharvan kumar";
	// }

	// $name =  printMyName();

	// echo $name;
	

	// function sumOfDigits() {
	// 	$a = 5;
	// 	$b = 6;

	// 	//$c = $a+$b;  
	// 	echo $a+$b;

	// 	//return $c;

	// 	//return $a+$b;;
	// }

	//  sumOfDigits();

	
	// function getOurFullName($fname,$lastname) {

	// 	// echo $fname." ".$lastname;

	// 	return $fname." ".$lastname;
	// }

	// $fn = "Sharvan";
	// $ln = "Kumar";

	// echo getOurFullName($fn, $ln);


	// function sumOfNumbers($fn, $ln=0) {

	// 	return $fn+$ln;
	// }


	// echo sumOfNumbers(5);


	// function emailSend($emailId="sharvank1515@gmail.com") {

	// 	return $emailId;

	// }


	// echo emailSend("raj@gmail.com");
	// echo "<br>";
	// echo emailSend();
	// echo "<br>";
	// echo emailSend();
	// echo "<br>";
	// echo emailSend("amit@gmail.com");
	// echo "<br>";
	// echo emailSend();
	// echo "<br>";
	// echo emailSend("asdas@gmail.com");
	// echo "<br>";
	// echo emailSend();

	
	function evenOrCheker($value=0) {

		if ($value<=0) {
			$finalValue = "Wrong Input";
		} else {
			if ($value%2==0) {
				$finalValue = $value. " Even No";
			} else {
				$finalValue = $value. " Odd No";
			}
		}

		return $finalValue;

	}


	// echo evenOrCheker(46);

	
	// $a = 5;
	// $b = 8;
	// function abc() {
	// 	global $a, $b;
	// 	echo $a + $b;
	// }

	// abc();


	
?>