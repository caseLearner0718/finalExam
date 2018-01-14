<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 上午 12:35
 */
session_start();

if(isset($_SESSION['id'])){
    include ("mysql_connect.inc.php");
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
                <li class="active"><a href="publication.php">Publication</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="cv.php">CV</a></li>
                <?php
                if (isset($_SESSION['id'])){
                    echo '<li><a href="controllTable.php">Controll table</a></li>';
                }
                ?>
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
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">International Journal Paper (* Corresponding author)</a></li>
        <li><a data-toggle="tab" href="#menu2">International Conference Paper</a></li>
        <li><a data-toggle="tab" href="#menu3">Domestic Journal Papers</a></li>
        <li><a data-toggle="tab" href="#menu4">Domestic Conference Papers</a></li>
        <li><a data-toggle="tab" href="#menu5">Patent</a></li>
        <li><a data-toggle="tab" href="#menu6">International Standard</a></li>
        <li><a data-toggle="tab" href="#menu7">Thesis</a></li>
    </ul>
    <div class="tab-content">
        <!-- -------------------- International Journal  ------------------------------------ -->
        <div id="home" class="tab-pane fade in active">
            <ol class='pubList'>
                <?php
                include("mysql_connect.inc.php");
                $dataName = "publication_IJP_Data";
                $sql="SELECT * FROM `$dataName` where 1";
                $result = mysqli_query($link,$sql);
                while($row = @mysqli_fetch_row($result))
                {
                    echo "<span lang=\"EN-US\" style=\"FONT-SIZE: 8pt; FONT-FAMILY: Wingdings\">l</span><font size=\"4\" face=\"Times New Roman\">$row[1]</font>";
                    echo "<a target=\"_blank\" href=\"$row[2]\"><img border=\"0\" src=\"pdf.jpg\" width=\"16\" height=\"16\"></a><br>";
                    echo "
                        ";
                }
                ?>
            </ol>
        </div>

        <div id="menu2" class="tab-pane fade">
            <ol class='pubList'>
                <?php
                include("mysql_connect.inc.php");
                $dataName = "publication_ICP_Data";
                $sql="SELECT * FROM `$dataName` where 1";
                $result = mysqli_query($link,$sql);
                while($row = @mysqli_fetch_row($result))
                {
                    echo "<span lang=\"EN-US\" style=\"FONT-SIZE: 8pt; FONT-FAMILY: Wingdings\">l</span><font size=\"4\" face=\"Times New Roman\">$row[1]</font>";
                    echo "<a target=\"_blank\" href=\"$row[2]\"><img border=\"0\" src=\"pdf.jpg\" width=\"16\" height=\"16\"></a><br>";
                    echo "
                        ";
                }
                ?>
            </ol>
        </div>

        <div id="menu3" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 王建堯, 劉志翔, 吳怡欣, 邱育賢, 陳意雯, 沈晏麟, 何承遠, 蔡正煜, 蒙以亨, 蕭暉議, “社群化健康照護平臺之設計與實現,” 醫療資訊雜誌, 23:1 2014.03 [民103.03], 頁49-61.</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/DJP1.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
            </ol>
        </div>

        <div id="menu4" class="tab-pane fade">
            <ol class='pubList'>
                <?php
                include("mysql_connect.inc.php");
                $dataName = "publication_DCP_Data";
                $sql="SELECT * FROM `$dataName` where 1";
                $result = mysqli_query($link,$sql);
                while($row = @mysqli_fetch_row($result))
                {
                    echo "<span lang=\"EN-US\" style=\"FONT-SIZE: 8pt; FONT-FAMILY: Wingdings\">l</span><font size=\"4\" face=\"Times New Roman\">$row[1]</font>";
                    echo "<a target=\"_blank\" href=\"$row[2]\"><img border=\"0\" src=\"pdf.jpg\" width=\"16\" height=\"16\"></a><br>";
                    echo "
                        ";
                }
                ?>
            </ol>
        </div>

        <div id="menu5" class="tab-pane fade">
            <ol class='pubList'>
                <?php
                include("mysql_connect.inc.php");
                $dataName = "publication_A_Data";
                $sql="SELECT * FROM `$dataName` where 1";
                $result = mysqli_query($link,$sql);
                while($row = @mysqli_fetch_row($result))
                {
                    echo "<span lang=\"EN-US\" style=\"FONT-SIZE: 8pt; FONT-FAMILY: Wingdings\">l</span><font size=\"4\" face=\"Times New Roman\">$row[1]</font><br><br>";
                    echo "
                        ";
                }
                ?>
            </ol>
        </div>

        <div id="menu6" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Compound TCP: A New TCP Congestion Control for High-Speed and Long Distance Networks,” IETF Internet Draft, <draft-sridharan-tcpm-ctcp-02.txt>, April 2009. (Expired)</font>
            </ol>
        </div>

        <div id="menu7" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, “Design and Performance Evaluation of an End-to-end Congestion Control Algorithm,” Ph.D. Thesis, Department of Computer Science at National Chiao Tung University, June 2008.</font>
            </ol>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>
</body>
</html>
