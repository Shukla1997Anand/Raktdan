
<?php
 include "connection.php";
 //session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank About</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>
<body>
<div class="header">
	<div class="logo"><h2 align="center"><a href="index.php" >RAKTDAAN</a></h2></div> 
	<div class="nav">
		<div id="a"><a href="index.php">Home</a></div>
		<div id="b"><a href="about.php">About As</a></div>
		<div id="c"><a href="contact.php">Contact Us</a></div>
		<div id="d"><a href="login.php">Login</a></div>
		
	</div>
	
</div>

 <div id="body">
 
<?php 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  header("Location:login.php");
  }
?>	

 <h1> welcome admin</h1>
<div style="background-color:powderblue;"> 
<ul style=list-style:none; color:white; >
  
    <li><a href="Donar-reg.php">Donor Registraion</a></li>
	<li><a href="donar-list.php">Donor List</a></li>
	<li><a href="#">Stock Blood</a></li>
  </ul><br><br>
  <ul style=list-style:none; >
    <li><a href="#">Out Stock Blood List</a></li>
	<li><a href="#">Exchange Blood List </a></li>
	<li><a href="#">Ngo List</a></li>
  </ul><br><br>
  </div>
</div>
      <br><br><br><br><br><div class="footer"><br><h2 align="center">Copyright@Minor-Project</h2>
        <p align="center"><a align="center" href="logout.php"/><font color:"white" >logout</font></p></div>

 

 </body>
 </html>