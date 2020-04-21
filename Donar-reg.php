<?php
 include "connection.php";
 //session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank About</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
  // $un=$_SESSION['un'];
   //echo $un; exit();
  //if(!$un)
  {
	  //header("Location:login.php");
  }
?>	

 <h1> Donar Registration</h1>
 <center><div id="form">
 <form action="" method="post">
 <table>
 <tr>
  <td width="200px" height="50px">Enter your name</td>
  <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
  <td width="200px" height="50px">Enter Father's name</td>
  <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's name"></td>
 </tr>
 <tr>
  <td width="200px" height="50px">Enter Address</td>
  <td width="200px" height="50px"><textarea name="address"></textarea></td>
  <td width="200px" height="50px">Enter city</td>
  <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter city"></td>
 </tr>
  <tr>
  <td width="200px" height="50px">Enter age</td>
  <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
  <td width="200px" height="50px">Enter BloodGroup</td>
  <td width="200px" height="50px">
    <select name="bggroup">
	  <option>O+</option>
	  <option>AB_</option>
	  <option>AB-</option>	
	</select>
  </td>
  </tr>
  <tr>
  <td width="200px" height="50px">Enter E-mail</td>
 <td width="200px" height="50px"><input type="text" name="E-mail" placeholder="Enter E-mai"></td>
  <td width="200px" height="50px">Enter Mobile No.</td>
  <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No."></td>
 </tr>
  <tr>
     <td><input type="submit" name="sub" value="save"></td>
  </tr>
 
 </table>
 </form>
 <?php
  if(isset($_POST['sub'])&& $_POST['sub']=='save' )
  {
	  $name=$_POST['name'];
	  $fname=$_POST['fname'];
	  $address=$_POST['address'];
      $city=$_POST['city'];
      $age=$_POST['age'];
	  $bggroup=$_POST['bggroup'];
      $eMail=$_POST['E-mail'];
	  $mno=$_POST['mno'];
	  
	  $q="select e_mail from donar_registration where e_mail='".$eMail."'";
	  $recexist=mysqli_query($con,$q);
	   $rowcount=mysqli_num_rows($recexist);
	  if($rowcount==0)
	  {
		  $q="INSERT INTO donar_registration (name,fname,address,city,age,bggroup,e_mail,mno) VALUES  
	   ('".$name."','".$fname."','".$address."','".$city."','".$age."','".$bggroup."','".$eMail."','".$mno."')";
	 // echo $q; exit;
	  $qExe=mysqli_query($con, $q);
	  if($qExe)
	   {
		   echo "<script>alert('donar-registration succesful')</script>";
	   }
      else 
      {
	  echo "donar-registration failed";
      }
	  }
	  else{ echo "<script>alert('email already exists')</script>";}
  }

?>
 <br><br><br><br><br><div class="footer"><br><h2 align="center">Copyright@Minor-Project</h2>
        <p align="center"><a align="center" href="logout.php"/><font color:"white" >logout</font></p></div>
 </div></center>
 </div>
 </body>
 </html>
 