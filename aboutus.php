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
            
            font-size: 3rem;
            margin-top: 2rem;
            font-family: Verdana, Geneva, sans-serif;
        
        }

        .para{
            padding-left: 3rem;
            padding-right: 3rem;
            margin-top: 2rem;
            line-height: 30px;
            color: white;
        }

        /* body {
            background: linear-gradient(rgba(54, 48, 48, 0.9), rgba(54, 48, 48, 0.7)), url('https://images.unsplash.com/photo-1577985051167-0d49eec21977?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxpYnJhcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            min-width: 100vw;
        } */
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

        <h1 class="heading"> ABOUT US </h1>
        <p class="para">The system of private tuition has been in existence in India for a long time but in recent times it has 
        grown in manifold affecting the core of the educational system. This private tutor system will help to find 
        tuition teachers from nearby locations. Teachers can also get a student just by logging onto the website and 
        setting up the profile. <br>In the online tutor finder system, there are three entities namely, Student, Parent, and 
        Tutor. Student can login, manage profile by update their details. In homepage, one can also check for the 
        registered students. Anyone who wants to teach can register and credentials will be shared with tutors by Email. 
        Parents can register and login, tutors can be viewed by parents. Parents can filter and select the tutor and 
        after selecting, a notification will be sent to that particular tutor saying that the student has selected him as
         the tutor. The tutor can login by using credentials that will be provided by mail. They can check for the request
         and accept the request. They can also check the booking done. They need to set their profile. This private tuition
          system can help the tutors to get students and parents to find the best tutors for their children.
        </p>
    </div>





    <!-- main jquery script -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- homemenu tab script -->
    <script src="js/homemenu.js"></script>

    <!-- topnavfixed script -->
    <script src="js/topnavfixed.js"></script>

</body>

</html>