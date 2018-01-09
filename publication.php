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
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="cv.php">CV</a></li>
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
        <li><a data-toggle="tab" href="#menu5">International Standard</a></li>
        <li><a data-toggle="tab" href="#menu6">Thesis</a></li>
        <li><a href="cv.php">Linkedin</a></li>
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
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Chen-Hua Shih*, Jun-Li Kuo, Cheng-Yuan Ho, and Yaw-Chung Chen, “Media-Independent Handover Design for Seamless Mobility in Heterogeneous WiMAX/WiFi Networks,” IEICE Transactions on Communications, Vol. E95-B, No. 10, pp. 3168-3178, October 2012. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/PPB.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Jun-Li Kuo*, Chen-Hua Shih, Cheng-Yuan Ho, Ming-Ching Wang, and Yaw-Chung Chen, “RING: A Cross-Layer P2P Group Conferencing Mechanism over Mobile Ad-Hoc Networks,” IEICE Transactions on Communications, Vol. E95-B, No. 9, pp. 2759-2768, September 2012. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/RING.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Ying-Dar Lin, Yuan-Cheng Lai, I-Wei Chen, Fu-Yu Wang, and Wei-Hsuan Tai, “False Positives and Negatives from Real Traffic with Intrusion Detection/Prevention Systems,” International Journal of Future Computer and Communication, Vol. 1, No. 2, pp. 87-90, August 2012. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/FPN.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yuan-Cheng Lai, I-Wei Chen, Fu-Yu Wang, and Wei-Hsuan Tai, “Statistical Analysis of False Positives and False Negatives from Real Traffic with Intrusion Detection/Prevention Systems,” IEEE Communications Magazine, Vol. 50, No. 3, pp. 146-154, March 2012. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/FPFN.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Cheng-Yun Ho, and Jui-Tang Wang, “Performance Improvement of Delay-based TCPs in Asymmetric Networks,” IEEE Communications Letters, Vol. 15, Issue 3, pp. 355-357, March 2011. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ALT.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Fu-Yu Wang, Chien-Chao Tseng, and Ying-Dar Lin, “NAT-Compatibility Testbed: An Environment to Automatically Verify Direct Connection Rate,” IEEE Communications Letters, Vol. 15, Issue 1, pp. 4-6, January 2011. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Testbed.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Chien-Chao Tseng, Fu-Yu Wang, Jui-Tang Wang, and Ying-Dar Lin, “To Call or to Be Called behind NATs is Sensitive in Solving the Direct Connection Problem,” IEEE Communications Letters, Vol. 15, Issue 1, pp. 94-96, January 2011. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Caller-role.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Ying-Dar Lin, Chien-Chao Tseng, Cheng-Yuan Ho*, and Yu-Hsien Wu, “How NAT-Compatible are VoIP Applications?,” IEEE Communications Magazine, Vol. 48, No. 12, pp. 58-65, December 2010. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/NAT-compatible.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Yi-Cheng Chan*, Chia-Liang Lin, Chia-Tai Chan, and Cheng-Yuan Ho, “CODE TCP: A Competitive Delay-Based TCP,” ELSEVIER Computer Communications, Vol. 33, Issue 9, pp. 1013-1029, June 2010. [SCI-Expanded, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/CODE.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Yi-Cheng Chan*, Chia-Liang Lin, and Cheng-Yuan Ho, “Quick Vegas: Improving Performance of TCP Vegas for High Bandwidth-Delay Product Networks,” IEICE Transactions on Communications, Vol. E91-B, No. 4, pp. 987-997, April 2008. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/QuickVegas.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yaw-Chung Chen, Yi-Cheng Chan, and Cheng-Yun Ho, “Fast Retransmit and Fast Recovery Schemes of Transport Protocols: A Survey and Taxonomy,” ELSEVIER Computer Networks, Vol. 52, Issue 6, pp. 1308-1327, April 2008. [SCI-Expanded, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/FF.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yi-Cheng Chan, and Yaw-Chung Chen, “WARD: a transmission control protocol-friendly stateless active queue management scheme,” IET Communications**, Vol. 1, Issue 6, pp. 1179-1186, December 2007. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/WARD.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yi-Cheng Chan, and Yaw-Chung Chen, “WARD: A Deterministic Fluid Model,” IET Communications**, Vol. 1, Issue 4, pp. 711-717, August 2007. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/WARDana.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yi-Cheng Chan, and Yaw-Chung Chen, “TCP-Ho: A Congestion Control Algorithm with Design and Performance Evaluation,” IEICE Transactions on Communications, Vol. E90-B, No. 3, pp. 516-526, March 2007. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/TCPHo.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yaw-Chung Chen, and Cheng-Yun Ho, “Improving Performance of Delay-based TCPs with Rerouting,” IEEE Communications Letters, Vol. 11, Issue 1, pp. 88-90, January 2007. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/RB.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho*, Yi-Cheng Chan, and Yaw-Chung Chen, “Gallop-Vegas: An Enhanced Slow-Start Mechanism for TCP Vegas,” Journal of Communications and Networks (KICS), Vol. 8, No. 3, pp.351-359, September 2006. [SCI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/GallopVegas.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho* and Yaw-Chung Chen, “Snug-Vegas and Snug-Reno: Performance Improvement of TCP over Heterogeneous Networks,” IEE Proceedings – Communications, Vol. 153, Issue 2, pp. 169-176, April 2006. [SCI, EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/SNUG.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
            </ol>
        </div>

        <div id="menu2" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yun Ho, Cheng-Yuan Ho, and Chien-Chao Tseng, “A Case Study of Cache Performance in ICN – Various Combinations of Transmission Behavior and Cache Replacement Mechanism,” in Proceedings of The 17th IEEE International Conference on Advanced Communication Technology, ICACT 2015, pp. 323-328, Phoenix Park, Gangwon-Do, Korea, July 2015, http://dx.doi.org/10.1109/ICACT.2015.7224813. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICACT2015.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Ying-Dar Lin, Yuan-Cheng Lai, I-Wei Chen, Fu-Yu Wang, and Wei-Hsuan Tai, “False Positives and False Negatives from Real Traffic with Intrusion Detection/Prevention Systems,” 2012 International Conference on Advancements in Information Technology (ICAIT), Hong Kong, June 2012. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/FPN.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Kun Tan, Jingmin Song, Murari Sridharan, and Cheng-Yuan Ho, “CTCP-TUBE: Improving TCP-Friendliness Over Low-Buffered Network Links,” in Proceedings of Sixth International Workshop on Protocols for FAST Long-Distance Networks (PFLDnet 2008), The Schuster Building, The University of Manchester, UK, March 2008. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/PFLDnet2008.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Wen-Kang Jia, Yaw-Chung Chen, and Cheng-Yuan Ho, “Traffic Behavior Analysis of Frame Bursting for SISO IEEE 802.3z Networks,” in Proceedings of Asia-Pacific Optical Communications Conference, SPIE (APOC 2006), Vol. 6354, pp. 63541L-1-63541L-11, Kimdaejung Convention Center, Gwangju, Korea, September 2006. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/SPIE2006.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Yi-Cheng Chan, Chia-Tai Chan, Cheng-Yuan Ho, and Chia-Liang Lin, “Improving Performance of TCP Vegas for High Bandwidth-Delay Product Networks,” in Proceedings of The 8th IEEE International Conference on Advanced Communication Technology, ICACT 2006, Vol. 1, pp. 459-464, Phoenix Park, Gangwon-Do, Korea, February 2006. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICACT2006.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Yi-Cheng Chan, and Yaw-Chung Chen, “A TCP-Friendly Stateless AQM Scheme for Fair Bandwidth Allocation,” in Proceedings of International Conference on Autonomic and Autonomous Systems, and International Conference on Networking and Services, IEEE ICAS 2005 and ICNS 2005, pp. 14-14 (6 pages), Papeete, Tahiti, French Polynesia, October 2005. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICASICNS2005.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Chen-Hua Shih, Yaw-Chung Chen, and Yi-Cheng Chan, “An Aided Congestion Avoidance Mechanism for TCP Vegas,” Lecture Notes in Computer Science (LNCS) 3619/2005, pp. 961-971, August 2005. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICCNMC2005.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Chen-Hua Shih, Yaw-Chung Chen, and Yi-Cheng Chan, “An Aided Congestion Avoidance Mechanism for TCP Vegas,” in Proceedings of 2005 International Conference on Computer Networks and Mobile Computing, ICCNMC 2005, pp. 961-971, Zhangjiajie, Hunan, China, August 2005. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICPADS2005.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Yi-Cheng Chan, and Yaw-Chung Chen, “An Enhanced Slow-Start Mechanism for TCP Vegas,” in Proceedings of The 11th IEEE International Conference on Parallel and Distributed Systems, ICPADS 2005, Vol. 1, pp. 405-411, Fukuoka Institute of Technology (FIT), Fukuoka, Japan, July 2005. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/INFOCOM2005.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Cheng-Yuan Ho, Yi-Cheng Chan, and Yaw-Chung Chen, “An Efficient Mechanism of TCP-Vegas on Mobile IP Networks,” in Proceedings of IEEE INFOCOM 2005, Vol. 4, pp. 2776-2780, Miami, Florida, USA, March 2005</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/INFOCOM2006.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Yi-Cheng Chan, Chia-Tai Chan, Yaw-Chung Chen, and Cheng-Yuan Ho, “Performance Improvement of Congestion Avoidance Mechanism for TCP Vegas,” in Proceedings of The 10th IEEE International Conference on Parallel and Distributed Systems, ICPADS 2004, pp. 605-612, Newport Beach, California, USA, July 2004. [EI]</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/ICPADS2004.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
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
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 何承遠, 廖淑娟, 連耀南, 王義川, “健康取向的老人福利政策：以台中市銀髮族搭乘公車頻率為例分析 (Health-oriented Welfare Policy for the Elderly: A Case Study of Senior Citizens' Bus-Riding Frequency in Taichung City),” in Proceedings of The 2017 International Forum on Taichungology (人智臺中2017臺中學國際研討會論文集), pp. 191-202, National Chung Hsing University, Taichung City, Taiwan, October 2017 (獲[城市觀察類:看得見與看不見的城市]之優質論文獎, High Quality Paper Award in [City Observation Category: Visible and Invisible Cities]).</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Taichung1.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 何承遠, 黃致鈞, 黃意中, 林瑋澤, 吳紹綸, “台中公車乘客量分析—以霧峰區為例 (The Ridership Analysis of Taichung Bus Route - A Case Study of Wufeng District),” in Proceedings of The 2017 International Forum on Taichungology (人智臺中2017臺中學國際研討會論文集), pp. 129-140, National Chung Hsing University, Taichung City, Taiwan, October 2017 (獲[都市發展類:發展中的宜居樂業智慧城]之最佳論文獎, Best Paper Award in [Urban Development Category: The Evolving Smart and Livable City]).</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Taichung2.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 蕭至邦, 廖淑娟, 何承遠, “亞洲大學如何參與霧峰轉型城鎮與社群生活實踐 (How can Asia University participate in the practice of Wufeng Transition Town and Community Life),” in Proceedings of The 2017 International Forum on Taichungology (人智臺中2017臺中學國際研討會論文集), pp. 33-42, National Chung Hsing University, Taichung City, Taiwan, October 2017 (獲[總論類:想像的共同體]之最佳論文獎, Best Paper Award in [General Category: The Imagination of the Community]).</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/Taichung3.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 何承遠, 連耀南, “電子票證大數據應用於台中市公車旅客型態之研究 (A Study on Applying the Big Data of Electronic Ticket to Construct the Passengers' Patterns of Taichung City Bus),” in Proceedings of The 13th Taiwan Conference on Software Engineering (第13屆台灣軟體工程研討會), TCSE 2017, pp. 98-98 (6 pages), Feng Chia University, Taichung City, Taiwan, July 2017.</font>
                <a target="_blank" href="http://people.cs.nctu.edu.tw/~tommyho/publication/TCSE2017.pdf"><img border="0" src="pdf.jpg" width="16" height="16"></a><br>
            </ol>
        </div>

        <div id="menu5" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Compound TCP: A New TCP Congestion Control for High-Speed and Long Distance Networks,” IETF Internet Draft, <draft-sridharan-tcpm-ctcp-02.txt>, April 2009. (Expired)</font>
            </ol>
        </div>

        <div id="menu6" class="tab-pane fade">
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
