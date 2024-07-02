<?php 
include("dbconn.php");
$org=$_POST['orgname'];
$dsg=$_POST['dsg'];
$city=$_POST['city'];
 $sql="INSERT INTO organization(orgname,dsg,city) VALUES('$org','$dsg','$city')";
 $query=mysqli_query($conn,$sql);
 header("LOCATION: organization.php")
?>