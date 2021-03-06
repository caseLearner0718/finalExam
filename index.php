<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 上午 12:13
 */
session_start();
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="activity.php">Activity</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="publication.php">Publication</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="cv.php">CV</a></li>
                <?php
                if (isset($_SESSION['id'])){
                    echo '<li><a href="controllTable.php"><span style="color: royalblue">Controll table</span></a></li>';
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://people.cs.nctu.edu.tw/~tommyho/bio1.JPG" alt="Image">
            <div class="carousel-caption">
                <h3>This is a man</h3>
                <p>Is me!</p>
            </div>
        </div>

        <div class="item">
            <img src="http://people.cs.nctu.edu.tw/~tommyho/bio2.JPG" alt="Image">
            <div class="carousel-caption">
                <h3>This is a happy man</h3>
                <p>Is me again!</p>
            </div>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <div class="container text-center">
    <h3>What We Do</h3><br>
    <div>
        <div>
            <?php
            include("mysql_connect.inc.php");
            $dataName = "homeData";
            $sql="SELECT * FROM `$dataName` where 1";
            $result = mysqli_query($link,$sql);
            while($row = @mysqli_fetch_row($result))
            {
            echo "<p align=\"justify\" style=\"margin-top: 15px; margin-bottom: 15px\"><font size=\"4\" face=\"Times New Roman\">";
                echo "$row[1]";
                echo "</font></p>";
            echo "
            ";
            }
            ?>
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px"><font size="4" face="Times New Roman">Dr. Cheng-Yuan Ho is currently an Associate Professor of Practice in the Department of Computer Science and Information Engineering, and a Chief of Development Division in the Big Data Research Center at Asia University.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px"><font size="4" face="Times New Roman">He received his Bachelor degrees in Mathematics, and Information and Computer Education from National Taiwan Normal University in 2003, the M.S. degree in Computer Science and Information Engineering from National Chiao Tung University (NCTU) in 2004 (enrolled into Ph. D. program directly), and the Ph. D. degree in Computer Science from NCTU in 2008.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px"><font size="4" face="Times New Roman">He was a winner of Microsoft Fellowship 2005. From March to September, 2006, he was an intern and worked for the Wireless and Networking Group of Microsoft Research Asia, Beijing, China. During this period, he assisted in developing Compound TCP (CTCP), which is supported by Windows XP, Vista, 7 and 8, Windows Server 2003 and 2008, and Linux.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px"><font size="4" face="Times New Roman">He was a postdoctoral researcher of D-Link NCTU Joint Research Center at NCTU from July 2008 to July 2010 and an assistant researcher of Information and Communications Technology Lab of Microelectronics and Information Systems Research Center under NCTU's Diamond Program from August 2010 to July 2011. He worked at Advanced Research Institute (ARI) at Institute for Information Industry (III) as a R&amp;D manager from July 2011 to November 2014. He joined LOFTechnology, Inc. as a business operation manager from November 2014 to January 2017.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px">-->
<!--                <font face="Times New Roman" size="4">Among the projects he led/managed after 2008, the two projects, &quot;community-based healthcare cloud service&quot; and &quot;Mydlink 1.5&quot; (now called Mydlink Cloud), that impressed him most. This is because the former was not only nominated for 2013 R&amp;D 100 Awards but also the 3rd among the winners of 2013 Technology Contest in III, while the latter, Mydlink 1.5 project, supported the communication technologies of Mydlink cloud service and the sale volume of its related products was about 600 K in 2011.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px">-->
<!--                <font face="Times New Roman" size="4">His main research is focusing on computer networks and Internet of Things (IoT). For example, his research areas are information-centric networking (ICN), peer-to-peer (P2P) network, wireless networks, such as WiMAX and WiFi, and network protocols and algorithms, especially for transmission control protocol (TCP). Until now, he has 25 international journal papers, 11 international conference papers, and 1 expired Internet Engineering Task Force (IETF) standard application.</font></p>-->
<!--            <p align="justify" style="margin-top: 15px; margin-bottom: 15px">-->
<!--                <font face="Times New Roman" size="4">He also has experience in patent invention related to systems, methods, and components of the software, computer, communication, and network, patent portfolio management, intellectual property counseling, and patent applications. For example, he has 12 patents and 17 patent applications, totally equaling to 10-->
<!--                    patent families. Furthermore, at ARI, he plays another role as an in house patent engineer (IHPE) to assist colleagues in obtaining patents and patent portfolios, and making patent development strategy.</font></p>-->
            <p align="justify" style="margin-top: 15px; margin-bottom: 15px">
                <font face="Times New Roman" size="4">Office: I412, No. 500, Lioufeng Rd., Wufeng Dist., Taichung, 41354, Taiwan</font></p>
        </div>
    </div><br>
     <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5721582672886!2d120.68521641538392!3d24.0461479833298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693b17a99d736b%3A0x1c471d70cdc89dc9!2z5Lqe5rSy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1514882014883" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
         <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>
</body>
</html>
