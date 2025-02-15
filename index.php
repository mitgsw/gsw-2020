<?php

    // // Require https
    // if ($_SERVER['HTTPS'] != "on") {
    //     $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    //     header("Location: $url");
    //     exit;
    // }

    $pageTitle = 'MIT Global Startup Workshop 2020';
    $metaDescription = 'MIT Global Startup Workshop is an annual conference that aims to accelerate entrepreneurial ecosystems around the world, through workshops, mentorship and skills training.'; 
    $specificKeywords = 'entrepreneurial experience';
    $headerMainPageImageSrc = 'assets/images/splash/logo.png';
    $headerTitle = 'MIT Global Startup Workshop';
    $headerSubTitle = 'GSW 2020';
    $classIndexMenu = 'active';

    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    
    include('templates/nav-bar.php');
    include('templates/header.php');
    include('templates/footer.php');
?>
<!-- <br /><br />
