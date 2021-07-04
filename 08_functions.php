<?php

// Function which prints "Hello I am Zura"
/* function hello()
{
    echo "Hello I am Zura";
}
hello();
hello();
hello();
 */
// Function with argument
/* function hello($name)
{
    return "Hello I am $name";
}
echo hello('Zura').'<br>';
echo hello('Brad').'<br>';
 */
// Create sum of two functions
/* function sum($a,$b)
{
    return $a+$b;
}
echo sum(5,8);
 */
// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
    $num = 0;
    foreach ($nums as $n){
        $num +=$n;
    }
    return $num;

}
echo sum(1,2,3,4,5,6);
// Arrow functions
