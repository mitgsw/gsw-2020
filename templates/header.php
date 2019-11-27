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
    <link rel="stylesheet" href="assets/css/style.css?v=1.1">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script src="assets/js/jquery.min.js"></script>
</head>


<body style="background-color: black">
<div data-parallax="scroll" class="parallax-window main-page-header" style="display:inline-block; background-color: black">

    <div class="splash-pic-container ">
        <img src="assets/images/splash/background_img.png"/>
    </div>

    <div class="brand">
        <div class='text-center'>
            <i><h1>THE MIT GLOBAL STARTUP WORKSHOP</h1></i>
            <br><br>
            <img src="assets/images/splash/in_the_alps.png"/>
            <h5> March 24 & 24, 2020</h5>
            <i><h4> Grenoble, France</h4></i>
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
        <img src="assets/images/splash/gem.png"/>
    </div>

</div>

</body>
