<?php

$con = mysqli_connect('localhost','root','','raktdan');

if($con == false)
{
  echo "connection is not done";

}
//else
  //echo "DB CONNECTED SUCCESSFULLY";


?>
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
<?php
include 'heading.php'
 ?>

	<center>
	<form action="" method="POST" enctype="multipart/form-data">
	
		<div class="div2">
			<h3>BloodBank-Registration</h3>
		</div>
		<br><br><br>
	<div class="div1">
	<table style="background-color: whitesmoke">
			
     <tr>
         <td  width="200px" height="50px">Registration Number :</td>
         <td  width="200px" height="50px"><input type="text"  name="regis_no" required="required" ><br>
		
    </tr>
	
	<tr>
		<td  width="200px" height="50px">Blood-bank Name:</td>
		<td  width="200px" height="50px"><input type="text"  name="bloodbank_name" required="required"><br>
		
	</tr>

    <tr>
        <td width="200px" height="50px">State:</td>
		<td width="200px" height="50px"><input type="text"  name="state" required="required"><br>
		
    </tr>
    <tr>

		<td  width="200px" height="50px">City:</td>
    	<td  width="200px" height="50px"><input type="text"  name="city" required="required"><br>
	   </td>
    

	</tr>

    <tr>
    	<td  width="200px" height="50px">Address:</td>
		<td  width="200px" height="50px"><textarea name="address" required="required"></textarea><br>
		
    </tr>

    <tr>
    
		<td  width="200px" height="50px">Pincode :</td>
		<td  width="200px" height="50px"><input type="numeric"  name="pincode" required="required"><br>
	
	</tr>
		
    </tr>
		<td  width="200px" height="50px">Owner/Employee :</td>
		<td  width="200px" height="50px"> <select name="owner" required="required">
	                                        <option>Owner</option>
	                                        <option>Employee</option>
	  
	                                      </select>
		
    </tr>

    <tr>
		<td  width="200px" height="50px">Mobile :</td>
    	<td  width="200px" height="50px"><input type="numeric"   class="numeric"  name="mobile_no" required="required"><br><span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span></td>
		
	</tr>


  </tr>														

		<td  width="200px" height="50px">Registration Date :</td>
		<td  width="200px" height="50px"><input type="date" readonly  name="reg_date" value="<?php echo date("Y-m-d")?>"><br>
	    </td>
    </tr>
   
    <tr>
		<td  width="200px" height="50px">Upload Registration:</td>
		<td  width="200px" height="50px"><input  type="file"  name="upload_regis" required="required" ><br>
	     </td>
	</tr>

    </table>
			
     
			
	<br><br><br>
	<button type="submit"  name="sub"  style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  		save
  	</button>

	</div>
    </form>
	</center>


 <?php

  if(isset($_POST['sub']))
  {
	  $regis_no=$_POST['regis_no'];
	  $bloodbank_name=$_POST['bloodbank_name'];
	  $state=$_POST['state'];
	  $city=$_POST['city'];
	  $address=$_POST['address'];
	  $pincode=$_POST['pincode'];
	  $owner   = $_POST['owner'];
	  $mobile_no=$_POST['mobile_no'];
	  $reg_date=$_POST['reg_date'];
	  $upload_regis=$_FILES['upload_regis']['name'];
	  $tempname=$_FILES['upload_regis']['tmp_name'];
	move_uploaded_file($tempname, "dataimg/$upload_regis");
      
      
  // $q= "INSERT INTO `bloodbank_registration`(`regis_no`, `bloodbank_name`, `state`, `city`, `address`, `pincode`, `owner`, `mobile_no`,`reg_date` ,`upload_regis `) VALUES ('$regis_no','$bloodbank_name','$state','$city','$address','$pincode','$owner','$mobile_no',sysdate() ,'$imagename')";


  $q= "INSERT INTO `bloodbank_registration`(`regis_no`, `bloodbank_name`, `state`, `city`, `address`, `pincode`, `owner`, `mobile_no`, `reg_date`, `upload_regis`) VALUES ('$regis_no','$bloodbank_name','$state','$city','$address','$pincode','$owner','$mobile_no',sysdate(),'$upload_regis')"; 
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
<br><br><br><br><br><br>
<?php
include 'footer.php'
?>	 
     
</body>
</html>