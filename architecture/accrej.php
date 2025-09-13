n<?php
 $b_id=$_GET['b_id'];
include('../database.php');

//$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$sql="UPDATE `company_booking` SET `b_status`='Accepted' WHERE b_id=$b_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:booking.php");
}
else
{
 echo "failed";
}

?>