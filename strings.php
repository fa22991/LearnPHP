<?php
$string = "hello";
strtolower($string); //convert to lowercase
strtoupper($string); //convert  to uppercase
strlen($string); //length of string
$first = $string[0]; // index 0
str_replace("h", "b", $string);
substr($string, 0, 3); //string, start, no. of characters
trim($string);
str_word_count($string);
strrev($string);
ucfirst($string);
lcfirst($string);
// ucwords(), strpos(), stripos() case insensitive, str_replace(), str_ireplace()
$multilinetext  = "hello
                    I am multiple lines
                    of content";
nl2br($multilinetext); //adds br at the end of each line
htmlentities($string); //if a string contains html tags, displays them as tags and not the effects
html_entity_decode($string); //html to text
//madlibs  

if (isset($_GET["noun"]) && isset($_GET["verb"]) && isset($_GET["adj"])){
    $noun = $_GET["noun"];
    $verb = $_GET["verb"];
    $adj = $_GET["adj"];
    echo "{$noun} are {$adj} <br>
          Violets are blue <br>
          I {$verb} you";
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
    <form action="strings.php" method = "get">
        <label>Noun: </label>
        <input type="text" name="noun">
        <label>verb: </label>
        <input type="text" name="verb">
        <label>adjective: </label>
        <input type="text" name="adj">
        <input type="submit" value="submit">
    </form>
</body>
</html>