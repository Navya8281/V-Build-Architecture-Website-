<?php
include'database.php';
if(isset($_POST['submit']))
{
	echo $fname=$_POST['fname'];
  echo $lname=$_POST['lname'];
	echo $address=$_POST['address'];
	echo $email=$_POST['email'];
	echo $password=$_POST['password'];
    echo $phonenumber=$_POST['phonenumber'];
    $usertype="user";
    $status="Approved";
    
   $folder_path = 'uploads/';

    $filename = basename($_FILES['image']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpge" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPGE" || $FileType == "PDF" || $FileType == "PNG")
    {
     
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newname))
        {
    $sql="INSERT INTO login(l_email,l_password,l_usertype,l_approve) VALUES('$email','$password','$usertype','$status')";
 var_dump($sql);
 if(!$stmt=mysqli_query($con,$sql))
    {
      die("prepare statement error");
    }
    $id=mysqli_insert_id($con);
    echo $q="INSERT INTO userregistration(ul_id,u_fname,u_lname,u_address,u_email,u_password,u_phonenumber,u_file)VALUES($id,'$fname','$lname','$address','$email','$password','$phonenumber','$filename')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<!-- <SCRIPT LANGUAGE='JavaScript'>
        window.alert('Added Succesfully')
        window.location.replace("login.php");
        </SCRIPT> -->
        <?php
    }
}
}
}
?>