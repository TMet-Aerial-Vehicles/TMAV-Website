<?php 
    $page_title = "Our Drones" 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php require 'header.php'; ?>
    
    <body>
        <?php require 'nav.php'; ?>

        <div class="container-fluid drone-bg pb-4 px-0">

            <!-- Cover Image of Drone -->
            <section class="row">
                <div class="home-main-container px-0">
                    <picture>
                        <source
                                media="(min-width: 450px)"
                                srcset="../images/about/drones/drones-main.jpg" class="acco-main-img px-0">
                        <img src="../images/about/drones/drones-main-mobile.jpg" class="acco-main-img px-0" alt="Close up image of Hermes drone">
                    </picture>
                    <div class="acco-main-text p-0">
                        <h1 class="home-main-font pt-2 mb-0">Our Drones</h1>
                    </div>
                </div>
            </section>

            <section class="row pt-4 px-2">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <div class="text-center p-md-3 p-3 location-large tmu-i-font">
                        <h3 class="mb-0">Learn about our drones and their various uses</h3>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
            </section>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <hr class="drone-hr">
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row section-content mt-4 mb-2">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 px-0 text-center hermes-border hermes-bg rounded-border-left-lg-top-sm">
                                <div id="drone-1-carousel" class="carousel slide h-100" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="0" class="active"></button>
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="3"></button>
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="4"></button>
                                        <button type="button" data-bs-target="#drone-1-carousel" data-bs-slide-to="5"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="../images/about/drones/hermes/hermes-1.jpg" alt="Hermes 1" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/hermes/hermes-2.jpg" alt="Hermes 2" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/hermes/hermes-3.jpg" alt="Hermes 3" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/hermes/hermes-4.jpg" alt="Hermes 4" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/hermes/hermes-5.jpg" alt="Hermes 5" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/hermes/hermes-6.jpg" alt="Hermes 6" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#drone-1-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#drone-1-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-8 bg-light hermes-border rounded-border-right-lg-bottom-sm">
                                <div class="card-body pt-4">
                                    <h2 class="card-title text-center hermes-text">Hermes</h2>
                                    <h5 class="my-3">
                                        Hermes is a customizable quadcopter with a carbon fiber frame used in delivery and disposal tasks.
                                        <br><br>
                                        For the 2021 competition, it was equipped with mecanum wheels for driving,
                                        as well as a robotic arm for loading medical supply boxes into its storage compartment.
                                        <br><br>
                                        In 2022, Hermes was used as an intruder surveillance and device disposal UAV.
                                        It contains an OpenCV AI Kit camera for intruder detection and tracking,
                                        along with a retractable grapple for foreign device detection and disposal.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>

            <br>

            <div class="row section-content my-3">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-8 bg-light babyshark-border rounded-border-left-lg-top-sm">
                                <div class="card-body pt-4">
                                    <h2 class="card-title text-center babyshark-text">Babyshark</h2>
                                    <h5 class="my-3">
                                        Babyshark is a long range transport VTOL used in distance tasks.
                                        <br><br>
                                        It has 4 rotors for vertical flight (drone configuration), and single pusher
                                        propeller with control surfaces for level forward flight.
                                        It has the ability to fly for 40km.
                                        Babyshark has wheels to drive to locations, as well as a gripper to pick up objects.
                                        <br><br>
                                        Babyshark placed first for distance based UAV in the 2021 competition. It was used for
                                        picking up and transporting medical supply packages at a specified clinic.
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-4 px-0 text-center babyshark-border babyshark-bg rounded-border-right-lg-bottom-sm">
                                <div id="drone-2-carousel" class="carousel slide h-100" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#drone-2-carousel" data-bs-slide-to="0" class="active"></button>
                                        <button type="button" data-bs-target="#drone-2-carousel" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#drone-2-carousel" data-bs-slide-to="2"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="../images/about/drones/babyshark/babyshark-1.jpg" alt="Babyshark 1" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/babyshark/babyshark-2.jpg" alt="Babyshark 2" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/babyshark/babyshark-3.jpg" alt="Babyshark 3" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#drone-2-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#drone-2-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>

            <br>

            <div class="row section-content mt-2 mb-4">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 px-0 text-center rounded-border-left-lg-top-sm bbb-border bbb-bg">
                                <div id="drone-3-carousel" class="carousel slide h-100" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#drone-3-carousel" data-bs-slide-to="0" class="active"></button>
                                        <button type="button" data-bs-target="#drone-3-carousel" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#drone-3-carousel" data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#drone-3-carousel" data-bs-slide-to="3"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="../images/about/drones/bbb/bbb-1.jpg" alt="BBB 1" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/bbb/bbb-2.jpg" alt="BBB 2" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/bbb/bbb-3.jpg" alt="BBB 3" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/bbb/bbb-4.jpg" alt="BBB 4" class="d-block h-100 w-100 drone-preview-carousel rounded-border-left-lg-top-sm">
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#drone-3-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#drone-3-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-8 bg-light bbb-border rounded-border-right-lg-bottom-sm">
                                <div class="card-body pt-4">
                                    <h2 class="card-title text-center bbb-text">Triple B</h2>
                                    <h5 class="my-3">
                                        Triple B is an imagery and payload delivery hexacopter, used in inspection and delivery tasks.
                                        <br><br>
                                        It contains a Sony A5000 video camera and a Flir Vue Pro IR camera, a custom delivery mechanism,
                                        and a state of the art autopilot system with capable GPS resolution up to 2cm.
                                        <br><br>
                                        Triple B can be used for Beyond Visual Line of Sight (BVLOS) solar farm surveys by
                                        providing visual representations of solar panels and their geolocations.
                                        It can perform detailed inspections to identify damaged solar panels.
                                        It can also identify significant changes to map features from provided pre-windstorm map.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>

            <br>

            <div class="row section-content my-3">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-8 bg-light harpy-border rounded-border-left-lg-top-sm">
                                <div class="card-body pt-4">
                                    <h2 class="card-title text-center harpy-text">Harpy</h2>
                                    <h5 class="my-3">
                                        Harpy is a Long Range Payload Delivery UAV, used in distance based tasks.
                                        <br><br>
                                        Its outfitted with a 360&#xb0; video camera, a custom delivery mechanism,
                                        an autopilot system with GPS, and a NVIDIA Jetson TX2 with stereo camera system.
                                        <br><br>
                                        It was used in the 2019 UAS competition for the distance based delivery task where
                                        it must reach the VLOS Package Depot, pick up a specified package, travel multiple
                                        kilometres, and drop the package at the specified destination.
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-4 px-0 drones-bg-beige text-center harpy-border harpy-bg rounded-border-right-lg-bottom-sm">
                                <div id="drone-4-carousel" class="carousel slide h-100" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#drone-4-carousel" data-bs-slide-to="0" class="active"></button>
                                        <button type="button" data-bs-target="#drone-4-carousel" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#drone-4-carousel" data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#drone-4-carousel" data-bs-slide-to="3"></button>
                                        <button type="button" data-bs-target="#drone-4-carousel" data-bs-slide-to="4"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="../images/about/drones/harpy/harpy-1.jpg" alt="Harpy 1" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/harpy/harpy-2.jpg" alt="Harpy 2" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/harpy/harpy-3.png" alt="Harpy 3" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="../images/about/drones/harpy/harpy-4.jpg" alt="Harpy 4" class="d-block h-100 w-100 drone-preview-carousel rounded-border-right-lg-bottom-sm">
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#drone-4-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#drone-4-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>

        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>