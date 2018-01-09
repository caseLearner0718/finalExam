<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");
$id =$_POST['id'];
$pw =(sha1($_POST['pw']));

$sql="SELECT * FROM `user` where id ='$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($id !=null && $pw !=null && $row[0]==$id && $row[1]==$pw){
    $_SESSION['id']=$id;
    echo '登入成功!';
    echo '<meta http-equiv="refresh" content="1; url=index.php">';

}
else{
    echo'登入失敗';
    echo '<meta http-equiv="REFRESH" CONTENT="1; url=login.html">';
}
?>