<?php
/* $age = -5;
if($age > 0){
    echo "number is positive! "; echo $age;
}
else if($age==0){
    echo "number is "; echo $age;
}
else{
    echo "number is negative"; echo $age;
} */

$name = array('nayemul','mona','faysal','cocacola','khusbo','alam');
asort($name);
print_r($name);
echo '<br />';
rsort($name);
print_r($name);
?>