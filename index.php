<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>
<body>
    <div id="form">
        <h1 id="heading">Sign up form</h1>
        <form name="form" action= "signup.php"method="POST">
            <input type="text" id="user" name="user" placeholder="Enter user name" required> <br><br>
            <input type="email" id="email" name="Email" placeholder="Enter Email" required> <br><br>
            <input type="password" id="pass" name="pass" placeholder="Enter create password" required> <br><br>
            <input type="password" id="cpass" name="cpass" placeholder="Rewrite Password" required> <br><br>
            <input type="submit" id="btn" value="signup" name="submit" >
        </form>
</body>
</html>