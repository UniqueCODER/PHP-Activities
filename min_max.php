<?php
$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);


function get_min_max($sample){
    $new_arr =[];
    $max = $sample[0];
    $minimum = $sample[0];
    for ($i = 1;$i < count($sample);$i++) {
        if ($sample[$i] > $max) {
            $max = $sample[$i];
        }
    }
    array_push($new_arr,$max);
    for ($i = 1;$i < count($sample);$i++) {
        if ($sample[$i] < $minimum) {
            $minimum = $sample[$i];
        }
    }
    array_push($new_arr,$minimum);
    
    var_dump($new_arr);
}
get_min_max($sample);
?>