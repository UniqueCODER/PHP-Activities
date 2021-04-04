<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score and Grade</title>
    <style>
    h1{
        text-align: center;
        
    }
    h2{
        text-align: center;
        color: blue;
    }
    </style>
</head>
<body>
    
    <h2>
    <?php
            function gradeCalculator($score){
                if ($score < 70 ){
                    echo "Your grade is: D";
                }
                elseif ($score >=70  && $score < 80){
                    echo "Your grade is: C";
                }
                elseif ($score >=80  && $score < 90){
                    echo "Your grade is: B";
                }
                elseif ($score >=90  && $score < 100){
                    echo "Your grade is: A";
                }
            }
        ?>
    
    </h2> 
    <h1>
        <?php
        $score = rand(50,100);
        echo "Your score:$score/100 <br>";
        ?>
    </h1>      
    <h2>
        <?php
            gradeCalculator($score);
        ?>
    </h2>
       
</body>
</html>