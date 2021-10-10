<?php 
	
	// Switch case statements are a substitute for long if statements that compare a variable to several integral values 

	// The switch statement is a multiway branch statement. It provides an easy way to dispatch execution to different parts of code based on the value of the expression.

	// Switch is a control statement that allows a value to change control of execution.
	
	$a = 5;

	$b = 2;

	$operator = "+";

	switch ($operator) {
		case '+':
			echo $a+$b;
			break;
		case '-':
			echo $a-$b;
			break;
		case '*':
			echo $a*$b;
			break;
		case '/':
			echo $a/$b;
			break;
		
		default:
			echo "Error";
			break;
	}

	$date = date("l");

	switch ($date) {
		case 'Sunday':
			echo "Today is ". $date;
			break;
		case 'Monday':
			echo "Today is ". $date;
			break;
		case 'Tuesday':
			echo "Today is ". $date;
			break;
		case 'Wednesday':
			echo "Today is ". $date;
			break;
		case 'Thursday':
			echo "Today is ". $date;
			break;
		case 'Friday ':
			echo "Today is ". $date;
			break;
		case 'Saturday':
			echo "Today is ". $date;
			break;
		default:
			echo "Error";
			break;
	}

?>