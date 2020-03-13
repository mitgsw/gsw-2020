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



<div class="modale opened" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-header">
      <div>Important update</div>
      <a href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
    </div>
    <div class="modal-body">
        <div>
            The MIT Global Startup Workshop (GSW) 2020 in-person event on March 23 & 24 in Grenoble, France <span class="urgent">has been <strong>cancelled</strong> due to the coronavirus pandemic.</span>
            <br><br>
            The collaboration between MIT GSW, Grenoble Ecole de Management and sponsors and stakeholders will continue. We are committed to continuing the GSW competitions and we anticipate sharing content related to MIT GSW 2020 as soon as we can.
            <br><br>
            <strong>We wholeheartedly thank everyone for their support with our event!</strong>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn-continue closemodale">Continue to site</a>
        </div>
    </div>
  </div>
</div>


<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.closemodale').click(function (e) {
         e.preventDefault();
         $('.modale').removeClass('opened');
    });
</script>










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
    <div class="section-header-page text-white">Important update</div>
    <br>

    <div class="text-center">
        <p >The MIT Global Startup Workshop (GSW) 2020 in-person event on March 23 & 24 in Grenoble, France <span class="urgent">has been <strong>cancelled</strong> due to the coronavirus pandemic.</p></span>
        <br>
        <p>The collaboration between MIT GSW, Grenoble Ecole de Management and sponsors and stakeholders will continue. We are committed to continuing the GSW competitions and we anticipate sharing content related to MIT GSW 2020 as soon as we can.</p>
        <br>
        <p><strong>We wholeheartedly thank everyone for their support with our event!</strong></p>
    </div>
    
</div>







<div class="section">
    <div class="section-header-page text-white">Our competitions</div>
    <br>

    <div class="comp-wrapper-main">
        <div class="comp-button item1">
            <a href="showcase.php">
                <div class="comp-title text-center">
                    <h2>Startup Showcase</h2>
                </div>
                <div class="comp-image text-center">
                        <img src="assets/images/icons/Icons-Startup.png">
                </div>
            </a>
        </div>
        <div class="comp-button item2">
            <a href="epc.php">
                <div class="comp-title text-center">
                    <h2>Elevator Pitch Competition</h2>
                </div>
                <div class="comp-image text-center">
                    <img src="assets/images/icons/Icons-Elevator-Pitch.png">
                </div>
            </a>
        </div>
        <div class="comp-button item3">
            <a href="sssc.php">
                <div class="comp-title text-center">
                    <h2>Sustainable Society Startup Challenge</h2>
                </div>
                <div class="comp-image text-center">
                    <img src="assets/images/icons/Icons-Sustainable.png">
                </div>
            </a>
        </div>
    </div>
</div>

<div class="section white-section">
    
    <div class="section-header-page text-black">Collaborators</div>
    <br><br>
    <div class="row">

        <div class="col-md-12 text-center partner-border vertical-align">
            <div class="col-sm-6 text-center">
                <h1 style='font-size: 3vw; color: black'>Co-organizer</h1>
            </div>
            <div class="col-sm-6">
                <a href="https://en.grenoble-em.com/">
                    <img src="assets/images/logo/gem.png" class="partner-logo partner-logo-mobile" style="height: 180px">
                </a>
            </div>
        </div>

        <div class="col-md-12 text-center partner-border vertical-align">
            <div class="col-sm-12 text-center">
                <img src="assets/images/logo/lrra.png" class="partner-logo partner-logo-mobile" style="height: 200px">
            </div>
        </div>

        <div class="col-md-12 text-center partner-border">
            <br>
            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/logo-uga.jpg" class="partner-logo partner-logo-mobile" style="height: 100px">
                    <img src="assets/images/logo/logo-STMicroelectronics.jpg" class="partner-logo partner-logo-mobile" style="height: 70px">
                    <img src="assets/images/logo/BPI.png" class="partner-logo partner-logo-mobile">
                    <img src="assets/images/logo/schneider-electric-logo.png" class="partner-logo partner-logo-mobile">
                </div>
            </div>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/Logo-tessi-CMJN.png" class="partner-logo partner-logo-mobile" style="height: 80px">
                    <img src="assets/images/logo/logo_giant-cea_tech.jpg" class="partner-logo-2 partner-logo-mobile">
                    <img src="assets/images/logo/cap-gem-invent.png" class="partner-logo-2 partner-logo-mobile" style="height: 80px">
                    <img src="assets/images/logo/minatec.png" class="partner-logo-2 partner-logo-mobile">
                </div>
            </div>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/Atos/Logo_RGB.png" class="partner-logo-3 partner-logo-mobile" style="height: 100px">
                    <img src="assets/images/logo/IC-LSI.jpg" class="partner-logo-3 partner-logo-mobile" style="height: 70px">
                    <img src="assets/images/logo/inr_logo_rouge.png" class="partner-logo-3 partner-logo-mobile">
                    <img src="assets/images/logo/Grenoble_INP_(logo).svg.png" class="partner-logo-3 partner-logo-mobile" style="height: 70px">
                </div>
            </div>

            <div class="row">
                <div style='display: block, margin: auto, text-align: center'>
                    <img src="assets/images/logo/banque.jpg" class="partner-logo-4 partner-logo-mobile">
                    <img src="assets/images/logo/logo-auvergne-rhone-alpes-entreprises-jaune-rvb.jpg" class="partner-logo-4 partner-logo-mobile">
                    <img src="assets/images/logo/CEALeti_Logo_bassedef.jpg" class="partner-logo-4 partner-logo-mobile">
                    <img src="assets/images/logo/agr.png" class="partner-logo-4 partner-logo-mobile">
                    <img src="assets/images/logo/logo-IRT-nanoelec-web.jpg" class="partner-logo-4 partner-logo-mobile">
                    <img src="assets/images/logo/WAOUP-logos_noir.png" class="partner-logo-4 partner-logo-mobile" style="height: 50px">
                </div>
            </div>

        </div>

        <div class="col-md-12 text-center partner-border vertical-align">
            <div class="col-sm-6 text-center">
                <h1 style='font-size: 2vw; color: black'> Media Sponsor</h1>
            </div>
            <div class="col-sm-6">
                <a href="https://en.grenoble-em.com/">
                    <img src="assets/images/logo/pepite.png" class="partner-logo-4 partner-logo-mobile">
                </a>
            </div>
        </div>
    
    </div>

    

</div>

<div class="section">
    <div class="section-header-page text-white">The venue</div>

    <div class="text-center">
        <p>Maison MINATEC<br>
        3 Parvis Louis Néel, 38000 Grenoble, France</p>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6">
            <iframe class="why-map" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=3%20Parvis%20Louis%20N%C3%A9el%2C%2038000%20Grenoble%2C%20France+(Maison%20MINATEC)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                <a href="https://www.maps.ie/coordinates.html">Find my coordinates</a>
            </iframe>
        </div>
        <div class="col-xs-6">
            <img class="why-img" src="assets/images/splash/venue.png" />
        </div>
    </div>
    
</div>

<div class="section">
    <div class="section-header-page text-white">Get notified</div>

    <div class="text-center splash-logo-container">
        <p>More information coming soon! Go <a href='about.php'>here</a> to learn more about MITGSW.</p>
    </div>

</div>



</body>
