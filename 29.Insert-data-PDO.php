<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="php";

try{

$conn = new PDO('mysql:host=$serverName; dbname=$dbName',$userName,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO information (first_name, last_name,email)
      VALUES ('Amrin', 'Uddin', 'amrin@gmail.com')";

$conn->exec($sql);
  echo "Data inserted successfully";
}catch(PDOException $e){

   echo $e->getMessage() ;

}
 
$conn=null;



?>