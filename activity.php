<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 上午 12:31
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
                <li class="active"><a href="activity.php">Activity</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="publication.php">Publication</a></li>
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
        <li class="active"><a data-toggle="tab" href="#home">Professional Activities</a></li>
        <li><a data-toggle="tab" href="#menu2">Academic Achievements</a></li>
    </ul>
    <div class="tab-content">
        <!-- -------------------- International Journal  ------------------------------------ -->
        <div id="home" class="tab-pane fade in active">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> The 3rd among the winners of 2013 III Technology Contest (Project: Community-based Healthcare Service).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Nomination for 2013 R&D 100 Awards (Project: Community-based Healthcare Service).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> A winner of Microsoft Fellowship 2005.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> An intern in the Wireless and Networking Group, Microsoft Research, Asia, Beijing, China, from March to September 2006.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> 2011 Who's Who in the World.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> 2007 Who's Who in Science and Engineering.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> A Member of IEEE, ACM, and IEICE.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> A Member of IEEE Communications Society.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Editorial board of<br><br></font>
                <ul><a target="_blank" href="http://www.pspchv.com/editorial_board_PJCSET.html">Pioneer Journal of Computer Science and Engineering Technology</a></ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Executive Committee Member of<br><br></font>
                <ul>2017 International Conference for Big Data and AI in Medical &amp; FinTech</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Technical Program Committee Member of<br><br></font>
                <ul>IEEE International Conference on Networking and Services 2005 (ICNS)</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Patent and Technology Counseling Committee Member of<br><br></font>
                <ul>Asia University (Aug., 2017 ~ Jul., 2018)</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Conference Session Chair of<br><br></font>
                <ul>2017 Taiwan Conference on Software Engineering (TCSE 2017)</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Journal/Conference Reviewer or Referee of<br><br></font>
                <ul>IEEE Journal on Selected Areas in Communications (JSAC)</ul>
                <ul>IEEE Communications Letters</ul>
                <ul>ELSEVIER Computer Communications</ul>
                <ul>ELSEVIER Computer Networks</ul>
                <ul>IET Communications</ul>
                <ul>IEEE Signal Processing Letters</ul>
                <ul>Journal of High Speed Networks</ul>
                <ul>Journal of Information Science and Engineering</ul>
                <ul>The 2007 International Conference on Parallel Processing (ICPP 2007)</ul>
                <ul>Consumer Communications & Networking Conference (CCNC 2007)</ul>
            </ol>
        </div>

        <div id="menu2" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> He participated the National Computer Programming Competition (university	group) and finished masterpiece in 2002.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> He participated the Computer Programming Competition of the Department of	Information and Computer Education, National Taiwan Normal University and obtained third award in 2002.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> An honor student award of the Department of Mathematics, National Taiwan Normal University in 2001.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> A cadre member: for example, a class chairman, general affairs, etc.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> He has been awarded a variety of fellowships and commendations: such as (1) Pao-An Temple (generally known as “Ta-Lon Tong Ta-Tao-Gon Temple”) in 2001, 2002, 2003, (2) Lung-Shan Temple, Taipei in 2002, and (3) a farmers' association from 1999 to 2002, etc.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> An honor student award of the Department of Computer Science and Information Engineering, National Chiao Tung University in 2004.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Exempt from entrance examination for admission to Ph. D. program of the Department of Computer Science and Information Engineering, National Chiao Tung University directly in 2004.<br><br></font>
            </ol>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>
</body>
</html>
