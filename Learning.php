<?php

class fruit{

    //Properties
    public $name;
    public $color;

    // Methods

    function set_name($name){

        $this->name=$name;

    }

    function set_color($color){
        $this->color=$color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$first_Fruit = new Fruit();
$second_Fruit = new Fruit(); 


$first_Fruit->set_name('Carrot');
$first_Fruit->set_color('Red');
$second_Fruit-> set_name('Orange');
$second_Fruit->set_color('Green');


echo $first_Fruit->get_name() . " is ". $first_Fruit->get_color() . " While";
echo "<br>";
echo $second_Fruit->get_name() . " is " . $first_Fruit->get_color();
