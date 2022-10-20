<?php
include_once("dbconnect.php");

session_start();
if(isset($_SESSION['email'])){
header("location:welcome.html");

}

if(isset($_SERVER['REQUEST_METHOD'])=='POST'){


$sql="SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."' ";

$query=mysqli_query($conn,$sql);

$num=mysqli_num_rows($query);

if($num>0){

session_start();

$_SESSION["email"]=$_POST['email'];
$_SESSION["password"]=$_POST['password'];

header("location:welcome.html");
}
else{
   echo "email and password not correct";
}

}




?>