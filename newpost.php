<?php
    session_start();
    if(!isset($_SESSION['id'])){
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
    <title>Document</title>
</head>
<body>
    <h1><center>Webboard OAsiTz</center></h1>
    <hr>
<?php
    echo "ผู้ใช้ : ".$_SESSION['username'];
?>
<br>
<table>
        <tr><td>หมวดหมู่ :</td><td><select name = "category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option></td></tr>
        <tr><td>หัวข้อ : </td><td><input type="text"name="title"></td></tr>
        <tr><td>เนื้อหา :</td><td><textarea name = "massage" rows = "2" cols = "25"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
        <tr>

</table>
</body>
</html>