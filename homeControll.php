<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 11:06
 */
session_start();
include("mysql_connect.inc.php");
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home 控制台</title>
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
        echo '<nav class="navbar navbar-inverse">
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
                <li class="active"><a href="#">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container text-center">
    <h3>Content in home</h3><br>
    <div>
        <div>';?>
        <table style="width:100%" border="0">
            <?php
            $dataName = "homeData";
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
        </table>
        <?php
        echo '
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
<!--<p align="justify" style="margin-top: 15px; margin-bottom: 15px"><font size="4" face="Times New Roman">Dr. Cheng-Yuan Ho is currently an Associate Professor of Practice in the Department of Computer Science and Information Engineering, and a Chief of Development Division in the Big Data Research Center at Asia University.</font></p>';-->