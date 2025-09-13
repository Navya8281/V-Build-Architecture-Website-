<?php
include'../database.php';
if(isset($_POST['submit']))
{
	$c_id=$_POST['c_id'];
	echo $l_id=$_POST['l_id'];
	echo $fname=$_POST['f_name'];
  echo $lname=$_POST['l_name'];
	echo $address=$_POST['address'];
	echo $email=$_POST['email'];
    echo $phonenumber=$_POST['contactnumber'];
     $status="Booked";
  }
 
    $q="INSERT INTO company_booking(bl_id,bcl_id,b_fname,b_lname,b_address,b_email,b_contactnumber,b_status)VALUES($l_id,$c_id,'$fname','$lname','$address','$email','$phonenumber','$status')";
     var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
    	?>
    <SCRIPT LANGUAGE='JavaScript'>
        window.alert('Booked Succesfully')
        window.location.replace("bookingdetails.php");
        </SCRIPT>
        <?php
    }
?>