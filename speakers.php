<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2020';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header2" data-parallax="scroll" style="background-image: url('assets/images/grenoble/gren_8.JPG');">
    <div class="header-overlay">
        <h1 class="parallax-text-small">
            <i>The 2020 MIT Global Startup Workshop</i>
        </h1>
        <h1 class="parallax-text-large">
            <i>Speakers</i>
        </h1>
    </div>
</div>

<body style="background-color: black">

<div class="section">
    <p class="competition-slogan" style="padding: 2%">
    MIT GSW is proud to host a diverse range of speakers from Cambridge, Europe and around 
    the world. We're excited to have these world-class individuals share their experiences 
    with us! Click on each speaker to learn more about their background and accomplishments.
    </p>
    <div class="col-lg-12 comp-content" id="plenary-section-expanded">
        <div class="section-header section-header-page" style="color: white">Plenary</div>
        <div class="row speaker-expanded-bio">
            <div class="col-md-3"></div>
            <div class="col-md-9"></div>
        </div>
    </div>
    
</div>


<div class=section> 
    <div class="col-lg-12 comp-content" id="keynote-section-expanded">
        <div class="section-header section-header-page" style="color: white">Keynote</div>
        <div class="row speaker-expanded-bio">
            <div class="col-md-3"></div>
            <div class="col-md-9"></div>
        </div>
    </div>
</div>

<div class=section> 
    <div class="col-lg-12 comp-content" id="speaker-section-expanded">
        <div class="section-header section-header-page" style="color: white">Speakers</div>
        <div class="row speaker-expanded-bio">
            <div class="col-md-3"></div>
            <div class="col-md-9"></div>
        </div>
    </div>
</div>

<div id="speaker-modals">

</div>

<div class="modal fade" id="modal-text" tabindex="-1" role="dialog" aria-labelledby="modal-text-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('video').pause();">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                

        
            </div>
        </div>
    </div>
</div>


</body>


<?php
    include('templates/footer.php');
?>