
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
    <form action = "associativearrays.php" method = "post">
        <label> Country </label>
        <input type="text" name="country"> 
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
//associative arrays : key=>value pairs, dictionaries of php

$capitals = array("USA"=> "Washington DC",
                  "Japan"=> "Kyoto",
                  "India"=> "New Delhi");

echo $capitals["USA"]; //USA is the key, Washington DC is the value.
                       //This statement basically prints the value of $capitals at key USA
$keys = array_keys($capitals); //all keys
$values = array_values($capitals); 
//$capitals = array_flip($capitals); //keys become values and vice versa

$country = $_POST["country"];
echo $capitals[$country];
?>
