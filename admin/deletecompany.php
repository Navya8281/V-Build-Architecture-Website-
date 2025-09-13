<?php
echo $id=$_GET['id'];
include('../database.php');
$sql="DELETE FROM `company_registration` WHERE cl_id=$id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:companyprofile.php");
}
else
{
 echo "failed";
}

?>