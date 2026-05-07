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
<title>Hours of Operation | Timberview Golf Course</title>
<meta name="description" content=": View Timberview Golf Course hours of operation and seasonal availability. Check opening times to plan your next round or visit with ease">
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

        /* Hoursofoperation */
       
        .hoursofop {
    text-align: center;
    margin-top: 50px;
}
.clubhouse, .golf-course, .carts {
    font-size: 18px;
    font-weight: bold;
}

.carts {
    margin-top: 20px;
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
        <section class="page-title-section bg-img cover-background" data-overlay-dark="4" data-background="img/images/main_banner.jpg">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Hours of Operations</h1>
                    <!--    <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="hoursofoperation.php">Hours of Operations</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>

          <!-- instruction  
        ================================================== -->
      
        <div class="hoursofop">
        <p class="clubhouse">The Clubhouse at Timberview Golf Club 8am – 8pm Daily</p>
        <p class="golf-course">Golf Course/Pro Shop 7am – 7pm Daily</p>
        <p class="carts">** Carts must be in by 8:30pm **</p>
    </div>

<br>     
        
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