<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KaKKak</title>
    <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <div class="container-fluid">
    <h1><center>Webboard OAsiTz</center></h1>
    <?php include "nav.php";
    ?>
    <hr>
    หมวดหมู่:
    <select name = "category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <a href="login.php"style="float:right">เข้าสู่ระบบ</a>
    <br>
    <a href="newpost.php">สร้างกระทู่ใหม่</a>
    <br>
    <ul> <form action="post.php" method="get">
    <?php
        for($i = 1 ; $i<=10;$i++){
            echo "<li><a href=post.php?id="."$i".">กระทู้ที่".$i."</a></li>";
        }
        ?>
    </form>
    </ul>
    </div>
</body>
<?php
    }else{
?>
<body>
    <div class="container-fluid">
    <h1><center>Webboard OAsiTz</center></h1>
    <?php include "nav.php";
    ?>
    <hr>
    หมวดหมู่:
    <select name = "category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <div style="float:right">
        <?php
            echo "ผู้ใช้งานในระบบ :".$_SESSION['username'];
        ?>
    <a href="logout.php"target="">ออกจากระบบ</a><br>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู่ใหม่</a>
    <br>
    <ul> <form action="post.php" method="get">
    <?php
        for($i = 1 ; $i<=10;$i++){
            echo "<li>";
            echo "<a href=post.php?id="."$i".">กระทู้ที่".$i."</a>";
            if($_SESSION["role"] == "a"){
                echo "&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
            }
            echo "</li>";

        }
        ?>
    </form>
    </ul>
    </div>
</body>
<?php
    }
?>
</html>