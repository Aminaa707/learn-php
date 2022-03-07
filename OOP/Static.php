<?php

class Cars{
    static $name = "Alien";
    static $color = "RED";
    static $price = 500000;

    public function model(){
        Cars::$name;
        Cars::$color;
    }

}

echo Cars::$name;
echo "</br>";
echo Cars::$color;
echo "</br>";


?>