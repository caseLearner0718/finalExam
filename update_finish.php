<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = (sha1($_POST['pw']));
$pw2 = (sha1($_POST['pw2']));
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['id'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['id'];

    //更新資料庫資料語法
    $sql = "update `user` set pw='$pw', email='$email', phone='$phone', `type`='$type' where id='$id'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=member.php">';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=member.php">';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>