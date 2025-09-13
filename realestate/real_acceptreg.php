<?php
 $re_id=$_GET['re_id'];
include('../database.php');

//$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$sql="UPDATE `real_booking` SET `re_status`='Accepted' WHERE re_id=$re_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:realbooking.php");
}
else
{
 echo "failed";
}

?>