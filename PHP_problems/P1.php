<?php
$t=array();
$f=array();
$r=99;

$res=0;

for($i=3;$i<$r;$i+=3)
{
	$t[]=$i;
}
print_r ($t);


for($i=5;$i<$r;$i+=5)
{
	$f[]=$i;
}




//3 special and 5 specila sum
$sum3=array_sum($t);
$sum5=array_sum($f);

$ttff=array_intersect($f,$t);
print_r($ttff);
$sumdiff=array_sum($ttff);

$res=$sum3 + $sum5 - $sumdiff;


echo "The sum of 3 and 5 multipliers are".$res;
?>
