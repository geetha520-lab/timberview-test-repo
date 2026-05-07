<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Golf Club and Sports HTML Template" />
    <meta name="description" content="Golf - Golf Club and Sports HTML Template" />

    <!-- title  -->
    <title>Membership - timberview Golf Club</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/minilogo.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="quform/css/base.css">

    <!-- theme core css -->
    <link href="css/styles.css" rel="stylesheet">

    <style>
        .butn.primary {
            background-color: green !important; /* Set the background to green */
            border-color: green !important; /* Ensure the border matches */
        }

        .butn.primary:hover {
            background-color: darkgreen !important; /* Darker shade on hover */
            border-color: darkgreen !important;
        }

        .butn {
            background-color: darkgreen !important; /* Solid green background */
            color: white !important; /* White text */
            padding: 10px 20px; /* Adjust padding */
            text-decoration: none; /* Remove underline */
            display: inline-block;
        }

        /* Keep it green even on hover */
        .butn:hover {
            background-color: darkgreen !important;
            color: white !important;
        }

        footer {
            background-color: #222;
            color: white;
            padding: 50px 0;
        }

        h5 {
            color: #28a745; /* Green color for section titles */
            text-transform: uppercase;
            font-weight: bold;
        }

        ul.list-unstyled li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        ul.list-unstyled li a:hover {
            color: #28a745; /* Green on hover */
        }

        .text-white i {
            font-size: 18px;
            transition: color 0.3s;
        }

        .text-white i:hover {
            color: #28a745;
        }

        .input-group .form-control {
            border-radius: 0;
        }

        .input-group .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .input-group .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
       /* Tee times and E-CLUB on hover */

        .center-text-section {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns */
            grid-template-rows: repeat(2, 1fr); /* Two rows */
            gap: 10px; /* Removes unnecessary space */
            width: 100vw; /* Full viewport width */
            height: 80vh; /* Full viewport height */
            padding:100px;
            
        }
        .center-text-section,
        .golf-facilities {
            margin: 10px;
            padding: 0;
        }

        .center-item {
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover; /* Ensures image covers the full grid cell */
            background-position: center;
            background-repeat: no-repeat;
            width: 100%; /* Ensures full width */
            height: 100%; /* Ensures full height */
            color: red;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .center-item h1 {
            position: absolute;
            color: white;
        
        }

        /* Membership */
        .membership-section {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #fff;
  padding: 40px 20px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  max-width: 1200px;
  margin: 40px auto;
  gap: 40px;
  flex-wrap: wrap;
}

.membership-content {
  flex: 1;
  min-width: 280px;
}

.membership-content h2 {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.membership-list {
  list-style: disc;
  padding-left: 20px;
  font-size: 1.1rem;
  color: #444;
}

.membership-list li {
  margin-bottom: 10px;
}

.membership-image {
  flex: 1;
  min-width: 280px;
  text-align: center;
}

.membership-image img {
  max-width: 100%;
  border-radius: 10px;
  object-fit: cover;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

@media (max-width: 768px) {
  .membership-section {
    flex-direction: column;
    text-align: center;
  }

  .membership-content,
  .membership-image {
    width: 100%;
  }

  .membership-content h2 {
    font-size: 1.75rem;
  }
}

        



      
/* footer */

        .bg-success {
            background-color: #15395A !important;
        }

        .testimonial-container, .testimonial-container .swiper {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        footer {
            margin-top: 0;
            padding-top: 20px;
        }

        
    </style>

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
       <?php include('header.php'); ?>

        
     <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background" data-overlay-dark="4" data-background="img/banner/page-title.jpg">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Membership</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="membership.php">Membership</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

          <!-- Membership table 
        ================================================== -->
      

        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="mb-4">
                            <h1>Membership</h1>
                        </div>
                        <div class="mb-4">
                            <img src="img/portfolio/portfolio-single-01.jpg" class="rounded" alt="...">
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div>
                            <!-- <h3 class="h4">Pro Shop</h3> -->
                            <p class="w-95 mb-1-9">Whether you have been golfing your entire life, or have just begun to appreciate the game, the Timberview Golf Course offers a membership option that suits you. Our challenging course and friendly staff ensures our members will enjoy bringing guests out for a drink, as well as perfecting their game.</p>
                            <p class="w-95 mb-1-9">We encourage you to request a tour of our facility, and welcome any questions you may have. For additional information about pricing and our application process, please fill out this form or call us at 800-TEE-IT-UP. We look forward to hearing from you.</p>
                    
                        </div>
                        <div class="membership-section">
                            <div class="membership-content">
                                <h2>Membership Options</h2>
                                <ul class="membership-list">
                                <li>Regular Membership</li>
                                <li>Senior Membership</li>
                                <li>Junior Membership</li>
                                <li>Single Membership</li>
                                <li>Weekday (ONLY) Membership</li>
                                </ul>
                            </div>
                            <div class="membership-image">
                                <img src="img/portfolio/portfolio-single-03.jpg" alt="Membership Options" />
                            </div>
                            </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- MEMBERSHIP FORM
        ================================================== -->
        <section class="membership pt-0">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="membership-img bg-img h-100 rounded-start" data-background="img/content/membership-1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="membership-form bg-light h-100 p-4 p-sm-5 rounded-end">
                            <div>
                                <span class="section-title text-primary">Membership</span>
                                <h2 class="h1 mb-4 text-secondary">Join Our Golf Club</h2>
                            </div>
                            <form class="quform" action="https://golf.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Your Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                       

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn" type="submit"><span>Send Message</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-left"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



       
        
       
            
        
        <!-- FOOTER  start ================================================== -->

        <?php include('footer.php'); ?>

        <!-- FOOTER  end ================================================== -->


    </div>

    <!-- BUY TEMPLATE
    ================================================== -->
    <script>
    document.getElementById("year").textContent = new Date().getFullYear();
    </script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>

  
    <!-- start scroll to top -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="js/core.min.js"></script>

    <!-- Search -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- form plugins js -->
    <script src="quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="quform/js/scripts.js"></script>

    <!-- all js include end -->
    
</body>
</html>