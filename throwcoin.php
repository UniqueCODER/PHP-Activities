<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throw Coin</title>
    <style>
    h3{
        text-align: center;
    }
    </style>
</head>
<body>
    <h3>
    <?php
    echo "5,000 Coin throws <br> ";
    $head = 0;
    $tail = 0;
    for ($x=1; $x<=5000; $x++){
        $coin = rand(1,2);
        if($coin==1){
            $coin_rest = "Head";
            $head++;
        }
        elseif($coin==2){
            $coin_rest = "Tail";
            $tail++;
        }
        echo "Attempt #$x: Throwing a coin...It's a $coin_rest.. Got $head head(s) so far and $tail(s) so far<br>";  
    } 
    echo "Ending the program - thank you!";
    ?>
    </h3>
</body>
</html>