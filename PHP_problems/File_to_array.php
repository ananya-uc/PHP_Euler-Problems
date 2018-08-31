<?php 
function file_array($name)
           {
                   $mat = array();
                   $fp=fopen($name,"r");
                   if(!$fp)
                   {
                          echo "can't open file";
                  }
  
                  while(! feof($fp))
                  {
                          $row = fgets($fp);
                          $mat[] = explode(' ',$row);
                  }
                  array_pop($mat);
                  return $mat;
         }
?>
