<?php 
    $page_title = "Sponsorship" 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php require 'header.php'; ?>
    
    <body>
        <?php require 'nav.php'; ?>
        
        <div class="container-fluid bg-light pb-4 px-0">
            
            <!-- Cover Image with Ryerson competition certificate -->
            <section class="row">
                <div class="home-main-container px-0">
                    <picture>
                        <source 
                            media="(min-width: 450px)"
                            srcset="/images/sponsors/sponsor-main.jpg" class="spon-main-img px-0">
                        <img src="/images/sponsors/sponsor-main-mobile.jpg" class="spon-main-img px-0" alt="Close up image of drone for sponsors">
                    </picture>
                    <div class="spon-main-text p-0">
                        <h1 class="home-main-font pt-2 mb-0">Sponsorship</h1>
                    </div>
                </div>
            </section>
            
            <section class="row pt-4 px-2">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <div class="text-center p-md-3 p-3 location-large tmu-i-font">
                        <h3>We would not be able to succeed without the continued support of our sponsors, and would like to thank them again for their support!</h3>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
            </section>
            
            <section class="row section-content pb-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h1>Our Sponsors</h1>
                    <div class="row align-items-center pt-3">
                        <div class="col-md-3 text-center px-4">
                            <img src="/images/sponsors/TMU.png" alt="TMU">
                        </div>
                        <div class="col-md-3 text-center px-4">
                            <img src="/images/sponsors/mues.png" alt="MUES">
                        </div>
                        <div class="col-md-3 text-center px-4">
                            <img src="/images/sponsors/solidworks.png" alt="Solidworks">
                        </div>
                        <div class="col-md-3 text-center px-4">
                            <img src="/images/sponsors/rotorgeeks.png" alt="Rotorgeeks">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </section>
            
            <section class="row p-4 section-content">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 class="text-center pb-2">Looking to sponsor us?</h1>
                    <h5 class="text-center">Fill out the form below and we will get back to you as soon as we can. <br> Thank you for your support!</h5>
                    <form>
                        <div class="form-group py-2">
                            <label for="name">Name<sup>*</sup> </label> 
                            <input type="text" class="form-control" id="name" aria-describedby="required-description" required>
                        </div>
                        
                        <div class="form-group py-1">
                            <label for="company">Company<sup>*</sup> </label>
                            <input type="text" class="form-control" id="company" aria-describedby="required-description" required>
                        </div>
                        
                        <div class="form-group py-2">
                            <label for="email" class="starlabel">Email Address<sup>*</sup> </label>
                            <input type="email" class="form-control" id="email" aria-describedby="required-description" required>
                        </div>
                        
                        <div class="form-group pt-1 pb-3">
                            <label for="message">Message<sup>*</sup> </label>
                            <textarea class="form-control" id="message" rows="3" aria-describedby="required-description" required></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn submit-btn-blue py-2">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </section>
            
        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>