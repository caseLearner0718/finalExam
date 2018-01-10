<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 上午 12:33
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
                <li class="active"><a href="program.php">Program</a></li>
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
        <li class="active"><a data-toggle="tab" href="#home">Teaching Experience</a></li>
        <li><a data-toggle="tab" href="#menu2">Teaching Assistant Experience</a></li>
        <li><a data-toggle="tab" href="#menu3">Participated Projects</a></li>
        <li><a data-toggle="tab" href="#menu4">Talks/Presentations</a></li>
    </ul>
    <div class="tab-content">
        <!-- -------------------- International Journal  ------------------------------------ -->
        <div id="home" class="tab-pane fade in active">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Formal Course<br></font>
                <ul>“Information and Technology” for non-CS undergraduates (Asia University): Spring and Fail 2017.
                    <br>(Course Code:
                    <br><li>Spring 2017: GRG00093D, GRG00093H, GRG00093K, and GRG00093O</li>
                    <br><li>Fail 2017: GRG00093A, GRG00093AA, GRG00093AI, GRG00093E, and GRG00093O</li>
                    <br>)
                </ul>
                <ul>“Introduction to Network Programming and its Hands-on Training” for graduate students (National Chiao Tung University, NCTU): Summer Semester 2009, 2010, and 2011.</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Short/Training Course<br></font>
                <ul>“Refactoring: Improving the Design of Existing Code” for Sincere International Consulting Co., Ltd.: May, 2012.</ul>
                <ul>“Linux Networking” for Sincere International Consulting Co., Ltd.: May, 2012.</ul>
                <ul>“Computer Network and Network Programming” for International Games System Co., Ltd.: Oct. ~ Dec., 2010.</ul>
                <ul>“Introduction to Internet Applications” for Sincere International Consulting Co., Ltd.: May, 2010.</ul>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> Short/Training Course<br><br></font>

            </ol>
        </div>

        <div id="menu2" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Computer Networks” for CS graduate students (NCTU): Spring 2007.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “An Introduction to the Internet” for non-CS undergraduates (NCTU): Fall 2006.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Local Area Networks” for CS graduate students (NCTU): Spring 2005.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Programming Languages” for CS undergraduates (NCTU): Fall 2004 and 2005.<br><br></font>
            </ol>
        </div>

        <div id="menu3" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2017年經濟部中小企業處4G行動商務應用服務計畫—Juiker 智慧物聯應用服務: Apr., 2017 ~ Nov., 2017.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2016~2017年經濟部技術處A+企業創新淬鍊計畫—Juiker全球在地化聯邦雲開發計畫 (整合型研發計畫): Jul., 2016 ~ Dec., 2017.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2016年經濟部工業局電腦軟體共同供應契約雲端服務類－即時通訊雲: Dec., 2016 ~ Jan., 2017.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2016年經濟部中小企業處4G行動商務應用服務計畫－Juiker 4G商務E速通: Apr., 2016 ~ Nov., 2016.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2015年經濟部工業局電腦軟體共同供應契約雲端服務類－即時通訊雲: Nov., 2015 ~ Nov., 2016.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2015年經濟部中小企業處4G行動商務應用服務計畫－Juiker 4G智慧商務通: May, 2015 ~ Feb., 2016.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2015~2016年工業技術研究院委託之公部門新世代行動通訊解決方案－服務擴散計畫: Mar., 2015 ~ Jun., 2016.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2015~2016年工業技術研究院委託之公部門新世代行動通訊解決方案－基盤推廣計畫: Mar., 2015 ~ Jun., 2016.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 2015~2016年工業技術研究院委託之公部門新世代行動通訊解決方案－先期導入計畫: Mar., 2015 ~ Jun., 2015.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 健康照護與促進服務系統開發與整合委託案: Sep., 2014 ~ Nov., 2014.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 系統服務技術與事業轉型計畫(2/4): Jan., 2014 ~ Nov., 2014.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 企業健檢服務系統架構實作與整合委託案: Oct., 2013 ~ Mar., 2014.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 專利工廠的發明產生模式：強化美國申請品質示範計畫: Apr., 2013 ~ Mar., 2014.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 系統服務技術與事業轉型計畫(1/4): Jan., 2013 ~ Dec., 2013.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 智慧生活雲端整合服務系統: Oct., 2012 ~ Sep., 2013.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 智慧飯店雲與行動生活整合服務平台: Apr., 2012 ~ Jun., 2013.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 事業轉型平台雛形與領域應用計畫(1/1): Apr., 2012 ~ Mar., 2013.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 智慧型遠距醫療整合服務系統: Sep., 2011 ~ Aug., 2012.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 針對雲端與產業化資料中心網路研發設計一套更快速且更可靠的網際網路通訊機制: Aug., 2011 ~ Jul., 2013.
                    <br>(Principal Investigator (PI), Transferred to Dept. of Computer Science, NCTU)<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 鑽石計畫: Aug., 2010 ~ Jul., 2011.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) PCAP Lib真實流量測試計畫: Aug., 2010 ~ Jul., 2011.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 友訊交大聯合研發中心計畫: Jul., 2008 ~ Jul., 2011.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 下一世代資訊通訊網路尖端技術與應用(二) ─ 子計畫五：網路安全: Apr., 2004 ~ Jun., 2008.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 校園網路IPv6 SIP VoIP之建置與推廣: Jan., 2004 ~ Dec., 2004<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 支援下一代無線與FTTx 擷取之光纖都會網路技術 ─ 子計畫四: Sep., 2003 ~ Jul., 2006.<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 下一世代資訊通訊網路尖端技術及應用: Sep., 2003 ~ Mar., 2004.<br><br></font>
            </ol>
        </div>

        <div id="menu4" class="tab-pane fade">
            <ol class='pubList'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Transportation Analytics: Applying the Big Data of Electronic Ticket to Ridership Analysis of Taichung City Bus in Taichung City” for Department of Public Health, China Medical University (Dec. 11, 2017).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “How to Make Your Rough Ideas to Quality Patents” for Advanced Research Institute, Institute for Information Industry (Jul. 26, 2012).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Patent Application and Material Strategy - All for The Money” for Advanced Research Institute, Institute for Information Industry (Mar. 14, 2012).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “When Research Meets Product - Real Cases of Cloud Computing and Software Engineering” for Department of Computer Science and Information Engineering, National Taipei University (Feb. 29, 2012).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “When Analytics Meets Services” for Department of Computer Science and Information Engineering, National Taiwan Normal University (Oct. 22, 2011).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Introduction to Patent Strategy and Thinking Models” for Advanced Research Institute, Institute for Information Industry (Sep. 21, 2011).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “When Research Meets Product - Real Cases of Network Protocols, System Architecture, and Software Engineering” for Department of Computer Science and Information
                    <br>Engineering, National Chung Cheng University (Mar. 21, 2011) and Advanced Research Center, Institute for Information Industry (Apr. 29, 2011).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Why Test?” for Department of Information and Computer Engineering, Chung Yuan Christian University (Mar. 7, 2011).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Introduction to NBL - RealFlow Beta Site” for Botnet Detection Research Project, National Taiwan University (Nov. 22, 2010).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “How to Design and Manage a Project - Real Case Study” for D-Link NCTU Joint Research Center, National Chiao Tung University (Nov. 10, 2010).<br><br></font>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> “Research Experience Sharing from a Young Explorer” for D-Link NCTU Joint Research Center, National Chiao Tung University (Oct. 20, 2008 and Jul. 28, 2010) and Department of
                    <br>Computer Science and Information Engineering, National Changhua University of Education (Dec. 26, 2008).<br><br></font>
            </ol>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>
</body>
</html>
