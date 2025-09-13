<?php
include'database.php';
if(isset($_POST['submit']))
{
	echo $authorityname=$_POST['authorityname'];
	echo $address=$_POST['address'];
	echo $email=$_POST['email'];
	echo $password=$_POST['password'];
  echo $contactnumber=$_POST['contactnumber'];
    $usertype="authority";
    $sql="INSERT INTO login(l_email,l_password,l_usertype) VALUES('$email','$password','$usertype')";
 var_dump($sql);
 if(!$stmt=mysqli_query($con,$sql))
    {
      die("prepare statement error");
    }
    $id=mysqli_insert_id($con);
    $q="INSERT INTO authority_registration(al_id,a_authorityname,a_address,a_email,a_password,a_contactnumber)VALUES($id,'$authorityname','$address','$email','$password','$contactnumber')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {

    }
}

?>