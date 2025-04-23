<?php 
//magic constants : constants that change value based on execution context 
echo __DIR__.'<br>'; //current directory where file is located
echo __FILE__.'<br>'; //current file
echo __LINE__.'<br>'; //line on which code is written

//create directory
mkdir("test");

//rename directory
rename("test", "final");

//remove directory
rmdir("final");

//reading files
//file_get_contents("file.txt");

//all the files in the current dir
$files = scandir('./');

//all the files in the parent dir
$parentfiles = scandir('../');

//writing to files
//file_put_contents('file.txt', 'content');
//you can also read contents from a url, for example json objects. to decode json objects, use
//json_decode($filecontents);
//this by default converts the contents to an obj, but by putting true as the next parameter you can convert it into an array

file_exists("filename");//bool, false here
is_dir("test"); //also false


?>
</body>
</html>