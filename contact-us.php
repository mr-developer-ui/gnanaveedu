<?php include'admin/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include'header-link.php';?>
</head>
<body>
<!-- navigation -->
<?php include'navigation.php';?>
<!-- navigation -->

<!-- breadcrumb -->
<div class="pd50 bg-cover" data-dark-overlay="6" style="background:url(images/breadcrumb/1.png) no-repeat">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 my-2 text-white">
                  <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="contact-us.php">Contact Us</a></li>
                  </ol>
                  <h2 class="h1">
                     Contact Us
                  </h2>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->

<!-- contact us -->
<section class="contact-page-section">
        <div class="container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="contact-column col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-column wow fadeInLeft animated">
                            <h2>Contact Us</h2>
                            <ul class="contact-info">
                                <li>
                                    <span class="icon fa fa-map-marker"></span> 
                                    <p>Valasaravakkam,<br>Chennai-600087.</p>
                                </li>

                                <li>
                                    <span class="icon fa fa-phone"></span> 
                                    <p><a href="tel:+911234567890">+91 12345 67890</a></p>
                                </li>

                                <li>
                                    <span class="icon fa fa-envelope"></span> 
                                    <p><a href="mailto:info@company.in">info@company.in</a></p>
                                </li>
                            </ul>

                            <ul class="social-icon-four">
                                <li class="title">Follow Us :</li>
                                <li><a href="#!" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#!" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#!" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#!" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-8 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <div class="title">
                                    <h2>Get in Touch</h2>
                                    <div class="text">Feel free to drop us a line below!</div>
                                </div>
                                <form method="post" action="contact-form.php">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- contact us -->

<!-- map -->
<section class="map">
<div class="container-fluid">
<div class="row">
    <!-- ifarme -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31095.421893682345!2d80.15478167159411!3d13.040271661884391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526130ee5d7a2b%3A0x2e22e53ce9c67720!2sValasaravakkam%2C%20Chennai%2C%20Tamil%20Nadu%20600087!5e0!3m2!1sen!2sin!4v1592124850493!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- ifarme -->
</div>
</div>
</section>

<!-- map -->
<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>