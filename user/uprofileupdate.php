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
 $phonenumber=$_POST['phonenumber'];



 $sql="UPDATE `userregistration` SET `u_fname`='$fname',`u_lname`='$lname',`u_address`='$address',`u_email`='$email',`u_password`='$password',`u_phonenumber`='$phonenumber' WHERE ul_id=$id";
$result=mysqli_query($con,$sql);

$sql1="UPDATE `login` SET `l_email`='$email',`l_password`='$password' WHERE l_id=$id";
mysqli_query($con,$sql1);
$results=mysqli_query($con,$sql);
if($result==1)
{
   // echo "success";
    header("location:userprofile.php");
}
else
{
 echo "failed";
}

?>