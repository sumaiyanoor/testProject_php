<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';


echo __LINE__.'<br>';
// Create directory
//mkdir('test');

/* // Rename directory
rename('test','test2');
// Delete directory
rmdir('test2'); */


// Read files and folders inside directory

// file_get_contents, file_put_contents
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt','some content');

// file_get_contents from URL
$userJeson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
echo $userJeson;
$users = json_decode($userJeson);
echo '<pre>';
var_dump($users);
echo '</pre>';
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file