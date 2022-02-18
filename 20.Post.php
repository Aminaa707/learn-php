<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- <from method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <input type="email" name="email" placeholder="Email" > <br> <br>
    <input type="submit" >
</from> -->

 

<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//      // collect value of input field
//     $gg = $_REQUEST['na'];
//     $hh = $_REQUEST['pas'];
//    if(empty($gg)){
//         echo "Please insert your email address";
//     }else{
//         echo $gg;
//     }
// }

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"> <br> <br>  
  Password: <input type="password" name="pass"> <br> <br>
  Email: <input type="email" name="email"> <br> <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  $password =$_REQUEST['pass'];
  $Email =$_REQUEST['email'];
  if (empty($name && $password && $Email)) {
    echo "Name is empty";
    echo "<br>";
    echo  "Enter password";
    echo "<br>";
    echo  "Email is empty!";

  } else {
    echo $name;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $Email;
  }
}
?>











</body>
</html>