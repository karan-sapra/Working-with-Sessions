<?php

include "sessioncheck.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="signin.php" method="post">
      
        Email:<input type="email" name="email" placeholder="enter your email">
<br><br>        password:<input type="passowrd" name="password" placeholder="enter your password">
               <button class="signin" type="submit">Submit</button>
</form>
<br><br><a class="new_user" href="register.html">Register as new User</a>
<br><br><button class="forgot_password" type="button">Forgot password</button>
</body>
</html>