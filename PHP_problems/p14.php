<?php
include "odd_even.php";

	class Euler14
	{
		function Collatz()
		{
			$chain = array();
			$v = 0;
			$c = 0;
			$keys = array();
			for($i =1;$i < 10;$i++)
			{
				$key = array_keys($chain);
				print_r($keys);
                    		//$value[] = array_values($chain);
				while($v != 1)
				{
					if($j = 0;$j < count($chain); $j++)
					{
						if($v == $key[$j])
						{
							$c += $chain[$j];
							break 2;
						}
					}
					
					if(even($i))
					{
						$v = (int) $i / 2;
						$c++;
					}
					else
					{
						$v = (3 * $i) + 1;
						$c++;
					}
				}
				$chain[$i] = $c;
			}
		//	print_r($chain);
			return $chain;
		}
	}


$ob = new Euler14;
print_r($ob -> Collatz());

//echo $ob -> Collatz();

?>
