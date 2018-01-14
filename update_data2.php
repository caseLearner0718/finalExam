<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/14
 * Time: 下午 12:48
 */
session_start();
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_SESSION['id'];
$dataName = $_POST['dataName'];
$dataId = $_POST['dataId'];
$content = $_POST['content'];
$url = $_POST['url'];
if($_SESSION['id'] != null)
{
    //更新資料庫資料語法
    $sql = "update `$dataName` set content='$content', url='$url' where id='$dataId'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="1;url=index.php">';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="1;url=index.php">';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.html">';
}
?>