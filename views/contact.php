<?php 
    $page_title = "Contact Us"
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
                          srcset="../images/contact/contact-main.jpg" class="acco-main-img px-0">
                       <img src="../images/contact/contact-main-mobile.jpg" class="acco-main-img px-0" alt="TMAV Contact Us Header Image">
                    </picture>
                    <div class="acco-main-text p-0">
                        <h1 class="home-main-font pt-2 mb-0">Contact Us</h1>
                    </div>
                </div>
            </section>
            
            <section class="row pt-4 pb-4 px-2">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <div class="text-center p-md-2 p-3 location-large tmu-i-font">
                        <h2>Contact us through the form below, and we will get back to you as soon as possible</h2>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
            </section>
            
            <div class="section-content">
                <section class="row px-4 pb-4">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <h3 class="text-center">Get in touch with us</h3>
                        <form name="contact" method="POST" data-netlify=true data-netlify-recaptcha="true">
                            <div class="form-group py-2">
                                <label for="name">Name<sup>*</sup> </label> 
                                <input type="text" class="form-control" id="name" aria-describedby="required-description" required>
                            </div>
                            
                            <div class="form-group py-1">
                                <label for="email" class="starlabel">Email Address<sup>*</sup> </label>
                                <input type="email" class="form-control" id="email" aria-describedby="required-description" required>
                            </div>
                            
                            <div class="form-group py-2">
                                <label for="subject">Subject<sup>*</sup> </label>
                                <input type="text" class="form-control" id="subject" aria-describedby="required-description" required>
                            </div>
                            
                            <div class="form-group py-2">
                                <label for="message">Message<sup>*</sup> </label>
                                <textarea class="form-control" id="message" rows="3" aria-describedby="required-description" required></textarea>
                            </div>
                            
                            <div class="form-group pt-1 pb-3">
                                <div data-netlify-recaptcha="true"></div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn submit-btn-blue py-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 text-center">
                        
                        <div class="row pt-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row py-4">
                                    <div class="col-lg-1 col-md-2 col-1">
                                        <h2><i class="fas fa-map-marker-alt"></i></h2>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-11 text-center">
                                        <h4>Toronto Metropolitan University</h4>
                                        <h4>350 Victoria St</h4>
                                        <h5>Toronto, Canada &nbsp; M5B 2K3 </h5>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-1">
                                        <h2><i class="fas fa-envelope"></i></h2>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-11 text-start">
                                        <h4> &nbsp; <a href="mailto:ruav@torontomu.ca?subject=contact" id="email-text-black">ruav@torontomu.ca</a></h4>
                                    </div>
                                </div>
                                
                                <hr>
                                
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="socials">
                                          <a href="" class="icon icon-grey" target="_blank">
                                            <span><i class="fab fa-facebook-f"></i></span>
                                          </a>
                                          <a href="https://instagram.com/tmetaerialvehicles" class="icon icon-grey" target="_blank">
                                            <span><i class="fab fa-instagram"></i></span>
                                          </a>
                                          <a href="#" class="icon icon-grey" target="_blank">
                                            <span><i class="fab fa-youtube"></i></span>
                                          </a>
                                          <a href="" class="icon icon-grey" target="_blank">
                                            <span><i class="fab fa-linkedin"></i></span>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-1"></div>
                </section>
            </div>
            
        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>