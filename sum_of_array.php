<?php

      $numbers= array(1, 2, 5, 10, 255, 3);
      $sum = 0;
      for ($x = 0; $x <= sizeof($numbers)-1; $x++) {
            echo  $sum += ($numbers[$x]);
            echo "<br>";
      }
      
      echo $sum ." is the total sum";

?>