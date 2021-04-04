<?php

    $A = array(2,4,10,16);
    function multiply($arr, $x)
    {
        foreach ($arr as $value) {
             $arr1[] = $value * $x;
          }
          return $arr1; 
    }
    $B = multiply($A,5);
    var_dump($B); 

?>