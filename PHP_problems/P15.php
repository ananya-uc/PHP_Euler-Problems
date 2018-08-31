<?php


class Euler15
{
	function pathInMatrix($n) {
		$path = 1;
		for($i = 0; $i < $n; $i++) {
			$path *= (2 * $n) - $i;
			$path /= $i+1;
		}
		echo $path;
	}
	
}

$ob = new Euler15();
$ob -> pathInMatrix(20);

?>

