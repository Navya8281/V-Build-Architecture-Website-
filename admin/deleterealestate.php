<?php
echo $id=$_GET['id'];
include('../database.php');
$sql="DELETE FROM `real_estate_registration` WHERE rl_id=$id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:realestateprofile.php");
}
else
{
 echo "failed";
}

?>