<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php

echo " <h1> Swap without 3rd variable</h1>";




$a= 2;
$b= 3;


echo "the numbers before swap are"  ,$a ,"&", $b;

echo "<br>";

$a = $a + $b;

$b = $a - $b;

$a = $a - $b;

echo "the numbers after swap are"  ,$a ,"&", $b;

"<br>";


echo " <h1>Area of triangle </h1>";
 
 $s1= 20;
 $s2= 30;

 $s3 = 40;

echo " the sides of triangle are " , $s1, ",", $s2, ",", $s3;


echo " <h1>Kilometers to mile conversion </h1>";


$a= 12;

echo "value in KM". $a;
echo "<br>";

$b = 0.62137119 * $a;

echo "<br> ";

echo " value in mile ", $b;




"<br>";


echo " <h1>F to C </h1>";

echo "<br>";
$a = 13;

echo "value in F" . $a;

$b= ($a - 32)/1.8000;
echo"<br>";

echo " value in C" . $b;





echo ""













 


?>



</body>
</html>
