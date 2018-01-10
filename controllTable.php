<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 10:25
 */
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>資料中心</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    if($_SESSION['id'] != null){
        echo "<div id=\"fullscreen_bg\" class=\"fullscreen_bg\"/>";
        echo "<div class=\"container\"><br><br><br><br><br><br><br>";
        echo "<a href='update.php'><button class=\"btn btn-lg btn-primary btn-block\">修改</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">Home</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">Profile</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">Activity</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">Program</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">Publication</button></a><br>";
        echo "<a href='homeControll.php'><button class=\"btn btn-lg btn-primary btn-block\">CV</button></a><br>";
        echo "</div></div>";
    }
    else {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv="REFRESH" CONTENT="1;url=login.html">';
    }
?>
</body>
</html>
