<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
     <h2 class="text-center mt-5">Some built-in functions of String in PHP</h2>


     <?php
      
      

      $learn = "I'm a developer want to learn PhP";

      echo $learn;
      echo strlen($learn);  // strlen mane koyta string ache ta bole dewa.
    
      echo str_word_count($learn); // wrord count kore.

      echo strrev($learn); // ultho kore sure kore line
  
      echo  " <hr>";
      
      echo strpos($learn, "learn"); // eta holo possition check kore. er 2ta arhumnet ache. 1st "haystack" $ "needle"

      echo str_replace("learn", "learning", $learn); // search, replace, subject

      echo strtolower($learn);

      echo strtoupper($learn);
    
       
    ?>
</body>
</html>