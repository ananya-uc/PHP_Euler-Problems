<?php
	$a=array();
	$million=4000000;
	$prev=0;
	$next=1;
	$sum=0;
	$value=$million;
	for($i=0;$i<$million;$i++)
	{
	
		if($value<$million && $value%2==0)
                 {
                	$a[]=$value; 
		        $sum+=$value;
                 }

		$value=$prev+$next;
		$prev=$next;
                $next=$value;
		
	}
//print_r($a);
echo "Sum of 1st 4million fib series even numbers will be ".array_sum($a);
echo "Sum value ".$sum;
?>
