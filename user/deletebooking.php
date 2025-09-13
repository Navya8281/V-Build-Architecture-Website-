<?php
 $b_id=$_GET['b_id'];
include('../database.php');
$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:bookingdetails.php");
}
else
{
 echo "failed";
}

?>