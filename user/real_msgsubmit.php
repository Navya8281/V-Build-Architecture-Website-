<?php
include'../database.php';
if(isset($_POST['submit']))
{
  
  echo $messege=$_POST['r_id'];
  echo $l_id=$_POST['l_id'];
  echo $cl_id=$_POST['cl_id'];
  echo $q="INSERT INTO real_message(l_id,`rm_message`,r_id)VALUES('$l_id','$messege','$cl_id')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
         window.location.replace("real_msguser.php?cl_id=<?php echo $cl_id; ?>");
        </SCRIPT>
        <?php
    }

}
?>