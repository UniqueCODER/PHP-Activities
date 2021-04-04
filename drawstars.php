<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Stars</title>
    <style>
    h3{
        text-align: center;
    }
    </style>
</head>
<body>
    <h3>
    <?php
    echo "DRAW STARS<br>";
        $z = array(4, 6, 1, 3, 5, 7, 25);
        function drawStars($z){
        for ($x=0; $x<sizeof($z); $x++){
            for ($y=1; $y<=$z[$x]; $y++){
                echo "*";
            }  
            echo"<br>";    
        } 
        }
        drawStars($z);

      //Part 2 not yet done 
      //$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
        //**** 
//ttt 
//* 
//mmmmmmm 
//***** 
//******* 
//jjjjjjjjjjj


    ?>
    </h3>
</body>
</html>