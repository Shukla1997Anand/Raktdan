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


<h1> Donar List</h1>
 <div id="form">
 <center>
    <table>
    <tr>
       <td><center><b><font color:"blue">regis_no</font></b></center></td>
	   <td><center><b><font color:"blue">Bloodbank Name</font></b></center></td>
	   <td><center><b><font color:"blue">Aadhar</font></b></center></td>
	   <td><center><b><font color:"blue">state</font></b></center></td>
	   <td><center><b><font color:"blue">city</font></b></center></td>
	   <td><center><b><font color:"blue">pincode</font></b></center></td>
	   <td><center><b><font color:"blue">location</font></b></center></td>
	   <td><center><b><font color:"blue">Owner</font></b></center></td>
	   <td><center><b><font color:"blue">Phone</font></b></center></td>
	   <td><center><b><font color:"blue">Registration date</font></b></center></td>
	</tr>
	<?php 
	$query = "select * from bloodbank_registration";
    $result = mysqli_query($con, $query);
	if($result)
	{
	  while($row = mysqli_fetch_assoc($result))
	  {
		
	?>
	
	<tr>
	   <td><center><?php echo $row['regis_no'];?></center></td>
	   <td><center><?php echo $row['bloodbank_name'];?></center></td>
	   <td><center><?php echo $row['aadhar'];?></center></td>
	   <td><center><?php echo $row['state'];?></center></td>
	   <td><center><?php echo $row['city'];?></center></td>
	   <td><center><?php echo $row['pincode'];?></center></td>
	   <td><center><?php echo $row['location'];?></center></td>
	   <td><center><?php echo $row['owner'];?></center></td>
	   <td><center><?php echo $row['phone'];?></center></td>
	   <td><center><?php echo $row['reg_date'];?></center></td>

	</tr>
	<?php 
	}}
	?>
	
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