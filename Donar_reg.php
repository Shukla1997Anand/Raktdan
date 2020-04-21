<?php
 include "connection.php";
 //session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank About</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<!--<script src="js/bloodbank_registration.js"></script>-->
	<style type="text/css">
		
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>
<body>


 <div id="body">
 
 <center>	
<div class="div2">
			<h3>Donar Registration</h3>
</div>
<br><br><br>


 	<div id="form">
 <form action="Donar_reg.php" method="post"><!--some thing is wrong-->
 <table style="background-color: pink">
 <tr>
  <td width="200px" height="50px">Donar Id </td>
  <td width="200px" height="50px"><input type="numeric" name="did" placeholder="Enter Id" required="required"></td>
</tr>

<tr>
  <td width="200px" height="50px">Blood_bank</td>
  <td width="200px" height="50px">

  <select name="blood_bank" id="blood_bank">
 <!-- <option value=""> Select Bloodbank</option>--> 

  <?php 
$sql="SELECT * FROM `bloodbank_registration`";
  $run=mysqli_query($con,$sql);
  //print_r($run); exit();
  
  while ($data=mysqli_fetch_assoc($run))
      {
    
    ?>
<option value="<?php echo $data['regis_no'] ?>"><?php echo $data['bloodbank_name'] ?></option>
<?php
    
  }

  ?>


</select>

</td>

 </tr>


 <tr>

  <td width="200px" height="50px">Unit</td>
  <td width="200px" height="50px">
    <select name="unit">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>	
	</select>
  </td>

   </tr>

  <tr>

  <td width="200px" height="50px">Blood Group</td>
  <td width="200px" height="50px">
    <select name="bgroup">
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

  <td width="200px" height="50px">Age</td>
  <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" required="required"></td>
  </tr>

  <tr>
  <td width="200px" height="50px">Doctor's Name</td>
  <td width="200px" height="50px"><input type="text" name="doctor" placeholder="Enter's Name" required="required"></td>
  
  </tr>
  
  <tr>
  <td width="200px" height="50px">Hospital Name</td>
  <td width="200px" height="50px"><input type="text" name="hospital" placeholder="Enter Hospital's Bame" required="required"></td>
</tr>

<tr>
  <td width="200px" height="50px">Date</td>
  <td  width="200px" height="50px"><input type="date"  name="d_date"><br></td>
	</tr>

<tr>
	<td width="200px" height="50px">Type</td>
	<td width="200px" height="50px">
	 <select name="type">
	  <option>Acceptor</option>
	  <option>Donar</option>
	</select>
  </td>
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
	  $did=$_POST['did'];
	  $blood_bank=$_POST['blood_bank'];
	  $unit=$_POST['unit'];
      $bgroup=$_POST['bgroup'];
      $age=$_POST['age'];
	  $doctor=$_POST['doctor'];
      $hospital=$_POST['hospital'];
	  $d_date=$_POST['d_date'];
      $type=$_POST['type'];
 

	  
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
  		$q= "INSERT INTO `tbl_donor`(`did`, `blood_bank`, `unit`, `bgroup`, `age`, `doctor`, `hospital`, `d_date`,`type`) VALUES ('$did','$blood_bank','$unit','$bgroup','$age','$doctor','$hospital',sysdate(),'$type')";
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
 