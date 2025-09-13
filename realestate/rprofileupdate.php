<?php
session_start();
include('../database.php');
if(isset($_SESSION['l_id']))
{
   $id=$_SESSION['l_id'];
}
// $id=$_POST['id'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobilenumber=$_POST['mobilenumber'];



 echo $sql="UPDATE `real_estate_registration` SET `r_fname`='$fname',`r_lname`='$lname',`r_address`='$address',`r_email`='$email',`r_password`='$password',`r_mobilenumber`='$mobilenumber' WHERE rl_id=$id";
$result=mysqli_query($con,$sql);
$sql1="UPDATE `login` SET `l_email`='$email',`l_password`='$password' WHERE l_id=$id";
mysqli_query($con,$sql1);
$results=mysqli_query($con,$sql);
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