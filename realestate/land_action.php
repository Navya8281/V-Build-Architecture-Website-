<?php
include'../database.php';
//error_reporting(0);
session_start();

if(isset($_SESSION['l_id']))
{
    $id=$_SESSION['l_id'];
}

$results = $con->query("select * from land_details WHERE rl_id=$id");
                               while($rows= mysqli_fetch_array($results))
                                 {
                    $rl_id= $rows['rl_id'];
                   }

if($rl_id == $id)
{
    ?>
<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Only ONE land Posted')
        window.location.replace("realbooking.php");
        </SCRIPT>
        <?php
}
else
{
if(isset($_POST['submit']))
{
    echo $title=$_POST['title'];
	echo $description=$_POST['description'];
  echo $landprice=$_POST['landprice'];
	
	
    
   $folder_path = '../uploads/';

    $filename = basename($_FILES['image']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG")
    {
     
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newname))
        {
   
 
    
   
    echo $q="INSERT INTO `land_details`(rl_id,l_title,l_description,l_landprice,l_image)VALUES($id,'$title','$description','$landprice','$filename')";
    var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Added Succesfully')
        window.location.replace("real_upload.php");
        </SCRIPT>
        <?php
    }
}
}
}
}

?>