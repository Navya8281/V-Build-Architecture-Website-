<?php
include('../database.php');
 $id=$_POST['id'];
 $cname=$_POST['cname'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $phonenumber=$_POST['phonenumber'];
$status=$_POST['status'];



 $sql="UPDATE `company_registration` SET `c_companyname`='$cname',`c_address`='$address',`c_email`='$email',`c_password`='$password',`c_phonenumber`='$phonenumber' WHERE cl_id=$id";
$result=mysqli_query($con,$sql);
 $sql1="UPDATE `login` SET `l_approve`='$status' WHERE l_id=$id";
$results=mysqli_query($con,$sql1);

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