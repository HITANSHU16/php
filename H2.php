<?php

function prime($a)
{
for($i=1;$i<=$a;$i++)
{
	$c=1;
$b = "Prime";
for($j=2;$j<$i;$j++)
{
if($i%$j==0)
{
$b ="Not Prime";
$c=0;
break;
}
}                                                                       
echo $i." ". $b."<br>";
if($c==1)
{
for($k = 1;$k<=10;$k++)
{
	echo "$i"."*"."$k"."=".$i*$k."<br>";
}
	
	
	
	
	
	
	
}
}
}
prime(13);

?>