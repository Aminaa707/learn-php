<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Scope</h2>

    <?php
    $a = 70;

   function learn(){
       $k = 1000;
       echo $k;
   }
   
   function work(){
    global $a;

    $x = 90;
    echo $x;
    echo "<br>";
    echo "this is global $a";
}


learn();
echo "<br>";

work();

    ?>
</body>
</html>