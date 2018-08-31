<?php
  include "File_to_array.php";

	class Euler13
	{

		function ReturnTenDigits($arr)
		{
			$v = array();
			for($i =0;$i < 100;$i++)
			{
				$s = (string)$arr[$i][0];
				$v[] = (substr($s,0,10));
			}
			return $v;
		}

//		function 

	}


$ob = new Euler13();

$a = file_array("numbers.txt");

//print_r($a);

$value = $ob -> ReturnTenDigits($a);

//print_r( $value);

$ans = array_sum($value);

$string1 = (string)$ans;

$end = (int)substr($string1,0,10);

echo ($end+1);

?>
