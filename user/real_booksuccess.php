<?php
include'../database.php';
if(isset($_POST['submit']))
{
	$r_id=$_POST['r_id'];
	echo $l_id=$_POST['l_id'];
	echo $fname=$_POST['f_name'];
  echo $lname=$_POST['l_name'];
	echo $address=$_POST['address'];
	echo $email=$_POST['email'];
    echo $phonenumber=$_POST['contactnumber'];
     $status="Booked";
  }
 
    $q="INSERT INTO real_booking(rel_id,recl_id,re_fname,re_lname,re_address,re_email,re_contactnumber,re_status)VALUES($l_id,$r_id,'$fname','$lname','$address','$email','$phonenumber','$status')";
     var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
    	?>
    <SCRIPT LANGUAGE='JavaScript'>
        window.alert('Booked Succesfully')
        window.location.replace("real_bookingdetails.php");
        </SCRIPT>
        <?php
    }
?