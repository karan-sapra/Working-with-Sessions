

<?php
include_once("dbconnect.php");
include("sessioncheck.php");
if(isset($_SERVER["REQUEST_METHOD"])=="POST")
{
    
     $newemail=$_POST["email"];
     $regpassword=$_POST["password"];
}


$sql="INSERT INTO `users` (`id`, `email`, `password`) VALUES ('', '$newemail', '$regpassword')";

$data=mysqli_query($conn,$sql);

if(isset($data)){

echo "Registration Successfull";
}
?>