<?php
include('dbconn.php');
$name=$_POST['name'];
$age=$_POST['age'];
$dsg=$_POST['dsg'];

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK )
    {
       $photo=$_FILES['photo'];
       $photoName=basename($photo['name']);
       $targetDir="photos/";
       $targetFilepath= $targetDir . $photoName;

       if(move_uploaded_file($photo['tmp_name'],$targetFilepath))
      {
        $insert="INSERT INTO details (name,age,dsg,photo) VALUES('$name','$age','$dsg','$photoName'])";
        $query=mysqli_query($conn,$insert);
        header("Location: form.php");

      }
      else
      {
        echo "Error moving uploaded file.";

      }
    }
   else
   {
      $insert="INSERT INTO details (name,age,dsg) VALUES('$name','$age','$dsg')";
      $query=mysqli_query($conn,$insert);
      header("Location: form.php");
    }
}
mysqli_close($conn);
?>