<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php require 'header.php'; ?>
    
    <body>
        <?php require 'nav.php'; ?>
        
        <div class="container-fluid home-bg-beige pb-4 px-0">
            
            <!-- Cover Image with TMAV Name -->
            <section class="row">
                <div class="home-main-container px-0">
                    <picture>
                       <source media="(min-width: 450px)" srcset="../images/drone_home.jpg" class="home-main-img px-0">
                       <img src="../images/drone_home_mobile.jpg" class="home-main-img px-0" alt="Cover image of a drone with Toronto Metropolitan Aerial Vehicles text">
                    </picture>
                    <div class="home-main-text p-0">
                        <h1 class="home-main-font pt-2 mb-0">Toronto</h1>
                        <h1 class="home-main-font mb-0">Metropolitan</h1>
                        <h1 class="home-main-font">Aerial Vehicles</h1>
                    </div>
                </div>
            </section>
            
            <section class="row py-4 px-2 ">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <div class="text-center p-md-4 p-3 location-large tmu-font">
                        <h2>Follow us throughout the school year as we design, build and compete with our Unmanned Aerial Vehicles.</h2>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
            </section>
            
            <!-- Overview Cards -->
            <div class="row pb-2">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 px-md-2 px-4">
                            <div class="card home-card">
                                <img src="../images/home/about-tmav.jpg" class="card-img-top" alt="About TMAV Image">
                                <div class="card-body">
                                    <h5 class="card-title tmu-blue">About TMAV</h5>
                                    <p class="card-text mb-0">Learn more about the team and our objectives in building dynamic UAVs for various tasks.</p>
                                    <a href="/about/tmav" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 px-md-2 px-4">
                            <div class="card home-card">
                                <img src="../images/home/contact.jpg" class="card-img-top" alt="Contact Us Image">
                                <div class="card-body">
                                    <h5 class="card-title tmu-blue">Contact Us</h5>
                                    <p class="card-text mb-0">Need to get in touch? Check out our social links and email, or leave a message.</p>
                                    <a href="/contact" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 px-md-2 px-4">
                            <div class="card home-card">
                                <img src="../images/home/about-drones.jpg" class="card-img-top" alt="About Our Drones Image">
                                <div class="card-body">
                                    <h5 class="card-title tmu-blue">About Our Drones</h5>
                                    <p class="card-text mb-0">Find out more about our various UAVs, their specifications, and associated tasks.</p>
                                    <a href="/about/drones" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 px-md-2 px-4">
                            <div class="card home-card">
                                <img src="../images/home/accolades.jpg" class="card-img-top" alt="Accolades Image">
                                <div class="card-body">
                                    <h5 class="card-title tmu-blue">Accolades</h5>
                                    <p class="card-text mb-0">Check out how we performed in past competitions and our various awards.</p>
                                    <a href="/accolades" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 px-md-2 px-4">
                            <div class="card home-card">
                                <img src="../images/home/sponsor.jpg" class="card-img-top" alt="Sponsorship Image">
                                <div class="card-body">
                                    <h5 class="card-title tmu-blue">Sponsorship</h5>
                                    <p class="card-text mb-0">Looking to sponsor us? Check out our sponsorship page and our current sponsors.</p>
                                    <a href="/sponsor" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <section class="row mb-4">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 class="text-center p-4">Gallery</h1>
                    <!-- Carousel -->
                    <div id="home-carousel" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="6"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="7"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="8"></button>
                            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="9"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/home/gallery/gal-1.jpg" alt="Drone in flight" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-2.jpg" alt="Building the drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-3.jpg" alt="Building the drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-4.jpg" alt="Building the drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-5.jpg" alt="Flight test ready" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-6.jpg" alt="Transporting the drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-7.jpg" alt="Transporting the drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-8.jpg" alt="Drone" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-9.jpg" alt="Ground operator station" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/gallery/gal-10.jpg" alt="Drone in flight" class="d-block w-100">
                            </div>
                        </div>
                          
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </section>
            
        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>