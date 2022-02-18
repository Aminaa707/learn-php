<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$_SESSION['email']="anika@gmail.com";
$_SESSION['password']='12345678';


echo $_SESSION['email'] . "<br>" ; 

session_unset();
echo $_SESSION['password'];

?>
 



</body>
</html>