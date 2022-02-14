<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Loop</h2>

    While Loop
    Do while loop
    For loop
    For each loop

 <br>
 <hr>

      <h4>While Loop</h4>
  <?php
      $a = 1;

      while($a <= 10){
          echo "number is: $a <br>";
          $a++;
      }
  
   ?> 
  <h4>Do While Loop</h4>
     <!-- Do while loop hocce ultah...age code run hobe tarpor condition true hobe -->
  <?php
      $a = 1;
     
      do {
          # code...

          echo "the number is: $a <br>";
          $a++;
      } while ($a <= 7);
     
  
   ?> 

<h4> For Loop</h4>
     <!-- For loop er 3ta peramiter. 1.Kotha theke suru   2.kothay giye tambe  3.ki condition hobe (incrementr or decremeat) -->
 
 <?php
       for ($i=1; $i<= 10 ; $i++) { 
           # code...
           echo "the number is $i <br>";
       }
  
   ?> 

<h4> For each Loop</h4>
     <!-- For each loop use kora hoy Array theke data read korar jnnho. For each loop e 1st thake variable, 2nd thake key and 3rd value -->
 
 <?php
       $names = array("Anika", "Anik", "Mamun", "Mymuna");

        foreach ($names as $name ) {
            # code...
            echo "$name <br>";
        }
  
   ?> 
<div class="mb-5">

</div>

</body>
</html>