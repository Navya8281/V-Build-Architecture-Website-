<?php
session_start();
include('../database.php');
if(isset($_SESSION['l_id']))
{
   $id=$_SESSION['l_id'];
}
// $id=$_POST['id'];
 $cname=$_POST['companyname'];
 
 $address=$_POST['address'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $phonenumber=$_POST['phonenumber'];



$sql="UPDATE `company_registration` SET `c_companyname`='$cname',`c_address`='$address',`c_email`='$email',`c_password`='$password',`c_phonenumber`='$phonenumber' WHERE cl_id=$id";
$result=mysqli_query($con,$sql);
$sql1="UPDATE `login` SET `l_email`='$email',`l_password`='$password' WHERE l_id=$id";
mysqli_query($con,$sql1);

$results=mysqli_query($con,$sql);
if($result==1)
{
   // echo "success";
    header("location:architectureprofile.php");
}
else
{
 echo "failed";
}

?>