<?php
include'../database.php';

session_start();

if(isset($_SESSION['l_id']))
{
   echo $id=$_SESSION['l_id'];
}
if(isset($_POST['submit']))
{
	echo $description=$_POST['description'];
  echo $budget=$_POST['budget'];
	echo $sqft=$_POST['sqft'];
	
    
   $folder_path = '../uploads/';

    $filename = basename($_FILES['image']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG")
    {
     
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newname))
        {
   
 
    
   
    echo $q="INSERT INTO budgeted_home(cl_id,bu_description,bu_budget,bu_sqft,bu_image)VALUES($id,'$description','$budget','$sqft','$filename')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Added Succesfully')
        window.location.replace("budgeted_home.php");
        </SCRIPT>
        <?php
    }
}
}
}

?>