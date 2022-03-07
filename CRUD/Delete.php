<?php
require_once('db.php');

$id=$_GET['id'];

// echo $id;

$dlt="DELETE FROM information WHERE id=$id";

$res=mysqli_query($connection, $dlt);

if($res){
      header("location: Read.php");
}else{
    echo "NOT SUCCESS";
}



?>