<?php
    $users['first_name'] = "Michael";
    $users['last_name'] = "Choi";
    
    function keyVal($users){
        echo "There are 2 keys in this array: <br>";
        echo "$key <br>";
        foreach($users as $key => $value) {
            echo "The value in the '$key' is '$value'. <br>";
        }
    }

    keyVal($users);
?>