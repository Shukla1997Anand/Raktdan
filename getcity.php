<?php

$con = mysqli_connect('localhost','root','','raktdan');

if($con == false)
{
  echo "connection is not done";

}
//else
  //echo "DB CONNECTED SUCCESSFULLY";


?>

  
  
<option value="">Select City</option>
<?php 
$state=$_GET['state'];
$sql="SELECT * FROM `city` where state_code='$state'";
  $run=mysqli_query($con,$sql);
  
  while ($data=mysqli_fetch_assoc($run))
      {
    
    ?>
<option value="<?php echo $data['city_code'] ?>"><?php echo $data['city_name'] ?></option>
<?php
    
  }

  ?>


