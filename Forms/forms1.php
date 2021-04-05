<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    body{
        margin: 0 auto; 
        background: black;
        color: white;
       
       
    }
    form{
        margin: 20px 500px; 
    
    }
    input, select{
        display: block;
    }

    </style>
</head>
<body>
    <?php echo"Snow drop";?>
    <form action="form1_action.php" method="post">
        Your name: <input type="text" name="fname" /> 
        Dojo Location:
            <select name="location">
                <option value="ph ">Philippines</option> 
                <option value="jp ">Japan</option>  
                <option value="sk ">South Korea</option>  
                <option value="us ">USA</option>   
                       
            </select>
        Programing language:
            <select name="language">
                <option value="js ">Javascript</option> 
                <option value="py ">Python</option> 
                <option value="php ">PHP</option>            
            </select>   
        Comment: <input type="text" name="comment" />
        <input type="submit" value="submit">
    </form>
</body>
</html>