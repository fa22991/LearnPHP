<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "variable_stats.php">
        <label> username: </label>
        <input type="text" name="username"><br>
        <label> password </label>
        <input type="password" name = "password"><br>
        <input type="submit" name="login" value="Log in">
        
    </form>
</body>
</html>
<?php 
// isset() : TRUE if variable is declared and not null
// empty() : TRUE if variable is not declared, false, null or ""
//or use ??=
$person ??= "unknown"; //if person isset($person) is false, set it to unknown, same as saying : 
                        // if (!isset($person)) {
                        //     $person = "unknown";
                        // }
$var = "hello";
var_dump($var); //returns the type and value of the variable
print_r($var);  //nicer, more formatted, var_dump
gettype($var); //type of the variable

is_string($name);
is_int($var);
is_bool($var);
is_double($var);

//constants
define("nameofconstant", "value");
echo nameofconstant;

//predefined constants:
PHP_INT_MAX;

//typecasting
$number = (int) 3.14;
//parsing strings to floats or ints
$strnum = "12.34";
$num = floatval($strnum);
$formatted = $number_format($num, 2, '.', ','); //var, no. of dec places, dec point, thousands seperator

?>