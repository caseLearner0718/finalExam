<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>修改</title>
    </head>
    <body style="font-size: 20px">
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['id'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql="SELECT * FROM user where id ='$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />(此項目無法修改) <br><br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br><br>";
    echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /> <br><br>";
    echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[2]\" /> <br><br>";
    echo "電話：<input type=\"text\" name=\"phone\" value=\"$row[3]\" /> <br><br>";
    echo "備註：<textarea name=\"type\" cols=\"45\" rows=\"5\">$row[4]</textarea> <br><br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.html">';
}
?>
    </body>
    </html>
