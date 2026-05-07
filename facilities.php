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

<!-- SEO Meta Tags -->
<title>Facilities | Timberview Golf Course </title>
<meta name="description" content="Explore Timberview’s full range of golf facilities including clubhouse, practice areas, and event space everything you need for a great day of golf.">
<meta name="keywords" content="Timberview Golf Club, Marysville golf, Ohio golf course, golf dining, clubhouse menu, golf events, driving directions, public golf course">
<meta name="author" content="Timberview Golf Club">

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

        body {
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
            width: 80%; /* Adjust width based on text visibility */
        }

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
        <section class="page-title-section bg-img cover-background" data-overlay-dark="4" data-background="img/images/main_banner.jpg">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Facilities</h1>
                       <!-- <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="facilities.php">Facilities</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section><br>

         <!-- PORTFOLIO SINGLE
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="mb-4">
                            <h1>Facilities</h1>
                        </div>
                        <div class="mb-4">
                        <img src="img/images/fac_img1.jpg" class="rounded" alt="...">

                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div>
                            <h3 class="h4">Pro Shop</h3>
                            <p class="w-95 mb-1-9">The Timberview Golf Course offers the best in equipment and apparel to compliment your golf game. Stop by the Pro Shop before or after your round and browse through name brands.</p>
                            <div class="row align-items-center mb-1-9">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div>
                                        <img src="img/images/fac_blog1.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div>
                                        <img src="img/images/fac_blog2.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                            </div>
                            <h3 class="h4">Marysville Golf Practice Facilities</h3>
                            <p class="w-95">Timberview Golf Course offers a putting area, and is the perfect place to improve your short game. The Timberview Golf Course also has a Golf Professional on staff and is available for lessons at your convenience. What better way to take your game to the next level this year? Make time to perfect your swing and improve your golf game today. Just contact our pro shop to speak with our professional staff and schedule your lesson.</p>
                            <h3 class="h4">The Clubhouse at Timberview Golf Club </h3>
                            <p class="mb-1-9 w-95">The Clubhouse is the perfect way to end your round at our Timberview Golf Course. Unwind with your favorite beverage from our fully stocked bar while you relax enjoying the natural surroundings. The Clubhouse at Timberview Golf Club is open daily from 8:00am to 9:00pm.</p>
                            
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <img src="img/images/fac_blog3.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <img src="img/images/fac_blog4.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>
        
       
            
        
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