<?php
include'database.php';
if(isset($_POST['submit']))
{

     $companyname=$_POST['companyname'];
     $address=$_POST['address'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $phonenumber=$_POST['phonenumber'];
     $pincode=$_POST['pincode'];
    $usertype="Architecture";
    $status="Approved";
    $map=$_POST['map'];
   $folder_path = 'uploads/';

     echo $filename = basename($_FILES['image']['name']);
    $newname = $folder_path . $filename;

     $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG" || $FileType == "jpeg" || $FileType == "JPEG")
    {
     
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newname))
        {
     $sql="INSERT INTO login(l_email,l_password,l_usertype,l_approve) VALUES('$email','$password','$usertype','$status')";
 //var_dump($sql);
 if(!$stmt=mysqli_query($con,$sql))
    {
      die("prepare statement error");
    }
    $id=mysqli_insert_id($con);
     $q="INSERT INTO company_registration(cl_id,c_companyname,c_address,c_email,c_password,c_phonenumber,map,pincode,c_file)VALUES($id,'$companyname','$address','$email','$password','$phonenumber','$map','$pincode','$filename')";
    //var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
    ?>
<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Added Succesfully')
        window.location.replace("login.php");
        </SCRIPT>
        <?php
    }
}
}
}

?>