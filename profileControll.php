<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/13
 * Time: 下午 05:54
 */
session_start();
include("mysql_connect.inc.php");
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile 控制台</title>
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

<?php
if($_SESSION['id'] != null) {
    echo '
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
                <li class="active"><a href="#">Profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logon</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="container text-center">
        <h3>Content in profile</h3>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Education Background</a></li>
        <li><a data-toggle="tab" href="#menu2">Professional Experience</a></li>
        <li><a data-toggle="tab" href="#menu3">Administrative Assistant Experience</a></li>
        <li><a data-toggle="tab" href="#menu4">Research Interests</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <ol class=\'pubList\'><table style="width:100%" border="0">';
                $dataName = "profile_EB_Data";
                $sql="SELECT * FROM `$dataName` where 1";
                $result = mysqli_query($link,$sql);
                while($row = @mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    echo "<td><form action='update_data.php' method='post'><input name='dataName' type='hidden' value='$dataName'><input name='data' type='hidden' value='$data'><input name='dataId' type='hidden' value='$row[0]'><textarea rows=\"3\" cols=\"150\" name=\"content\">";
                    echo "$row[1]";
                    echo "</textarea></td><td><input type='submit' value='submit'></form></td>";
                    echo "<form action=\"delete_data.php\" method=\"post\"><td>
                                    <input name='dataId' type='hidden' value='$row[0]'>
                                    <input type=\"hidden\" name=\"dataName\" value=\"$dataName\">
                                    <input type=\"submit\" value=\"delete\">
                                    </td></form>";
                    echo "</tr>";
                }
                ?>
                <tr>
                    <form action="register_data.php" method="post">
                        <td><textarea rows="3" cols="150" name="content"></textarea></td>
                        <td></td>
                        <td align="center">
                            <input type="hidden" name="dataName" value="<?php echo $dataName;?>">
                            <input type="submit" value="add">
                        </td>
                    </form>
                </tr>
            <?php echo '
            </table></ol>
        </div>

        <div id="menu2" class="tab-pane fade">
            <ol class=\'pubList\'><table style="width:100%" border="0">';
            $dataName2 = "profile_PE_Data";
            $sql2="SELECT * FROM `$dataName2` where 1";
            $result2 = mysqli_query($link,$sql2);
            while($row2 = @mysqli_fetch_row($result2))
            {
                echo "<tr>";
                echo "<td><form action='update_data.php' method='post'><input name='dataName' type='hidden' value='$dataName2'><input name='dataId' type='hidden' value='$row2[0]'><textarea rows='3' cols='150' name='content'>";
                echo "$row2[1]";
                echo "</textarea></td><td><input type='submit' value='submit'></form></td>";
                echo "<form action='delete_data.php' method='post'><td>
                        <input name='dataId' type='hidden' value='$row2[0]'>
                        <input type='hidden' name='dataName' value='$dataName2'>
                        <input type='submit' value='delete'>
                        </td></form>";
                echo "</tr>";
            }
            ?>
                <tr>
                    <form action="register_data.php" method="post">
                        <td><textarea rows="3" cols="150" name="content"></textarea></td>
                        <td></td>
                        <td align="center">
                            <input type="hidden" name="dataName" value="<?php echo $dataName2;?>">
                            <input type="submit" value="add">
                        </td>
                    </form>
                </tr><?php
            echo
            '</table></ol>
        </div>

        <div id="menu3" class="tab-pane fade">
            <ol class=\'pubList\'>
                <span lang="EN-US" style="FONT-SIZE: 8pt; FONT-FAMILY: Wingdings">l</span><font size="4" face="Times New Roman"> (Chinese) 下一世代資訊通訊網路尖端技術與應用(二) ─ 子計畫五：網路安全: Dec., 2006 ~ Jun., 2008.<br><br></font>
            </ol>
        </div>

        <div id="menu4" class="tab-pane fade">
            <ol class=\'pubList\'><table style="width:100%" border="0">';
            $dataName3 = "profile_RI_Data";
            $sql3="SELECT * FROM `$dataName3` where 1";
            $result3 = mysqli_query($link,$sql3);
            while($row3 = @mysqli_fetch_row($result3))
            {
                echo "<tr>";
                echo "<td><form action='update_data.php' method='post'><input name='dataName' type='hidden' value='$dataName3'><input name='dataId' type='hidden' value='$row3[0]'><textarea rows='3' cols='150' name='content'>";
                echo "$row3[1]";
                echo "</textarea></td><td><input type='submit' value='submit'></form></td>";
                echo "<form action='delete_data.php' method='post'><td>
                        <input name='dataId' type='hidden' value='$row3[0]'>
                        <input type='hidden' name='dataName' value='$dataName3'>
                        <input type='submit' value='delete'>
                        </td></form>";
                echo "</tr>";
            }
            ?>
                <tr>
                    <form action="register_data.php" method="post">
                        <td><textarea rows="3" cols="150" name="content"></textarea></td>
                        <td></td>
                        <td align="center">
                            <input type="hidden" name="dataName" value="<?php echo $dataName3;?>">
                            <input type="submit" value="add">
                        </td>
                    </form>
                </tr>
            <?php
            echo
            '</table></ol>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Email: tommyho@aia.edu.tw / tommyho@cs.nctu.edu.tw Tel: +886-4-2332-3456 #1852</p>
    </footer>
</div>';
}
else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.html">';
}
?>

</body>