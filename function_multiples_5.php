<?php
     
    function multipleOfFive($value){
        for ($number = 0; $number <= $value; $number+=5) {
            if($number==0){
                echo"<br";
            }
                echo "$number is multiples of 5 <br>";
        }
    }
    multipleOfFive(10);
?>