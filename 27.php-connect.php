<?php

$conn=mysqli_connect("localhost","root","","php");

if($conn == false){
    die("Error: could not connect" .  mysqli_connect_errno());
}else{
    echo "Connection Done!";
}

// $sql="INSERT INTO information (first_name, last_name,email)
//     VALUES ('Amina', 'Begum', 'amina@gmail.com')";
      
    //   if I want submit lots of VALUES at a time..then do .....
    
    $sql="INSERT INTO information (first_name,last_name,email)
    VALUES ('Amina0','Begum0','amina1@gmail.com'),
           ('amin1','Begum1','amina2@gmail.com'),
           ('Amina2','Begum2','amina3@gmail.com'),
           ('Amina3','Begum3','amina4@gmail.com')";




  if(mysqli_query($conn, $sql)){
      echo "Data Insert Successfully";
  }else{
      echo "Data not inserted";
  }

  mysqli_close($conn);
?>