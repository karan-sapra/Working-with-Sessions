<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="users";


$conn=mysqli_connect($hostname,$username,$password,$dbname);


if(!$conn){
    echo "unable to connect".mysqli_connect_error();
}

  ?>