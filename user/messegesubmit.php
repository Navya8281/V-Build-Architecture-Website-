<?php
include'../database.php';
if(isset($_POST['submit']))
{
	
   $messege=$_POST['a_id'];
   $l_id=$_POST['l_id'];
   $a_id=$_POST['cl_id'];
  $folder_path = '../uploads/';

     $filename = basename($_FILES['u_file']['name']);
    $newname = $folder_path . $filename;

     $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG" || $FileType == "jpeg" || $FileType == "JPEG")
    {
     
        move_uploaded_file($_FILES['u_file']['tmp_name'], $newname);
        
    }

   $q="INSERT INTO message(l_id,message,u_img,a_id)VALUES('$l_id','$messege','$filename','$a_id')";
   // var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
        window.location.replace("messegeuser.php?cl_id=<?php echo $a_id; ?>");
        </SCRIPT>
        <?php
    }

}
?>