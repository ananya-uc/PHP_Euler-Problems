<?php

	class A
	{	
		public $a=array();

		function large_prime($n)
		{
			while($n % 2 == 0)
			{
			 	$a[]=2;
			        $n/=2;
			}
			
			for($i = 3; $i <= sqrt($n); $i = $i + 2)
			{
				while($n % $i == 0)
				{
		 			$a[] = $i;
					$n /= $i;
				}
			}
			
			if($n > 2)
			{
				$a[] = $n;
			}
		return max($a);
		}
        }


$ob = new A();
$num = 600851475143;
$arr = $ob -> large_prime($num);
echo $arr;

?>
