<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Super Global Variable</h2>

     <ul>
         <li>$GLOBALS</li>
         <li>$_SERVER</li>
         <li>$_REQUEST</li>
         <li>$_POST</li>
         <li>$_GET</li>
         <li>$_FILES</li>
         <li>$_ENV</li>
         <li>$_COOKIE</li>
         <li>$_SESSION</li>
     </ul>

     <br> <hr>
       <h4>$GLOBALS</h4>
     <?php
        $a = 40;
        $b = 20;

        function learn( )
        {
            $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
 
        }
       
        learn();
        echo $c;
      ?>
      <h4>$_SERVER</h4>
     
      <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER["SERVER_ADDR"];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER["SCRIPT_NAME"];
        echo "<br>";
        echo $_SERVER["HTTP_USER_AGENT"];
        echo "<br>";
        echo $_SERVER['REQUEST_URI'];
        echo "<br>";
        echo $_SERVER["SERVER_SOFTWARE"];
        echo "<br>";
        echo $_SERVER["SERVER_ADMIN"];
        echo "<br>";
        echo $_SERVER["REMOTE_ADDR"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";
        echo $_SERVER['REMOTE_PORT'];

      ?>

</body>
</html>