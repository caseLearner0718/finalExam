<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 上午 01:57
 */
session_start();

if(isset($_SESSION['id'])){
    include ("mysql_connect.inc.php");
    $sql="SELECT *FROM user where id ='id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cheng-Yuan Ho</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
        .carousel-inner > .item > img {
            width:auto;
            height:570px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/">亞洲大學</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="activity.php">Activity</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="publication.php">Publication</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li class="active"><a href="cv.php">CV</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['id'])){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
                }else{
                    echo '<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h3>Associate Professor of Practice<br>
        Department of Computer Science and Information Engineering at Asia University</h3>

    <div class="tab-content">
        <h3>Thanks for Your Interest.

            Please Contact Cheng-Yuan via Email and Please Describe Your Purpose.</h3>
    </div>

    <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>
</body>
</html>

