<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
<!-- Basic Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- SEO Meta Tags -->
<title>Timberview Golf Course | Scenic 18-Hole Course in Marysville</title>
<meta name="description" content="Enjoy a beautiful round of golf at Timberview Golf Course in Marysville, Ohio. Affordable rates, lush fairways, and great experiences await all golfers.">
<meta name="keywords" content="Timberview Golf Club, Marysville golf, Ohio golf course, golf dining, clubhouse menu, golf events, driving directions, public golf course">
<meta name="author" content="Timberview Golf Club">

<!-- Open Graph (for social sharing) -->
<meta property="og:title" content="Timberview Golf Club | Golf, Dining & Events in Marysville, Ohio">
<meta property="og:description" content="Visit Timberview Golf Club and enjoy a beautiful course, delicious clubhouse meals, and event hosting in Marysville, Ohio.">
<meta property="og:image" content="https://yourdomain.com/images/timberview-preview.jpg"> <!-- Replace with your actual image URL -->
<meta property="og:url" content="https://yourdomain.com/">
<meta property="og:type" content="website">


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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

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
    grid-template-columns: repeat(2, 1fr); 
    grid-template-rows: repeat(2, 1fr); 
    gap: 10px;
    width: 98vw;
    height: 80vh;
    padding: 20px;
}

.center-item {
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
    color: red;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    position: relative;
}

.center-item h1 {
    position: absolute;
    color: white;
    font-size: 3vw;
}


