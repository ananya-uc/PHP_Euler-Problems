<?php
	$i=2520;
	$f=false;
	while(!$f)
	{
		 $i+=2520;
		 $div=true;
 		 for($j=11;$j<=20;$j++)
 		{ 
 		  if($i%$j!=0)
    		  {
    		     $div=false;
     		     break;
    		  }
		 }

	 if($div)
	 {	
	   $f=true;
	 }}
echo $i;
?>
     
