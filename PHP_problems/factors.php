<?php
//This function will return the number of factors of an number
include "prime.php";
function no_of_factors($n)
          {
                  $f[] = array();
                  $num = $n;
                  for($i = 2; $i <= sqrt($n); $i++)
                  {
                          while($n % $i == 0)
                          {
                                  $n = (int)$n / $i;
                                  $f[] = $i;
                                  if(Prime($n))
                                  {
                                          $f[] =(int)$n;
                                         break 2;
                                  }
                          }
                  }
                  $ff = array_count_values($f);
                  //print_r($ff);
		  foreach($ff as &$v)
		  {
			  $v += 1;
		  }
               return array_product($ff);
         }

?>



