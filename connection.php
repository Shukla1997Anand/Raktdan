<?php
session_start();
$con=mysqli_connect("localhost","root","","raktdan");
// Check connection
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

//$db=new PDO('mysql:host=localhost;dbname=raktdan','root',''); 
?>