@media (max-width: 768px) {
    .center-text-section {
        grid-template-columns: repeat(2, 1fr); 
        grid-template-rows: auto;
        height: auto;
    }

    .center-item {
        height: 180px; 
    }

    .center-item h1 {
        font-size: 5vw; 
    }
}

       /* Enjoying our golf facilitie */
        .golf-facilities {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background-color: #f9f9f9;
        }

        .facility-content {
            display: flex;
            max-width: 1200px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .facility-image {
            flex: 1;
            display: flex;
            justify-content: center;  /* Center the image horizontally */
            align-items: center;      /* Center the image vertically */
        }

        .facility-image img {
            max-width: 100%;           /* Ensure the image does not overflow */
            height: 70%;              /* Keep the aspect ratio */
            object-fit: cover;
        }

        .facility-text {
            flex: 1;
            padding: 40px 30px;
            font-family: Arial, sans-serif;
            color: #4d3c2d;
        }

        .facility-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #8b5e34;
            font-weight: bold;
        }

        .facility-text p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

      /* new Testmonial css  */
        .testimonial-section {
      padding: 10px 20px;
      background-color: #f9f9f9;
      text-align: center;
    }

    .testimonial-section h2 {
      font-size: 2rem;
      margin-bottom: 40px;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: stretch;
    }

    /* Set fixed width and height for each testimonial */
    .review-content {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      width: 100%;
      max-width: 350px;
      height: 300px; /* Fixed height for equal height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-sizing: border-box;
      margin: auto;
    }

    .review-text {
      font-style: Arial, sans-serif;
      flex-grow: 1;
      margin-bottom: 20px;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .stars {
      color: #ffc107;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .reviewer-details h4 {
      margin: 0;
      font-size: 1.1rem;
    }

    .reviewer-details p {
      font-size: 0.9rem;
      color: #777;
    }

    /* Swiper pagination styling */
    .swiper-pagination {
      margin-top: 20px;
    }

    /* Optional: for responsiveness */
    @media (max-width: 768px) {
      .swiper-slide {
        flex: 0 0 50%; /* Two testimonials on medium screens */
      }
    }

    @media (max-width: 480px) {
      .swiper-slide {
        flex: 0 0 100%; /* One testimonial on small screens */
      }
    }

           
        

   
    /* footer */

    .bg-success {
    background-color: #15395A !important;
}

footer {
    margin-top: 0;
    padding-top: 10px;
}

footer a {
    transition: transform 0.3s ease;
}

footer a:hover {
    transform: scale(1.2);
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

        <!-- BANNER
        ================================================== -->
        <section class="p-0">
            <div class="container-fluid px-0 px-md-5">
                <div class="slider-fade">
                    <div class="owl-carousel owl-theme w-100">
                        <div class="text-center item cover-background bg-img rounded" data-overlay-dark="2" data-background="img/images/home_banner.jpg">
                            <div class="caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-xxl-7">
                                        <h1 class="mb-1-6 mb-lg-1-9 lh-1" style="text-align: center;">Play Golf At Our Timberview Golf Club</h1>
                                            <p class="mb-2-3 text-white display-28 d-none d-md-block">Timberview Golf Course is a challenging 18 hole golf course quickly located 30 minutes from Columbus, Ohio. Our course gives the golfer a feeling that is not found anywhere else near Marysville.</p>
                                            <a href="https://timberview-golf-club-public.book.teeitup.com/?course=9486&date=2025-03-07&max=9999" class="butn"><span>BOOK MORE</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUTUS && Welcome to Timberview section
        ================================================== -->
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="position-relative mb-8 mb-lg-0">
                            <div class="about-img">
                                <img src="img/images/home_welcome.jpg" class="d-flex mx-auto" alt="...">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 ps-lg-4 ps-xl-5">
                        <div>
                            <!-- <span class="section-title text-primary">About Us</span> -->
                            <h2 class="h1 mb-4 mb-lg-5">Welcome to Timberview Golf Course!</h2>
                            <p class="about-info mb-4 mb-lg-5">Timberview Golf Course is a challenging 18-hole golf course quickly located 30 minutes from Columbus, Ohio. Our course gives the golfer a feeling that is not found anywhere else near Marysville. Whether you are aiming to improve your game, or simply indulge in a day of relaxation and fun, our course is a great choice for you. Our laid-back country setting will let you step away from life for a little while and focus on your golf passion. Our course will challenge every aspect of your game as you try to navigate the narrow fairways, numerous water hazards (in play on 14 holes), our postage stamp greens and tactically placed sand traps. Although it plays to a mere 145 yards from the back tee, our “Signature Hole” #14 Par 3 will test not only your abilities, but your nerves as well.</p>
                            
                            <div class="d-sm-flex align-items-center mt-4 mt-lg-5">
                                <a href="about.php" class="butn">Read More</a>
                                <div class="d-flex align-items-center mt-4 mt-sm-0 ms-sm-3 ms-xl-5">
                                    <div class="phone-icon flex-shrink-0">
                                        <img src="img/content/about-icon-03.png" alt="..." class="p-3">
                                    </div>
                                    <div class="ms-xl-4 ms-3 flex-grow-1">
                                        <span class="d-block display-lg-30 display-xl-28 font-weight-600">Call Us Anytime</span>
                                        <a href="#!" class="display-lg-28 display-xl-26 font-weight-600">937-644-GOLF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>

             <!-- Our Tee Times Grid Layout section  start ================================================== -->

           <section class="center-text-section">
    <div class="center-item" style="background-image: url('img/banner/card3.png');">
        <h1>TEA TIMES</h1>
    </div>
    <div class="center-item" style="background-image: url('img/banner/card1.png');">
        <h1>FACILITIES</h1>
    </div>
    <div class="center-item" style="background-image: url('img/banner/card2.png');">
        <h1>SCORECARD</h1>
    </div>
    <div class="center-item" style="background-image: url('img/banner/slider3.jpg');">
        <h1>COURSE PHOTOS</h1>
    </div>
</section>
             <!-- Our Golf Facilities section  start ================================================== -->

        <section class="bg-light py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-4 text-center">
                            <h2  style="font-size: 2rem;" class="h4 w-95">Enjoy Our Golf Facilities!</h2><br>
                            <p>Timberview Golf Course was designed, built, and established by the Lewis Family in 1989 with the sole purpose of providing a Golf and Restaurant Facility that was not only relaxing but affordable to the everyday working person.</p>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-center">
                        <div class="col-6 col-md-4 mb-3">
                            <div class="course-img2">
                                <img src="img/images/home_blog2.jpg" alt="Golf Club" width=100% height=auto class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 mb-3">
                            <div class="course-img2">
                                <img src="img/images/home_blog3.jpg" alt="Golf Course" width=100% height=auto class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="course-img2">
                                <img src="img/images/home_blog4.jpg" alt="Golf Carts" width=100% height=auto class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- <h3 class="h4">What We Offer at Timberview Golf Club</h3> -->
                            <p>The Timberview Golf Course offers an assortment of excellent facilities and we’ll make every effort to accommodate your needs. And if you are hungry before or after your round of golf, be sure to stop in for a delicious bite at The Clubhouse at Timberview Golf Club.</p>
                            <p>Having been in the golf business for over 30 years, we offer the best golf memberships and lesson packages to fit your every need. So what are you waiting for? Give us a call and come take a guided tour of our facility or contact our Pro Shop. We’ll be glad to answer any questions you may have and we’ll provide you all the details and benefits we offer from golf lessons and memberships to booking outings and banquet facility accommodations. Timberview Golf Course has an eager staff that is committed to providing you with customer service that will make your golf visit a memorable occasion.</p>
                        </div>
                    </div>
                </div>
                 <!-- Customer reviews section  start ================================================== -->
               <div class="testimonial-section">
            <h2>What Our Customers Say</h2>
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">Great food and service while enjoying some cold beverages with friends and family listening to local live entertainment at the club house!</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                    <div class="reviewer-details">
                        <h4>Harley Taylor</h4>
                    <!--    <p>Engineer, Fitness</p> -->
                    </div>
                    </div>
                </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">Fun course to play, had a great time. Happy to see the course conditions have improved greatly this year and prices were unbeatable!</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                    <div class="reviewer-details">
                        <h4>Ethan Shepherd</h4>
                    <!--    <p>Renaissance Creations</p> -->
                    </div>
                    </div>
                </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">First time here golfing at Timberview visiting from Kentucky pretty nice challenging layout got my first ever birdie so this place is getting 5 stars</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                    <div class="reviewer-details">
                        <h4>Kyle Knight</h4>
                      <!--  <p>Freelancer</p> -->
                    </div>
                    </div>
                </div>
                </div>
                <!-- You can duplicate more testimonials here if needed -->
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            </div>
        </div>  
        </section> 
            
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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
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