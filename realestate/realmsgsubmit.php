<?php
include'../database.php';
if(isset($_POST['submit']))
{
  
  echo $messege=$_POST['r_id'];
  echo $l_id=$_POST['l_id'];
  echo $r_id=$_POST['rl_id'];
  echo $q="INSERT INTO real_message(l_id,`rm_replay`,r_id)VALUES('$r_id','$messege','$l_id')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
         window.location.replace("realmessageuser.php?rl_id=<?php echo $r_id; ?>");
        </SCRIPT>
        <?php
    }

}
?>