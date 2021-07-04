<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.2;

// Arithmetic operations
echo ($a + $b) * $c .'<br>';
echo ($a - $c) . '<br>';
echo ($a * $b) . '<br>';
echo ($a / $b) . '<br>';
echo ($a % $b) . '<br>';


// Assignment with math operators
//$a += $b; echo $a .'<br';;

// Increment operator
//echo $a++ . '<br>';;
//echo ++$a; . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';;


// Number checking functions



// Conversion
$strnumber = '12.45';
$number = floatval($strnumber);
var_dump($number);

// Number functions
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2 , 3)" . pow(2 , 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
// Formatting numbers
$number= 123456789.12345;
echo number_format($number , 2 , ',', ' ');


// https://www.php.net/manual/en/ref.math.php
