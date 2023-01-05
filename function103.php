<?php
//Anonymouse functions
$message = "Hello!";
$age = 25;
$hi = function($name)use($message,$age){
        return array($message,$name,$age);      
};

// msg = $hi('Mark);
// print($msg[0].$msg[1].$msg[2]);
[$message,$name,$age] = $hi("Mark");
print($message . $name .", Age: $age");