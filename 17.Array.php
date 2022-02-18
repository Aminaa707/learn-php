<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
In PHP, there are three types of arrays:

<ul>
    <li>Indexed arrays - Arrays with a numeric index</li>
    <li>Associative arrays - Arrays with named keys</li>
    <li>Multidimensional arrays - Arrays containing one or more arrays</li>
</ul>
 
<h2>Indexed arrays</h2>
<?php
    $names = array("Anika", "Anik" , "Afra", "Arifa" );

    print_r($names);
  
    echo "<br>";
    echo $names[0];
    echo "<br>";
    echo count($names);
    echo "<br>";

    $leangth = count($names);
     
    for ($i=0; $i <$leangth; $i++) { 
         echo $names[$i];
         echo "<br>";
    }

?> 
 
<h2>Associative arrays</h2>

<?php
$class = array('one' => "Amrin", "two" => "Nusu", "three" => "Araf" );

print_r($class);

?>


</body>
</html>