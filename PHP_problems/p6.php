<?php
$result1=0;
$result2=0;
	for($i=1;$i<=100;$i++)
   	{
	  $result1+=pow($i,2);
        }
 	echo "Sum of the squares ".$result1. "\n";
        for($i=1;$i<=100;$i++)
        {
          $result2+=$i;
        }
	echo "Sum of the integers".$result2."\n";
        $r=pow($result2,2);
        echo "Square of the sum".$r."\n"; 

echo "Results is " .($r-$result1). "\n";
?>
