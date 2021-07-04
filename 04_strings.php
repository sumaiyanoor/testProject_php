<?php

// Create simple string
$name = 'Lura';
$string1 = ' Hi I am  '.$name.'  I am 28 years old';
$string2 = "Hello I am $name . I am 29 years old";
echo $string1 .'<br>';
echo $string2 .'<br>';


// String concatenation
echo 'Hello '.' World '.' and PHP' .'<br>';;

// String functions
$string = "    Hello World   ";
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - ". ucwords('hello world') . '<br>';
echo "12- " . strpos($string, 'world') . '<br>';
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8 , 6) . '<br>';
echo "15 - " . str_replace('word','PHP',$string) . '<br>';
echo "16 - " . str_ireplace('word','PHP',$string) . '<br>';







// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php