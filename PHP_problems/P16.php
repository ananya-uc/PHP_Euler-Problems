<?php

function largePower(int $x, int $y)
{
	$str = bcpow($x, $y);
	$result = 0;
	for( $i = 0; $i <= strlen($str); $i++ ) {
	$result +=(int) substr( $str, $i, 1 );
	}
	echo $result;
}


largePower(2,1000);

?>
