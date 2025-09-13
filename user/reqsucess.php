<?php
include'../database.php';
if(isset($_POST['submit']))
{
	echo $bid=$_POST['b_id'];
  echo $requirement=$_POST['requirement'];
  echo $check=$_POST['chk'];
    echo $budget=$_POST['budget'];
    
	
    
  
   
    echo $q="INSERT INTO requirement(b_id,r_requirement,r_plan,r_budget)VALUES($bid,'$requirement','$check','$budget')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Added Succesfully')
         window.location.replace("bookingdetails.php");
        </SCRIPT>
        <?php
    }

}
?>