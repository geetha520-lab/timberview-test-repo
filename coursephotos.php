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
<title>Course Photos | Timberview Golf Course</title>
<meta name="description" content=": Browse stunning photos of Timberview Golf Course. Explore scenic fairways, lush greens, and beautiful landscapes that make every round memorable.">
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>


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

        /* Course Photos */
       
        .gallery-section {
  background-color: #f9f9f9;
  padding: 60px 20px;
  text-align: center;
}

.gallery-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 10px;
  color: #2d2d2d;
}

.gallery-header p {
  font-size: 1.1rem;
  color: #555;
  margin-bottom: 40px;
}

.gallery-carousel .item img {
  width: 100%;
  height: 500px;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

@media (max-width: 768px) {
  .gallery-header h2 {
    font-size: 2rem;
  }

  .gallery-carousel .item img {
    height: 250px;
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
        <section class="page-title-section bg-img cover-background" data-overlay-dark="4" data-background="img/images/main_banner.jpg">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Course Photos</h1>
                     <!--   <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="coursephotos.php">Course Photos</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>

          <!-- instruction  
        ================================================== -->
      

        <section class="gallery-section">
  <div class="gallery-header">
    <h2>Explore Our Course Photos</h2>
    <p>Take a look at some of the stunning views and amenities at Timberview Golf Course.</p>
  </div>

  <div class="owl-carousel owl-theme gallery-carousel">
    <!-- <div class="item"><img src="img/images/home_banner.jpg" alt="Golf Course View 1" /></div>
    <div class="item"><img src="img/content/slider6.png" alt="Golf Course View 2" /></div> -->
    <!-- <div class="item"><img src="img/content/carousel1.jpg" alt="Golf Course View 3" /></div> -->
    <!-- <div class="item"><img src="img/content/carousel2.jpg" alt="Golf Course View 4" /></div> -->
    <!-- <div class="item"><img src="img/content/carousel3.jpg" alt="Golf Course View 5" /></div> -->

    <!-- <div class="item"><img src="img/content/pg01.jpeg" alt="Golf Course View 1" /></div>
    <div class="item"><img src="img/content/pg02.jpeg" alt="Golf Course View 2" /></div>
    <div class="item"><img src="img/content/pg03.jpeg" alt="Golf Course View 3" /></div> -->
    <div class="item"><img src="img/content/pg04.jpeg" alt="Golf Course View 4" /></div>
    <!-- <div class="item"><img src="img/content/pg05.jpeg" alt="Golf Course View 5" /></div> -->
    <div class="item"><img src="img/content/pg06.jpeg" alt="Golf Course View 6" /></div>
    <div class="item"><img src="img/content/pg07.jpeg" alt="Golf Course View 7" /></div>
    <div class="item"><img src="img/content/pg08.jpeg" alt="Golf Course View 8" /></div>
    <div class="item"><img src="img/content/pg09.jpeg" alt="Golf Course View 9" /></div>
    <div class="item"><img src="img/content/pg10.jpeg" alt="Golf Course View 10" /></div>
    <div class="item"><img src="img/content/pg11.jpeg" alt="Golf Course View 11" /></div>
    <div class="item"><img src="img/content/pg12.jpeg" alt="Golf Course View 12" /></div>
    <!-- <div class="item"><img src="img/content/pg13.jpeg" alt="Golf Course View 13" /></div>
    <div class="item"><img src="img/content/pg14.jpeg" alt="Golf Course View 14" /></div>
    <div class="item"><img src="img/content/pg15.jpeg" alt="Golf Course View 15" /></div> -->
  </div>
</section>
           

      
      



       
        
       
            
        
        <!-- FOOTER  start ================================================== -->

        <?php include('footer.php'); ?>

        <!-- FOOTER  end ================================================== -->


    </div>

    <!-- BUY TEMPLATE
    ================================================== -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      nav: true,
      dots: true
    });
  });
</script>



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