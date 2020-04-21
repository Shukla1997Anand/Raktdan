<?php
 include "connection.php";
 //session_start();
 ?>
 <?php
 
 //Array ( [un] => shukla@123 [ps] => sdsd [sub] => Log In )
 
 //print_r($_POST);exit;
 if(isset($_POST['sub'])&& $_POST['sub']=='Log In')
 {
	
	//print_r($_POST);exit;
	$un=$_POST['un'];
	$ps=$_POST['ps'];
	//echo "SELECT * FROM admin WHERE uname='$un' && pass='$ps'";exit;
	
	$q="SELECT * FROM admin WHERE uname='$un' && pass='$ps'";
	$res=mysqli_query($con, $q);
	$count=mysqli_num_rows($res);
	//print_r($res); exit;	
	//$q=$con->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
	//$q->execute();
	//$res=$q->fetchAll();
	if($count==2)
	{
		//$_SESSION['loggedin'] = 'yes'; 
		//echo $_SESSION['loggedin'];exit;
		//echo 'Hello';exit;
		$_SESSION['un']=$un;
		header("Location:admin-home.php");
		
	}
	else 
	{
		echo "<script>alert('Not authentic user')</script>";
	}
 }
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
	<div class="logo"><h2 align="center">RAKTDAAN</h2></div>
	<div class="nav">
		<div id="a"><a href="index.php">Home</a></div>
		<div id="b"><a href="about.php">About As</a></div>
		<div id="c"><a href="contact.php">Contact Us</a></div>
		<div id="d"><a href="login.php">Login</a></div>
	</div>
</div>
   
<div style="height:500px;">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"

 >

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><img src="Images/login2.png" width="300px" height="70px"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">username</td><td><input type="email" name="un" required="required"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password" name="ps"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sub" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; "></td></tr>
 <tr><td style="font-size:14px">Not A DONOR.?</td><td ><a href="Donar-reg.php" style="color:#C30">Click here</a> to REGISTER.</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div>
<div class="footer"><h2 align="center">Copyright@Minor-Project</h2></div>

</body>
</html>
