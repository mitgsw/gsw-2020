<?php
/**
 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
 *  file's mtime, i.e. /css/base.1221534296.css.
 *  
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}
?>

<head>

    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/2020_style.css?v=1.1">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script src="assets/js/jquery.min.js"></script>
</head>


<body style="background-color: black">
<div data-parallax="scroll" class="parallax-window main-page-header" style="display:inline-block; background-color: black">

    <div class="splash-pic-container ">
        <img src="assets/images/splash/balls_new-min.png"/>
    </div>

    <div class="brand">
        <div class='text-center'>
            <i><h1>THE MIT GLOBAL STARTUP WORKSHOP</h1></i>
            <br><br>
            <img src="assets/images/splash/in_the_alps.png"/>
            <h5 style="color: black"> March 23 & 24, 2020</h5>
            <i><h4 style="color: black"> Grenoble, France</h4></i>
        </div>

    </div>
    
</div>

<div class="section">
    <div class="text-center">
        <i><p style="font-size: 4vh"> LEARN MORE ABOUT OUR COMPETITIONS</p></i>
    </div>
    

    <div class="line">
    </div>
    <br>

    <div class="comp-wrapper-main">
        <div class="item1">
            <a href="showcase.php">
                <div class="comp-title text-center">
                    <h2>Startup Showcase</h2>
                </div>
            </a>
        </div>
        <div class="item2">
            <a href="epc.php">
                <div class="comp-title text-center">
                    <h2>Elevator Pitch Competition</h2>
                </div>
            </a>
        </div>
        <div class="item3">
            <a href="sssc.php">
                <div class="comp-title text-center">
                    <h2>Sustainable Society Startup Challenge</h2>
                </div>
            </a>
        </div>
        <div class="item4">
            <a href="showcase.php">
                <div class="comp-image text-center">
                        <!-- <img src="assets/images/comp/startup_showcase.png"> -->
                        <img src="assets/images/icons/Icons-Startup.png">
                </div>

            </a>
        </div>
        <div class="item5">
            <a href="epc.php">
                <div class="comp-image text-center">
                    <!-- <img src="assets/images/comp/elevator_pitch.png"> -->
                    <img src="assets/images/icons/Icons-Elevator-Pitch.png">
                </div>

            </a>
        </div>
        <div class="item6">
            <a href="sssc.php">
                <div class="comp-image text-center">
                    <!-- <img src="assets/images/comp/sustainable.png"> -->
                    <img src="assets/images/icons/Icons-Sustainable.png">
                </div>
            </a>

        </div>
    </div>
</div>

<div class="section white-section">
    
    <div class="text-center">
        <i> <p style="font-size: 4vh"> COLLABORATORS</p> </i>
    </div>

    <div class="black-line"></div>
    <br><br>
    <div class="row">

        <div class="col-md-12 text-center partner-border vertical-align">
            <div class="col-sm-6 text-center">
                <h1 style='font-size: 3vw; color: black'> Co-organizer</h1>
            </div>
            <div class="col-sm-6">
                <a href="https://en.grenoble-em.com/">
                    <img src="assets/images/logo/gem.png" class="partner-logo partner-logo-mobile" style="height: 180px">
                </a>
            </div>
        </div>

        <div class="col-md-12 text-center partner-border vertical-align">
            <div class="col-sm-6 text-center">
                <h1 style='font-size: 3vw; color: black'> Major Sponsor</h1>
            </div>
            <div class="col-sm-6">
                <img src="assets/images/logo/lrra.png" class="partner-logo partner-logo-mobile" style="height: 150px">
            </div>
        </div>

        <div class="col-md-12 text-center partner-border">
            <div class="row text-center">
                <h1 style='font-size: 2.5vw; color: black'> Sponsor Level 2</h1>
            </div>
            <br>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/logo-uga.jpg" class="partner-logo partner-logo-mobile">
                    <img src="assets/images/logo/logo-STMicroelectronics.jpg" class="partner-logo partner-logo-mobile">
                    <img src="assets/images/logo/BPI.png" class="partner-logo partner-logo-mobile">
                </div>
            </div>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/schneider-electric-logo.png" class="partner-logo partner-logo-mobile">
                    <img src="assets/images/logo/Tessi-SA-logo.jpg" class="partner-logo partner-logo-mobile" style="height: 110px">
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center partner-border">
            <div class="row text-center">
                <h1 style='font-size: 2.3vw; color: black'> Sponsor Level 3</h1>
            </div>
            <br>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/logo_giant-cea_tech.jpg" class="partner-logo-2 partner-logo-mobile">
                    <img src="assets/images/logo/cap-gem-invent.png" class="partner-logo-2 partner-logo-mobile">
                    <img src="assets/images/logo/minatec.png" class="partner-logo-2 partner-logo-mobile">
                    <img src="assets/images/logo/Atos/Logo_RGB.png" class="partner-logo-2 partner-logo-mobile">
                </div>
            </div>

        </div>

        <div class="col-md-12 text-center partner-border">
            <div class="row text-center">
                <h1 style='font-size: 2vw; color: black'> Sponsor Level 3</h1>
            </div>
            <br>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/IC-LSI.jpg" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/banque.jpg" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/Grenoble_INP_(logo).svg.png" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/logo-auvergne-rhone-alpes-entreprises-jaune-rvb.jpg" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/inr_logo_rouge.png" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/CEALeti_Logo_bassedef.jpg" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/agr.png" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/logo-IRT-nanoelec-web.jpg" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/WAOUP-logos_noir.png" class="partner-logo-3 partner-logo-mobile">

                </div>
            </div>

        </div>
    
    </div>

    

</div>

<div class="section">
    <div class="text-center">
        <i> <p style="font-size: 4vh"> GET NOTIFIED</p> </i>
    </div>

    <div class="line">

    </div>

    <div class="text-center splash-logo-container">
        <p>Information about registration coming soon!</p>
        <p>
        More information coming soon. Please click <a href='about.php'> here </a> to learn more about the MIT GSW.
        </p>
    </div>

</div>



</body>
