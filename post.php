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
<center> ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]."<br>";
        $num=$_GET["id"];
        if($num %2==0){
            echo"เป็นกระทู้หมายเลขคู่";
        }else
            echo"เป็นกระทู้หมายเลขคี่";
?><br><br>
<table style="border:2px solid black;width:40%">
        <tr><td style="background-color: #6cd2fe;"colspan="2">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name = "massage" rows = "5" cols = "100"></textarea></td></tr>
        <tr><td colspan ="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
</table>
</center>
<br>
<center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>