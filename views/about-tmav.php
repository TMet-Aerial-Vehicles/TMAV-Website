<?php 
    $page_title = "About Us" 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php require 'header.php'; ?>
    
    <body>
        <?php require 'nav.php'; ?>

        <div class="container-fluid bg-light px-0">
            <div class="row">
                <div class="col-md-12 d-block d-md-none">
                    <img src="../images/about/tmav/drone_over_ry_mobile.jpg" class="about-us-main-img px-0"
                         alt="Drone flying over Ryerson building">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-6 pt-md-4 px-4">
                    <div class="p-md-2 mb-md-2 pt-4 pb-0 p-3 about-text">
                        <h2 class="text-center tmu-i-font pt-md-4">
                            About
                            <img src="../images/TMAV_Logo.png" alt="TMAV Logo">
                        </h2>
                        <hr class="half-hr">
                        <p class="pt-3">
                            TMAV is a student design team engineering and manufacturing unmanned aerial vehicles
                            for a multitude of applications including medical supply delivery, solar farm security
                            surveillance, wildlife census data collection and more.
                        </p>
                        <p class="mb-0">
                            Our team is a small group of dedicated individuals brought together by the fascination
                            and ambition to bring new and innovative autonomous drones to life in an ever-changing
                            socioeconomic, political and technological landscape.
                        </p>
                    </div>

                    <div class="p-md-2 pb-4 mb-md-4 p-3 about-text">
                        <h2 class="text-center tmu-i-font">Objective</h2>
                        <hr class="half-hr">
                        <p class="pt-3 mb-3">
                            TMAV seeks to allow students to develop relevant & unique skills and experiences
                            through a collaborative team effort. We’re integrating electrical systems, programming,
                            air-frame manufacturing, 3D CAD modelling, aerodynamics analysis & optimization,
                            propulsion system development and much more.
                        </p>
                        <p>
                            For that, we compete at the national
                            <a href="https://www.aerialevolution.ca" class="uasc-link" target="_blank">
                                Unmanned Systems Canada UAS Student Competition</a>.
                            The competition provides students the opportunity to explore how drones can be applied
                            in real-life scenarios (wildlife census data collection, field analytics, law enforcement,
                            etc.).
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <picture>
                        <source
                                media="(min-width: 450px)"
                                srcset="../images/about/tmav/drone_over_ry.jpg" class="about-us-main-img px-0">
                        <img src="../images/about/tmav/drone_over_ry_mobile.jpg" class="about-us-main-img px-0" alt="Drone flying over Ryerson building">
                    </picture>
                </div>
            </div>
        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>