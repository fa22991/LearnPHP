<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "arrays.php" method="post">
        <!--checkboxes-->
        Apples <input type="checkbox" name="fruits[]" value="apples"><br>
        Pears <input type="checkbox" name="fruits[]" value="pears"><br>
        Grapes <input type="checkbox" name="fruits[]" value="grapes"><br> <!-- if you want the value of each of the checkboxes to be stored in the same place, pass in the same array name for each of them -->

        <input type="submit">
    </form>
</body>
</html>
<?php

$numbers = array(1,2,3,4,5); //heterogeneous

echo $numbers[0] . "<br>"; //1

array_push($numbers, 6,7,8);
//format : array_push(arrayname, element1, element2...elementn), adds elements 1 to n to the right of the array

array_pop($numbers);
//format : array_pop(arrayname), removes last element

array_shift($numbers);
//removes the first element from the array

array_unshift($numbers, 7); //adds 7 to the start of the array
$reversed = array_reverse($numbers); //returns the reversed array and stores it in a variable
count($numbers);
//foreach loop

foreach($numbers as $number){
    echo $number . '<br>';
}
if (isset($_POST["fruits"])){
    $fruits  = $_POST["fruits"];
    foreach($fruits as $fruit){
        echo $fruit." ";
    }
}

//explode and implode
//explode : basically like split(), format: explode("delimeter", variable);
$string = "1,2,3";
$fruits = array("apple", "banana", "grape");
$array_string = explode(',', $string);

//implode: combines the elements from the array into a string seperated by the given delimeter
implode(" ", $fruits);

//in_array
in_array("Apple", $fruits); //returns true

//combine arrays
array_merge($fruits,$numbers);

//you can use 'spread', ...$array_name, which basically expands the array into its consistent elements
$merged = [...$fruits, ...$numbers];

//sort 
sort($numbers);

//reverse sort
rsort($numbers);
?>