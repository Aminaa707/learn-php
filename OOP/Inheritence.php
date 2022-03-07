
<h2>Inheritance in OOP = When a class derives from another class.</h2>

<?php
 
 class One{
     private $student = "100";
     public $section  = "A";
     public $bench = "50";
     private $headSie = "Shoficq";
     public $girls = "All";
 }

 class Two extends One {


    public $student = "100";
 

}
 
$result = new Two();

echo $result ->girls

?>