<?php
session_start();
$l_id=$_SESSION['l_id'];
include'database.php';
if(isset($_POST['Booking']))
{
  $cl_id=$_POST['cl_id'];
  echo $bu_id=$_POST['bu_id'];
  
  }

 
    $q=" INSERT INTO `budget_booking`( `bbl_id`, `bbhl_id`, `bbcl_id`) VALUES ($l_id,$bu_id,$cl_id)";
     var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
      ?>
    <SCRIPT LANGUAGE='JavaScript'>
        window.alert('Booked Succesfully')
        window.location.replace("budgethom.php");
        </SCRIPT>
        <?php
    }
?>