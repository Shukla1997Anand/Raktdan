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

 <h1> Donar List</h1>
 <div id="form">
 <center>
    <table>
    <tr>
	   <td><center><b><font color:"blue">Name</font></b></center></td>
	   <td><center><b><font color:"blue">qty</font></b></center></td>
	   
	</tr>
	<?php 
	$query = "select * from donar_registration";
    $result = mysqli_query($con, $query);
	if($result)
	{
	 
	}
	?>
	
	<tr>
	   <td><center>O+</center></td>
	   <td><center>0</center></td>
	   <td><center>Ab-</center></td>
	   <td><center>2</center></td>
	   <td><center>ab+</center></td>
	   <td><center>4</center></td>
	   <td><center>o-</center></td>
	   <td><center></center></td>
	</tr>
	
	
 </table>
 </center>
 </div>

 </div>
  <center>
<br><br <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="footer"><br><h2 align="center">Blood Donation</h2>
        <p align="center"><a align="center" href="logout.php"/><font color:"white" >logout</font></p></div>
 </div></center>
 
 </body>
 </html>
 