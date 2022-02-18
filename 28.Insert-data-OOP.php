<?php

$severName="localhost";
$userName="root";
$password="";
$dbName="php";

$conn= new mysqli($severName,$userName,$password,$dbName);

if($conn ->connect_error){
    die("Error: Could not connect" . $conn->connect_error);
}else{
    echo "Connected Successfully";
}

$sql="INSERT INTO information (first_name,last_name,email)
      VALUES ('mariya', 'khanom', 'mariya@gmail.com')";
if($conn ->query($sql) === TRUE){
    echo "Data Inserted";
}else{
    echo "Not Inserted";
}

$conn ->close();
?>