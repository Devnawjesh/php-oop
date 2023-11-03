<?php

class Human{
    
    public $name;
    public $age;
    public $color;
    function sayHi(){
        echo "Hello\n";
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
$human->sayHi();
$human->name='Nawjesh';//set operation
$human->age='32';
$human->color='fair';

echo $human->name;// get operation
echo $human->age;
echo $human->color;

echo '<br>';

$cat = new Cat();
$cat->sayHi();

echo '<br>';

$dog = new Dog();
$dog->sayHi();
