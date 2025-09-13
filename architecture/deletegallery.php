<?php
include 'ar_header.php';
$g_id=$_GET['g_id'];


   $q="DELETE FROM `gallery` WHERE  g_id='$g_id'";
    //var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
        window.location.replace("gallery.php");
        </SCRIPT>
        <?php
    }



?>

  

  