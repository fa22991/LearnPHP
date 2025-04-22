
<?php
     //sets counter to 0 is "counter" key doesnt exist
    if($_SERVER["REQUEST_METHOD"] == "post"){ /*checks if the form has been submitted, you can also use isset() for this purpose */
    
    $counter = $_POST["counter"] ?? 0;
    //for loop

    //initialize conditional increment
    for($i = 1; $i<=$counter; $i++){
        echo $i . "<br>";
    }

    //while loop

    while($counter <= 20){
        echo $counter . "<br>";
        $counter++;
    }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loops.php" method = "post">
        <label> Enter a number to count to: </label>
        <input type="text" name="counter">
        <input type="submit" value="count!">
    </form>
</body>
</html>