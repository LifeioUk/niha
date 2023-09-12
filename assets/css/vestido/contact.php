<?php include 'config.php';
$admin = new Admin();
?><!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Vestido</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/css/flaticon_shofy.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    

      <!-- header area start -->
     <?php include 'header.php'; ?>
      <!-- header area end -->

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.php">Home</a></span>
                           <span>Contact</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->


         <!-- contact area start -->
         <section class="tp-contact-area pb-100">
            <div class="container">
               <div class="tp-contact-inner">
                  <div class="row">
                     <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                           <h3 class="tp-contact-title">Send A Message</h3>

                           <div class="tp-contact-form">
                              <form  action="controller/queries.php" method="POST">
                                 <div class="tp-contact-input-wrapper">
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="name"  required id="name" type="text" placeholder="Enter Your Name">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="name">Your Name</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="email" required id="email" type="email" placeholder="Enter Your Email">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="email">Your Email</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="subject"  required id="subject" type="text" placeholder="Write your subject">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="subject">Subject</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                         <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="message">Your Message</label>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <div class="tp-contact-btn">
                                    <button type="submit" name="queries">Send Message</button>
                                 </div>
                              </form>
                              <p class="ajax-response"></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4">
                        <div class="tp-contact-info-wrapper">
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-1.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p data-info="mail"><a href="mailto:contact@shofy.com">Info@vestidofze.com</a></p>
                                 <br>
                                 <p data-info="phone">
                                 <a href="tel:+971 56 315 3483">+971 56 315 3483</a><br><a href="tel:+971527061545">+971 52 706 1545</a><br
                                 ><a href="tel:+971557156332">+971 55 715 6332</a><br>
                                </p>
                               
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-2.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p>
                                    <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976637,-74.1197638,11z/data=!3m1!4b1!4m6!3m5!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728!16zL20vMDJfMjg2" target="_blank">
                                    China Mall Sheikh Ammar Bin Humaid St - Al Jerf Industrial 1 - Ajman - United Arab Emirates 
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <!-- <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-3.png" alt="">
                                 </span>
                              </div> -->
                              <div class="tp-contact-info-content">
                                 <div class="tp-contact-social-wrapper mt-5">
                                    <!-- <h4 class="tp-contact-social-title">Find on social media</h4> -->

                                    <!-- <div class="tp-contact-social-icon">
                                       <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

         <!-- map area start -->
         <section class="tp-map-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-map-wrapper">
                        <div class="tp-map-hotspot">
                           <span class="tp-hotspot tp-pulse-border">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="6" cy="6" r="6" fill="#821F40"/>
                              </svg>
                           </span>
                        </div>
                        <div class="tp-map-iframe">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.2480848151613!2d55.5187527!3d25.429968199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f82129d5bf55%3A0xd0dd9b7b61e4d224!2sChina%20Mall%20-%20Sheikh%20Ammar%20Bin%20Humaid%20St%20-%20opp.%20Ajman%20-%20Al%20Jerf%20Industrial%201%20-%20Ajman%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1693222922187!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- map area end -->

      </main>
      

      <!-- footer area start -->

      <?php include 'footer.php'; ?>

      <!-- footer area end -->



      <!-- JS here -->
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/purecounter.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
