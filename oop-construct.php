<?php

Class Human{

    public $name;
    public $age;

    public function __construct($personName,$personAge=0){
        $this->name=$personName;
        $this->age=$personAge;
    }

    public function sayName(){
        if($this->age){
            echo "Hello! My name is {$this->name}. I am {$this->age} years old.";
        } else {
            echo "Hello! My name is {$this->name}. I don't know how old I am.";
        }
    }
}

$human = new Human('Nawjesh','32');//initiate object and pass attribute
$human2 = new Human('Nawjesh');

$human->sayName();
echo "<br>";
$human2->sayName();