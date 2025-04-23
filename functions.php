<?php 

function sayHi($name, ...$rest_params){
    return "hi " . $name;
}
$result = sayHi("world", 1,2);

//arrow functions
$nums = [1,2,3,5,6,];
//array_reduce : same as js reduce()
array_reduce($nums, fn($total, $n) => $total + $n);


?>