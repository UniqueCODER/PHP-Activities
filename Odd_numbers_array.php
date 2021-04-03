<?php
$numbers=array();
    for ($x = 0; $x<=20000; $x++) {

        if($x%2 !=0){
            $numbers[] = $x;  
        }
       
    }  
      echo  "<br>" .var_dump($numbers) . "<br>";     
?>  