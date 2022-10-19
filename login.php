<?php
    session_start();
    if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1><center>Webboard OAsiTz</center></h1>
    <hr>
    <center>
<form action="verify.php"method = "post">
    <table style="border:2px solid black;width:20%">
        <tr><td style="background-color: #6cd2fe;"colspan="2">เข้าสู่ระบบ</td></tr><br>
        <tr><td>Login</td><td><input type="text"name="login" size ="30"></td></tr>
        <tr><td>Passoword</td><td><input type="Password"name="pass" size ="30"></td></tr>
        <tr><td colspan ="2" align="center"><input type="submit" value="Login"></td></tr>
    </table><br>
</form>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>
</body>
</html>     