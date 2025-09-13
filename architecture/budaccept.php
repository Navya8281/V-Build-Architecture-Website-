<?php
 $bb_id=$_GET['bb_id'];
include('../database.php');

//$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$sql="UPDATE `budget_booking` SET `bb_status`='Accepted' WHERE bb_id=$bb_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:budbook_view.php");
}
else
{
 echo "failed";
}

?>