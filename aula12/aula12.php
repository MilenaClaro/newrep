<?php
    class Car 
{
    public $color;
    public $model;
    public function __construct($color,$model) 
    {
        
        $this -> color = $color;
        $this -> model = $model;
    
    }
}
    $myCar = new Car("Black", "Civic");

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }
?>