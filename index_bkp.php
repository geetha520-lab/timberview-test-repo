<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
<!-- Basic Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- SEO Meta Tags -->
<title>Timberview Golf Club | Golf, Dining & Events in Marysville, Ohio</title>
<meta name="description" content="Enjoy a premier golf experience at Timberview Golf Club in Marysville, OH. Explore our scenic course, clubhouse dining, event hosting, and more.">
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

        /* new design for review grid */


        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .testimonial-container {
            width: 90%;
            margin: auto;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .swiper {
            width: 100%;
            padding-bottom: 50px;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px; /* Ensure cards have width */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .review-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .review-logo img {
            width: 80px;
            margin-bottom: 10px;
        }

        .review-text {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .stars {
            color: gold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .reviewer {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
            margin-top: 15px;
        }

        .reviewer img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .reviewer-details h4 {
            margin: 0;
            font-size: 16px;
        }

        .reviewer-details p {
            margin: 0;
            font-size: 14px;
            color: gray;
        }

        /* Swiper Navigation */
        .swiper-button-next, .swiper-button-prev {
            color: black;
            background: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 18px;
            font-weight: bold;
        }

       /* reviewer and paragph */
       .testimonial-section {
    padding: 40px 20px;
    background: #f9f9f9;
    text-align: center;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    padding: 20px;
    box-sizing: border-box;
}

.review-content {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}


        /* body {
            margin: 0;
            background-color: #f0f0f0;
        }

        .image-section {
            width: 100%;
            text-align: center;
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 1.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
            width: 80%; 
        } */
        

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

        <!-- BANNER
        ================================================== -->
        <section class="p-0">
            <div class="container-fluid px-0 px-md-5">
                <div class="slider-fade">
                    <div class="owl-carousel owl-theme w-100">
                        <div class="text-center item cover-background bg-img rounded" data-overlay-dark="2" data-background="img/banner/slider2.jpg">
                            <div class="caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-xxl-7">
                                        <h1 class="mb-1-6 mb-lg-1-9 lh-1" style="text-align: center;">Play Golf At Our Timberview Golf Club</h1>
                                            <p class="mb-2-3 text-white display-28 d-none d-md-block">Since its opening on August 15, 1995, the Golf Club has become a well known vacationer location drawing in golf players from all sides of the world.</p>
                                            <a href="https://timberview-golf-club-public.book.teeitup.com/?course=9486&date=2025-03-07&max=9999" class="butn"><span>BOOK MORE</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item cover-background bg-img rounded" data-overlay-dark="2" data-background="img/banner/slider3.jpg">
                            <div class="caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-xxl-7">
                                            <h1 class="mb-1-6 mb-lg-1-9 lh-1">Appreciate The Ultimate Golf</h1>
                                            <p class="mb-2-3 text-white display-28 d-none d-md-block">Golf is one of the zone's most eminent golf clubs with a tremendous fairway, which is ideal for the two fledglings and expert players.</p>
                                            <a href="https://timberview-golf-club-public.book.teeitup.com/?course=9486&date=2025-03-07&max=9999" class="butn"><span>BOOK MORE</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item cover-background bg-img rounded" data-overlay-dark="2" data-background="img/banner/slider2.jpg">
                            <div class="caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-xxl-7">
                                            <h1 class="mb-1-6 mb-lg-1-9 lh-1">Enjoy Advantages Of Golf</h1>
                                            <p class="mb-2-3 text-white display-28 d-none d-md-block">Known as a game of recreation and as a noble man's down, golf is perhaps the most mainstream, generally welcomed sports around the world.</p>
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
                                <img src="img/content/about-3.jpg" class="d-flex mx-auto" alt="...">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 ps-lg-4 ps-xl-5">
                        <div>
                            <!-- <span class="section-title text-primary">About Us</span> -->
                            <h2 class="h1 mb-4 mb-lg-5">Welcome to Timberview Golf Course!</h2>
                            <p class="about-info mb-4 mb-lg-5">Timberview Golf Course is a challenging 18-hole golf course quickly located 30 minutes from Columbus, Ohio. Our course gives the golfer a feeling that is not found anywhere else near Marysville. Whether you are aiming to improve your game, or simply indulge in a day of relaxation and fun, our course is a great choice for you. Our laid-back country setting will let you step away from life for a little while and focus on your golf passion. Our course will challenge every aspect of your game as you try to navigate the narrow fairways, numerous water hazards (in play on 14 holes), our postage stamp greens and tactically placed sand traps. Although it plays to a mere 145 yards from the back tee, our “Signature Hole” #14 Par 3 will test not only your abilities, but your nerves as well.</p>
                            
                            <div class="d-sm-flex align-items-center mt-4 mt-lg-5">
                                <a href="about.html" class="butn">Read More</a>
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
                <div class="center-item" style="background-image: url('img/banner/slider2.jpg');">
                    <h1>TEA TIMES</h1>
                </div>
                <div class="center-item" style="background-image: url('img/banner/slider2.jpg');">
                    <h1>FACILITIES</h1>
                </div>
                <div class="center-item" style="background-image: url('img/banner/slider3.jpg');">
                    <h1>SCORECARD</h1>
                </div>
                <div class="center-item" style="background-image: url('img/banner/slider3.jpg');">
                    <h1>2025 RATES</h1>
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
                                <img src="img/course/course-7.jpg" alt="Golf Club" width=100% height=auto class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 mb-3">
                            <div class="course-img2">
                                <img src="img/course/course-8.jpg" alt="Golf Course" width=100% height=auto class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="course-img2">
                                <img src="img/course/course-9.jpg" alt="Golf Carts" width=100% height=auto class="img-fluid rounded shadow-sm">
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
            </section>

            <!-- Customer reviews section  start ================================================== -->
            <div class="testimonial-section">
    <h2>What Our Customers Say</h2><br>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Each Review -->
            <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">"We were happy and impressed by the website! Zahr made sure to understand our needs and then execute what we needed."</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                        <div class="reviewer-details">
                            <h4>Ben Chaffee</h4>
                            <p>Engineer, Fitness</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">"I couldn't believe how fast the requested changes were made. Just like you first envisioned!"</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                        <div class="reviewer-details">
                                <h4>Jordan Rosenfeld</h4>
                                <p>Renaissance Creations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="review-content">
                    <p class="review-text">"The new site looks amazing! I really appreciate the on-going support and advice PurpleThumb continue to offer each month."</p>
                    <div class="stars">★★★★★</div>
                    <div class="reviewer">
                        <div class="reviewer-details">
                                <h4>Matt Biondi</h4>
                                <p>Freelancer</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add other swiper-slide items the same way... -->

        </div>
        <!-- Add Swiper pagination if needed -->
        <div class="swiper-pagination"></div>
    </div>
</div>


           <!-- <h2>What Our Customers Say</h2> <br>

            <div class="testimonial-container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                       
                        <div class="swiper-slide">
                            <div class="review-content">
                                <div class="review-logo">
                                   
                                </div>
                                <p class="review-text">"We were happy and impressed by the website! Zahr made sure to understand our needs and then execute what we needed."</p>
                                <div class="stars">★★★★★</div>
                                <div class="reviewer">
                                   
                                    <div class="reviewer-details">
                                        <h4>Ben Chaffee</h4>
                                        <p>Engineer, Fitness</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <div class="swiper-slide">
                            <div class="review-content">
                                <div class="review-logo">
                                    
                                </div>
                                <p class="review-text">"I couldn't believe how fast the requested changes were made. Just like you first envisioned!"</p>
                                <div class="stars">★★★★★</div>
                                <div class="reviewer">
                                    
                                    <div class="reviewer-details">
                                        <h4>Jordan Rosenfeld</h4>
                                        <p>Renaissance Creations</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="review-content">
                                <div class="review-logo">
                                   
                                </div>
                                <p class="review-text">"The new site looks amazing! I really appreciate the on-going support and advice PurpleThumb continue to offer each month."</p>
                                <div class="stars">★★★★★</div>
                                <div class="reviewer">
                            
                                    <div class="reviewer-details">
                                        <h4>Matt Biondi</h4>
                                        <p>Freelancer</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div> -->
             <!-- Customer reviews section  end ================================================== -->   

             
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

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
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