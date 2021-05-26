<?php
include("inc/connection.inc.php");

ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
    $user = "";
    $utype_db = "";
} else {
    $user = $_SESSION['user_login'];
    $result = $con->query("SELECT * FROM user WHERE id='$user'");
    $get_user_name = $result->fetch_assoc();
    $uname_db = $get_user_name['fullname'];
    $utype_db = $get_user_name['type'];
}

//time ago convert
include_once("inc/timeago.php");
$time = new timeago();


?>



<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />

    <!-- menu tab link -->
    <link rel="stylesheet" type="text/css" href="css/homemenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        .heading {
            text-align: center;
            color: antiquewhite;
            font-size: 4rem;
            margin-top: 9rem;
            font-family: Verdana, Geneva, sans-serif;
        }

        body {
            background: linear-gradient(rgba(54, 48, 48, 0.8), rgba(54, 48, 48, 0.6)), url('https://images.unsplash.com/photo-1577985051167-0d49eec21977?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxpYnJhcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            min-width: 100vw;
        }
    </style>

</head>

<body class="body1">
    <div>
        <div>
            <header class="header">

                <div class="header-cont">

                    <?php
                    include 'inc/banner.inc.php';
                    ?>

                </div>
            </header>

        </div>
        <div class="topnav">
            <div class="parent2">
                <div class="test1 bimage1"><a href=""><img src="image/tech.png" title="IT Solution" style="border-radius: 50%;" width="42" height="42"></a></div>
                <div class="test2"><a href="#"><img src="image/eventmgt.png" title="Event Management" width="42" height="42" style="border-radius: 50%;"></a></div>
                <div class="test3"><a href="#"><img src="image/photography.png" title="Photography" width="42" height="42" style="border-radius: 50%;"></a></div>
                <div class="test4"><a href="#"><img src="image/teaching.png" title="Tution" style="border-radius: 50%;" width="42" height="42"></a></div>
                <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
            </div>
            <a class="active navlink" href="index.php" style="margin: 0px 0px 0px 100px;">Newsfeed</a>
            <a class="navlink" href="search.php">Search Tutor</a>
            <?php
            if ($utype_db == "teacher") {
            } else {
                echo '<a class="navlink" href="postform.php">Post</a>';
            }

            ?>
            <a class="navlink" href="#contact">Contact</a>
            <a class="navlink" href="#about">About</a>

        </div>

        <h1 class="heading"> Welcome To<br> Online Tutor Finder System </h1>
    </div>





    <!-- main jquery script -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- homemenu tab script -->
    <script src="js/homemenu.js"></script>

    <!-- topnavfixed script -->
    <script src="js/topnavfixed.js"></script>

</body>

</html>