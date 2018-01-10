<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>hahaha</title>
    </head>
    <body style="font-size: 20px">
<?php
include("mysql_connect.inc.php");
echo '<a href="logout.php">登出</a>  <br><br>';
$id=$_SESSION['id'];
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['id'] != null)
{
        echo '<a href="register.php">新增</a>    ';
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';

        $sql="SELECT * FROM `user` where id ='$id'";
        $result = mysqli_query($link,$sql);
        while($row = @mysqli_fetch_row($result))
        {
            echo "名字(帳號)：$row[0], " .
                "信箱：$row[2], 電話：$row[3], 備註：$row[4]<br>";
        }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.html">';
}
?>
    </body>
    </html>
