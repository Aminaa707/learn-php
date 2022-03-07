<?php

class Cars{
    public $name = "corolla";
    public $color = "yellow";
    public $price = 83748907;
    static $test = "Amina";  

    public function __construct()
    {
        echo $this -> color;
        echo "</br>";
        echo $this -> name;
        echo "</br>";
        echo $this -> price;
        echo "</br>";
        echo self::$test;
    }
}

$obj = new Cars();




?>