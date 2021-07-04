<?php

// Create array
/* $fruits=["Apple","Orange","Banana"];

// Print the whole array
echo '<pre';
var_dump($fruits);
echo'</pre>';
// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[3]);
// Append element
$fruits[]='Apple';
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count ($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, '');
echo '<pre>';
var_dump($fruits);
echo'</pre>';


// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits);
echo '<pre>';
var_dump($fruits);
echo'</pre>';


// Remove element from the beginning of the array
//echo array_shift($fuits);


// Split the string into an array
$string ="Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo'</pre>';

// Combine array elements into string
echo implode("&",$fruits);
// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Orange',$fruits));
echo'</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Orange',$fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["potato","cucumber"];
echo '<pre>';
var_dump(array_merge($fruits,$vegetables));
var_dump([...$fruits,...$vegetables]);
echo '</pre>';
// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';
sort($fruits);
echo '<pre>';
var_dump($fruits);
//echo '</pre>'; */

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'brad',
    'surname' => 'traversy',
    'age' => 30,
    'hobbies' =>['tennis','video games'],

];
echo '<pre>';
var_dump($person);
echo '/<pre>';


// Get element by key

echo $person['name'].'<br>';


// Set element by key


$person['channel']= 'traversuMedia';
echo '<pre>';
var_dump($person);
echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4
$person['address']??= 'unknown';
echo '<pre>';
var_dump($person);
echo'</pre>';
// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';
 
// Two dimensional arrays