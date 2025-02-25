<?php
// class Fruit{

//     //Properties
//     public $name;

//     function __construct($name)
//     {
//         $this->name=$name;
//     }

//     function get_name(){
//         return $this->name;
//     }
    
// }

// $first_Fruit = new Fruit('Apples');
// echo $first_Fruit->get_name();





class Fruit{

    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this-> name = $name;
        $this ->color = $color;
    }
    function get_name(){
        return $this->name;
        
    }
    function get_color(){
        return $this->color;
    }
}

$first_Fruit = new Fruit("Apple", "Green");
echo $first_Fruit->get_name(). " is " .$first_Fruit->get_color();