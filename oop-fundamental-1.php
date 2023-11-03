<?php

class Human{
    
    public $name;
    public $age;
    function sayHi(){
        echo "Hello\n";
    }
    // methods
    function sayDetails(){
        echo "My name is {$this->name}. I am {$this->age} Years old";
    }

}

Class Cat{

    function sayHi(){
        echo 'Meow';
    }
}

Class Dog{
     function sayHi(){
        echo 'Wolf';
     }
}

$human = new Human();
$human->sayHi(); //get property
$human->name='Nawjesh';//set operation
$human->age='32';
echo '<br>';
$human->sayDetails();// get operation

echo '<br>';

$cat = new Cat();
$cat->sayHi();

echo '<br>';

$dog = new Dog();
$dog->sayHi();
