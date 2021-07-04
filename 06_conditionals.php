<?php

$age = 25;
$salary = 300000;

// Sample if
/* if ($age==20){
    echo"1";
}

// Without circle braces

if ($age === 20) echo "1";

// Sample if-else
if($age>20){
    echo "1";
}else{
    echo "2";
} */

// Difference between == and ===

if ($age == 20){
    echo "1".'<br>';
}
if($age == '20'){
    echo "2".'<br>';
}
// if AND

if($age >20 || $salary=== 300000){
    echo "Do something";
}
// if OR

// Ternary if
echo $age<22? 'Young' : 'Old';
// Short ternary
$myage = $age?:19;
echo '<pre>';
var_dump($myage);
echo '</pre>';

// Null coalescing operator
$myname = isset($name) ? $name : 'Mona';
$myname = $name ?? 'mona';


// switch
