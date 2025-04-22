<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getandpost.php" method="get">
        <label>username:</label>
        <input type="text" name = "username"> <br>
        <label>password:</label>
        <input type="password" name = "password"> <br>
        <input type="submit" value ="Login">
    </form>
    <form action="getandpost.php" method="post">
        <label>username:</label>
        <input type="text" name = "secusername"> <br>
        <label>password:</label>
        <input type="password" name = "secpassword"> <br>
        <input type="submit" value ="Login">
    </form>
</body>
</html>
<?php
//$_GET and $_POST : global variables used to collect data from an HTML form
//$_GET is an array of inputs recieved from the user. you can access what the input is for through the name of the input box

echo $_GET["username"] . "<br>"; // the . is used for concatenation
echo $_GET["password"];

// now the problem with get is that it appends information (which might be sensitive like passwords!) to the url, which makes it less secure
//this is where post comes in, it does the same thing but without appending info to the url

/*$_GET : data is appended to the url
          NOT SECURE
          char limit 
          Bookmark is possible w values
          GET requests can be cached
          better for a search page
    $_POST : data is packaged is packaged inside the body of the http request
             more secure
             no data limit
             cannot bookmark
             GET requests are not cached 
             better for submitting credentials
*/

echo $_POST["secusername"] . "<br>"; // the . is used for concatenation
echo $_POST["secpassword"];

?>