<?php

$serverName="localhost";
$userName="root";
$password="";
$dbname="php";

$connection=new mysqli($serverName,$userName,$password,$dbname);

if($connection->connect_error){
     die("connection failed" . $connection->connect_error);
}

?>