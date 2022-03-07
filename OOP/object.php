<!-- Object holo class er method gulo k byre theke access korar ekta maddom. -->

<?php

use Fruit as GlobalFruit;

class Fruit{
    public $name="mango";
    public $price = "50tk";
    protected $status = "ripe";
    private $color="yellow";
  
  };
   

  $obj=new Fruit;

  echo "<pre>";
  print_r($obj);
 
//   class theke kono ekta property k ber kore ana

 echo $obj-> name;

?>



<?php

class Course{
    function name($react,$next){
        $price = $react+$next;

        echo "Price : ".$price;
    }

    function time($CSS,$Redux){
        $price = $CSS+$Redux;

        echo "Price : ".$price;
    }
}

$showResult = new Course();
echo $showResult-> name(30,40);

echo " <br/>";

echo $showResult -> time(50, 200);




?>