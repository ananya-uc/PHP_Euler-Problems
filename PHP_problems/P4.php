<?php

function palindrom($num)
{
	$rem=0;
	$c=$num;
        while((int)$num!=0)
	{
		$rem=($rem*10)+($num%10);
		$num=(int) $num/10;
	}
	//echo $rem;
	if($rem==$c)
	   return 1;
	else 
           return 0;
}



$max=0;
for($i=100;$i<=999;$i++)
{
  for($j=100;$j<=999;$j++)
  {
   $v=$i*$j;
   if(palindrom($v) &&  $v>$max)
   {
    $max=$v;
    $k=$i;
    $n=$j;
//    echo $max;
   }
  }
//echo "Largest plindrom with multiplying thee digit numbers will be ".$max;
}
echo "Largest plindrom with multiplying three digit numbers will be ".$i."*".$j."=".$max;
?>	
