<?php include "header.php"; ?>
<h1>Hi! You are at Homepage</h1>
    <!-- when you have files with the same header or repeating code, you can make it into a single file and use php to "include " it in your other files
    Like here, i just sectioned off the header into header.php 
    there are 2 ways to include files, 
    - using "include" which gives you a warning if the included file doesnt exist, but runs the rest of the code
    - using "require" which gives you a fatal warning if the file doesnt exist and the rest of the program crashes
    to use require : require "file.php"
    
    include_once, "file.php" : no matter how many times the include statement is written if we use include_once, the file will only be included once and the other statements will be ignored
    require_once 

    if you include a php file, then you can use any functions declared inside of it-->
</body>
</html>