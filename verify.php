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
    <title>verify</title>
</head>
<body>
    <h1 align="center">Webboard OAsiTz  </h1>
    <hr>
    <div align = "center">
        <?php
            $login=$_POST["login"];
            $password=$_POST["pass"];
            if($login=="admin"&& $password=="ad1234"){
                echo"ยินดีต้องรับคุณ ADMIN";
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = session_id();
            }
            elseif($login =="member" &&  $password=="mem1234"){
                echo"ยินดีต้อนรับคุณ MEMBER";
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = session_id();
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>
        <br><a href="index.php">กลับไปยังหน้าหลัก</a>
        เข้าสู่นะบบ <br>
        Login = <?php echo $_POST["login"];?><br>
        Password = <?php echo $_POST["pass"];?>
    </div>
</body>
</html>