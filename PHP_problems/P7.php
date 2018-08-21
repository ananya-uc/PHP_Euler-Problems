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


	class Location_prime
  	{
	  function l_Prime()
	  {
//		$ar = array();
		$c = 1;
		$loc = 10001;
		for($i = 3;$i <= 1000000 ;$i+=2)
		{
			if(Prime($i))
			{
//				$ar[] = $i;
				$c++;
			}
			if($c==$loc)
			{
				return $i;
			}
		}
  //            return $ar;
	 }
       }


$ob = new Location_prime();
//$p = $ob -> l_Prime();
//print_r($p);
echo $ob -> l_Prime();

?>

