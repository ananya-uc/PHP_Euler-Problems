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
                           return 1;//prime then return 1
  
  
               }
?>

