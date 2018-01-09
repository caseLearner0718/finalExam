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
                <li class="active"><a href="publication.php">Publication</a></li>
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
        <li><a data-toggle="tab" href="#menu5">Product</a></li>
        <li><a data-toggle="tab" href="#menu5">International Standard</a></li>
        <li><a data-toggle="tab" href="#menu5">Thesis</a></li>
    </ul>
    <div class="tab-content">
        <!-- -------------------- International Journal  ------------------------------------ -->
        <div id="home" class="tab-pane fade in active">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Jun-Li Kuo*, Chen-Hua Shih, Cheng-Yuan Ho, and Yaw-Chung Chen, “Advanced Bootstrap and Adjusted Bandwidth for Content Distribution in Peer-to-Peer Live Streaming,” Peer-to-Peer Networking and Applications, Vol. 8, Issue 3, pp. 414-431, May 2015. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/AA.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yun Ho, Ming-Hsiang Huang, Cheng-Yuan Ho, and Chien-Chao Tseng*, “Bandwidth and Latency Aware Contribution Estimation in P2P Streaming System,” IEEE Communications Letters, Vol. 18, Issue 9, pp. 1511-1514, September 2014. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/BLACE.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Ying-Dar Lin, Ekarat Rattagan, Yuan-Cheng Lai, Li-Pin Chang*, Yun-Chien Yo, Cheng-Yuan Ho, and Shun-Lee Chang, “Calibrating Parameters and Formulas for Process-level Energy Consumption Profiling in Smartphones,” ELSEVIER Journal of Network and Computer Applications, Vol. 44, pp. 106-119, September 2014. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Calibrating.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Jun-Li Kuo*, Chen-Hua Shih, Cheng-Yuan Ho, and Yaw-Chung Chen, “A Cross-Layer Middleware for Context-Aware Cooperative Application on Mobile Ad Hoc Peer-to-Peer Network,” ELSEVIER Journal of Systems and Software, Vol. 92, pp. 95-106, June 2014. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/CACA.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Ying-Dar Lin, Yuan-Cheng Lai*, Cheng-Yuan Ho, and Wei-Hsuan Taia, “Creditability-based Weighted Voting for Reducing False Positives and Negatives in Intrusion Detection,” ELSEVIER Computers and Security, Vol. 39, Part B, pp. 460-474, November 2013. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/WeightedVoting.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Ying-Dar Lin, Cheng-Yuan Ho, Yuan-Cheng Lai*, Tzu-Hsiung Du, and Shun-Lee Chang, “Booting, Browsing and Streaming Time Profiling and Bottleneck Analysis on Android-Based Systems,” ELSEVIER Journal of Network and Computer Applications, Vol. 36, Issue 4, pp. 1208-1218, July 2013. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Profiling.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Chien-Chao Tseng, Chia-Liang Lin*, Li-Hsing Yen, Jyun-Yan Liu, and Cheng-Yuan Ho, “CAN – A Context-Aware NAT Traversal Scheme,” ELSEVIER Journal of Network and Computer Applications, Vol. 36, Issue 4, pp. 1164-1173, July 2013. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/CAN.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Jun-Li Kuo*, Chen-Hua Shih, Cheng-Yuan Ho, and Yaw-Chung Chen, “A Cross-Layer Approach for Real-Time Multimedia Streaming on Wireless Peer-to-Peer Ad-Hoc Network,” ELSEVIER Ad Hoc Networks, Vol. 11, Issue 1, pp. 339-354, January 2013. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/COME.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> </font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> </font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> </font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> </font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
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
