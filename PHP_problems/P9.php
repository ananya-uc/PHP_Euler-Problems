<?php
$a=0;
$b=0;
$c=0;
	for($i=1;$i<1000;$i++)
	  {
	   for($j=1;$j<1000;$j++)
	    {
	      for($k=1;$k<1000;$k++)
		{
		  if((pow($i,2)+pow($j,2))==pow($k,2) && $i+$j+$k==1000)
 		  {
			$a=$i;
			$b=$j;
			$c=$k;
			echo "\n".$i."\n".$j."\n".$k."\n";
			break 3;
		  }
		}
	   }
	 }
echo "abc= ".($a*$b*$c);
?>

