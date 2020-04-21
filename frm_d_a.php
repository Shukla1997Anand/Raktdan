<?php
 include "connection.php";
 //session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor/acceptor Registration</title>
	<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="js/bloodbank_registration.js"></script>-->
	<style type="text/css">
		
		
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>
<body>
<?php
include 'heading.php'
?>

 <div id="body">
 
 <center>	
<div class="div2">
			<h1>Donor / Acceptor Registration</h1>
</div>
<br><br><br>


 	<div id="form">
 <form action="frm_d_a.php" method="post"><!--some thing is wrong-->
 <table style="background-color: pink" width="500px" height="50px">
 <tr>

  <td width="200px" height="50px"><b>Name: <b></td>
  <td  width="200px" height="50px"><input class="form-control" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name" name="name" required="required"><br>

  </tr>
  
  <tr>

  <td width="200px" height="50px"><b>Aadhar.No:</b></td>
  <td width="200px" height="50px"><input type="numeric" class="form-control" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aadhar" name="aadhar" required="required"><br></td>

 </tr>

  <tr>

   <td  width="200px" height="50px"><b>Address:</b></td>
   <td  width="200px" height="50px"><textarea name="address"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address" required="required"></textarea><br>

  </tr>
  	
  	 <tr>
  	

   <td width="200px" height="50px"><b>Blood Group</b></td>
   <td width="200px" height="50px">
    <select name="bggroup" required="required">
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

  <tr>
   <td width="200px" height="50px"><b>Mobile<br>(User.Id)</b></td>
   <td width="200px" height="50px"><input type="numeric" name="phone" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number"  required="required"></td>
   

  </tr>

  <tr>
   <td width="200px" height="50px"><b>E.mail:</b></td>
   <td width="200px" height="50px"><input class="form-control" type="text" name="email"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E.mail"required="required"></td>

  </tr>
  
   <tr>
   <td width="200px" height="50px"><b>Password:</b></td>
   <td width="200px" height="50px"><input type="password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password" name="password" required="required"></td>

  </tr>


</table>

<br><br><br>

  		<button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  		save
  	</button>
   
 

 
 </form>
 <?php
  if(isset($_POST['sub'])&& $_POST['sub']=='save' )
  {
	  $name=$_POST['name'];
	  $aadhar=$_POST['aadhar'];
	  $address=$_POST['address'];
      $bggroup=$_POST['bggroup'];
      $phone=$_POST['phone'];
	  $email=$_POST['email'];
      $password=$_POST['password'];
	  
 

	  
	  //$q="select e_mail from donar_registration where e_mail='$e_mail' ";
	 // $recexist=mysqli_query($con,$q);
	 //  $rowcount=mysqli_num_rows($recexist);
	 // if($rowcount==0)
	 // {
		/* $q="INSERT INTO donar_registration (name,fname,address,city,age,bggroup,e-mail,mno) VALUES  
	   ('". $name."','".$fname."','".$address."','".$city."','".$age."','".$bggroup."','".$e_mail."','".$mno."')";*/

	  // echo $password;
	   //echo $re_password;
	   //if ($password==$re_password)
	  // {
	   	//$newpwd = $password;
  		//}
  		$q= "INSERT INTO `user`(`name`, `aadhar`, `address`, `bggroup`, `phone`, `email`, `password`) VALUES ('$name','$aadhar','$address','$bggroup','$phone','$email','$password')";
	 // echo $q; exit;
	 // $qExe=mysqli_query($con, $q);
	 //if($qExe)
	  // {
		//   echo "<script>alert('donar-registration succesful')</script>";
	   //}
   //   else 
    //  echo "donar-registration failed";
     // }
	 // }
	//  else{ echo "<script>alert('email already exists')</script>";}
  //}







       $run=mysqli_query($con,$q);
	   if($run==true)
	   {
       ?>
		<script>
			alert('Data Inserted Successfully');
		</script>
		<?php
	   }

   }
?>

 <br><br><br><br><br>
 </div>
</center>
 </div>
 <?php
 include 'footer.php'
 ?>
 </body>
 </html>
 