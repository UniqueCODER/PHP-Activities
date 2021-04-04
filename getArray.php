<?php
    $A = array(2,3,"hello");
    function print_lists($arr)
    {
        foreach ($arr as $value) {
            echo '<li>' . $value . '</li>';
          }
    }
    print_lists($A);
   
?>