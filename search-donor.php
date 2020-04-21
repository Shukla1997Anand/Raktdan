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
		td{
			width:200px;
			height:50px;
		}
	</style>
</head>
<body>
<div class="header">
	<div class="logo"><h2 align="center"><a href="index.php" >RAKTDAAN</a></h2></div> 
	<div class="nav">
		<div id="a"><a href="admin-home.php">Home</a></div>
		
		
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




<form action="donar-list.php" method="post">
<table>
 <tr>
 <td width="200px" height="50px">Enter city</td>
  <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter city" required="required"></td>

  <td width="200px" height="50px">Enter BloodGroup</td>
  <td width="200px" height="50px">
    <select name="bggroup">
	  <option>O+</option>
	  <option>O-</option>
	  <option>A</option>
	  <option>A+</option>
	  <option>B+</option>
	  <option>B-</option>
	  <option>AB_</option>
	  <option>AB+</option>	
	</select>
  </td>
  </tr>

</table>

     <center>
  		<button type="submit" name="submit" value="submit" >
  		submit
  	</button>

</center>
</form>


