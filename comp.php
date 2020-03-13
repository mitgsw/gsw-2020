<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2020';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header2" data-parallax="scroll">
    <div class="header-blank" style="background-image: url('assets/images/light/gren 3.jpg');">        
        <h1 class="parallax-text-large">
            <i>Competitions</i>
        </h1>

        <h1 class="parallax-text-small">
            <i>The 2020 MIT Global Startup Workshop</i>
        </h1>
    </div>
</div>

<body style="background-color: black">

<div class="section">
    <div class="header">our competitions</div>
    <div class="alert alert-warning" role="alert">
        We are <strong>no longer accepting</strong> applications for GSW competitions.
    </div>
    <br><br><br>

    <div class="comp-wrapper-main">
        <div class="comp-button item1">
            <a href="showcase.php">
                <div class="comp-title text-center">
                    <h2>Startup Showcase</h2>
                </div>
                <div class="comp-image text-center">
                        <img src="assets/images/icons/Icons-Startup.png">
                </div>
                <p>
                    Connect with key players in the
                    startup ecosystem and see what our
                    Startup Showcase finalists are up to
                    in this special event. The showcase is
                    an incredible networking opportunity
                    and it’s open to all GSW attendees.
                </p>
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
                <p>
                    Do you have an amazing idea? Apply
                    to the Elevator Pitch Competition
                    (EPC) for the opportunity to win
                    monetary prizes and receive
                    mentorship from entrepreneurship
                    leaders from MIT and France!
                </p>
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
                <p>
                    Do you dream of ways to improve life
                    for your community and country?
                    Would you like to promote longer and
                    stronger engagement between MIT
                    and France while creating social
                    impact and sustainability?
                </p>                
            </a>
        </div>
    </div>
</div>





</body>


<?php
    include('templates/footer.php');
?>