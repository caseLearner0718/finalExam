<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:51
 */
$db_server="localhost";
$db_name="105021025";
$db_user="105021025";
$db_passwd="8+9=U4fu4";
if(!@$link=mysqli_connect($db_server,$db_user,$db_passwd,$db_name))
    die("無法對資料庫連線");
mysqli_query($link,"SET NAMES utf8");//<--從網頁那邊新增中文資料到資料庫會亂碼就是這裡

if(!@mysqli_select_db($link,$db_name))
    die("無法使用資料庫");
?>