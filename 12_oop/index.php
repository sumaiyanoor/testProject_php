<?php
 


// What is class and instance
class person {
    public $name;
    public $surname;
    private $age;
    public static $counter =0;
    public function __construct($name, $surname)
    {
        
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    public static function getCounter()
    {
        return self::$counter;
    }
    

        
    
}
$p = new person("Brad","Traversy");
$p->setage(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();


$p2 = new person('sumaiya','noor');
echo '<pre>';
var_dump($p2);
echo '</pre>';
echo person::$counter;

//echo $p->name . '<br>';
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter