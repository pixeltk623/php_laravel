


<?php  
$num = 123;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 123 is: $revnum"; 

echo"<br>";


$n = 1200;
$count = 0;


while($n!= 0) //can strlen be use here?
{
$n = $n/10;
++$count;
}
echo "Count result is $count";

//count with and without function 


echo"<br>";


$num = 18796;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  //strlen
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits 18796 is $sum";

 //-palindrome with and without function show.


 $num=607;  // 0, 1, 153, 370, 371 and 407
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}    
 
 echo "<br>";

?>  


