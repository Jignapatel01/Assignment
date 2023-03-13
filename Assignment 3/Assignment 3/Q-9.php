<?php
$a='1';
$b=&$a;
$b="2$a";

echo $a. "".$b;

?>


$a='1' -> this is assign a '1' is a stirng value. 
$b=&$a -> $a pass its refrence to assign its value of $b.
$b="2$a" -> $b concante a value of $a and "2$a" is  a string that is value of $b is a 21 and value of $a is 21.

 Answer is $a is 21 and answer of $b is 21 .
