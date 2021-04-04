<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop down</title>
    <style>
    body{
        text-align: center;
    }
    h1{
        text-align:center;
    }
    </style>
</head>
<body>
    <h1> Drop Down </h1>
    <label>States</label>
    <select >
        <option>
            <?php
                $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
                statesArray($states);
            ?>
        </option>
    </select>
    <label>States</label>
    <select >
        <option>
            <?php
                $states = array( 'NJ', 'NY', 'DE');
                statesArray($states);
            ?>
        </option>
    </select>
    <label>States</label>
    <select >
        <option>
            <?php
                $states = array( 'ID', 'IL', 'IA','KS', 'KY', 'LA','ME','MD');
                statesArray($states);
            ?>
        </option>
    </select>
    <?php
        
        function statesArray($states){
            foreach($states as $item){
                echo "<option value='strtolower($item)'>$item</option>";
            }
        }
        
        ?>
    
</body>
</html>