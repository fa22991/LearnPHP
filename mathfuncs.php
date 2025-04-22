<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathfuncs.php" method="get">
        <label> x: </label>
        <input type="text" name ="x">
        <label> y: </label>
        <input type="text" name ="y">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
$x1 = $_GET["x"];
$y1 = $_GET["y"];
$absval = abs($x1);
$rounded = round($y1,2 /*2 places*/);
// floor, ceil, sqrt, pow, max, min, pi(), rand(min,max) 
echo $_GET["x"];
?>