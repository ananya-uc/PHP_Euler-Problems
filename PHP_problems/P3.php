<?php
$n=600851475143;
$arr=array();
$c=0;
while ($n%2 == 0)
{
   $arr[]=2;
   $n = $n/2; 
  $c++;
}


for ($i = 3; $i <= sqrt($n); $i = $i + 2)
{
    while ($n % $i == 0)
    {
        $arr[]=$i;
        $n =$n/$i;
	$c++;
    }
	if($n % $i !=  0)
	{
        	$c++;
	}

}

 


if ($n > 2)
    $arr[]=$n;


$max=max($arr);
echo $max;
echo "\n".$c;
?>
