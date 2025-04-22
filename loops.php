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
<?php
    $counter = $_POST["counter"]; //sets counter to 0 is "counter" key doesnt exist

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

    //now the problem with this entire block of code that i just wrote
    //is that even before i submit an input through my text field, the counter initializes to 0 and so
    //by default the numbers 1 to 20 are printed. this error is solved in loops_solved.php
?>