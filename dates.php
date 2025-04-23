<?php
date('Y-m-d H:i:s'); //year, month, day, hour, min, sec
date('F j Y H:i:s'); //year, month, day in written format , hour, min, sec 

echo time(); //current time
$parsed = date_parse('2025-4-22 17:52:20'); //returns an associative array with corresponding year, month, day values etc

?>