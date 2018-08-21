<?php



function Prime($n)
                  {
                          for($j = 2;$j <= sqrt($n);$j++)
                          {
                            if( $n % $j == 0)
                            {
                                  return 0;
                           }
                          }
			 return 1;	 			  
                                 
                          
                }

	class P
	{
		



		function Prime_sum($num)
		{
			$sum=2;		
//			$prime = array('2');

			for($i = 3;$i < $num;$i+=2)
			{
		
			   if(Prime($i))
				{
	    			 $sum+=$i;
//	 		         $prime[]=$i;
				}
      		        } 
		return $sum;
//		return $prime;
		}
	}


$ob = new P();
$a=$ob -> Prime_sum(2000000);
//print_r($a);
echo $a;
?> 		
