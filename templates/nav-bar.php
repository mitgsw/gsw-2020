<?php
    // Increase this version every time you change the style.css file
    // See more in https://css-tricks.com/strategies-for-cache-busting-css/#article-header-id-1
    $cssVersion = "1.0.1";

    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    // // Require https

    // if( !($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ){
    //     if ($_SERVER['HTTPS'] != "on") {
    //         $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    //         header("Location: $url");
    //         exit;
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="public">
    <meta charset="UTF-8">
    <meta name = "author" content = "MIT Global Startup Workshop" />
    <meta name = "revised" content = "MITGSW, 1/1/2020" />
    <meta name = "keywords" content = "MIT, MITGSW, Grenoble, France, Alps, Conference, Global Startup Workshop, MIT Global Startup Workshop, Global, Startup, Workshop, Bangkok, Thailand, Massachusetts Institute of Technology, Entrepreneurship, 2019, 2018, Sloan, MIT Business, MIT Entrepreneurship, Bogota, Colombia" />
    <meta name = "description" content = "MITGSW 2020 will be hosted in Grenoble, France - 23 years in the making, MITGSW is MIT's only global student-organized conference, with the goal of fostering an entrepreneurship ecosystem in a different country, every year." />
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
    <meta name=”robot” content=”index,nofollow”>
    <meta property=”og:title” content=”MITGSW in Grenoble, France - MIT Global Startup Workshop 2020”/>
    <meta property=”og:image” content=”https://i.ibb.co/p4Y8Mcj/meta-pic.png”/>
    <meta property=”og:site_name” content=”MITGSW in the Alps/>
    <meta property=”og:description” content=”MITGSW 2020 will be hosted in Grenoble, France - the 23 years in the making, MITGSW is MITs only global student-organized conference, with the goal of fostering an entrepreneurship ecosystem in a different country, every year."/>

    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/2020_style.css">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script src="assets/js/papaparse.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script> 

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" id="nav" style="padding-top: 2%">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/images/splash/mit_gsw_logo.png" id="navbar-logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mobile" id="bs-example-navbar-collapse-1" style="right: 0">
            <ul class="nav navbar-nav navbar-right" id="navbarDropdown" >
            <li><a href="about.php">ABOUT<span class="sr-only">(current)</span></a></li>
            <li><a href="reg.php">Registration</a></li>
            <li><a href="comp.php">Competitions</a></li>
            <li><a href="speakers.php">Speakers</a></li>
            <li><a href="content.php">Content</a></li>
            <li><a href="agenda.php">Agenda</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="https://gsw.mit.edu/2019/">2019 CONFERENCE SITE</a></li>
            <!-- <li><a href="https://en.grenoble-em.com/">Grenoble Ecole de Management</a></li> -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

