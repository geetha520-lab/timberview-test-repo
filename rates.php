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
<title>Golf Rates | Timberview Golf Course </title>
<meta name="description" content="View our affordable golf rates for 9 and 18 holes at Timberview. Enjoy great value and a quality course experience in Marysville, Ohio. Book today!">
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

        /* Rates table */
         
        .rates-section {
  max-width: 800px;
  margin: 0 auto;
  padding: 0px 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #222;
}

.rates-section h1 {
  font-size: 2.8rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.day-group {
  margin-bottom: 40px;
}

.day-group h2 {
  font-size: 1.6rem;
  font-weight: 600;
  margin-bottom: 20px;
  color: #333;
}

.rate-cards {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.rate-card {
  display: flex;
  justify-content: space-between;
  padding: 16px 20px;
  background: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 8px;
  transition: all 0.2s ease;
}

.rate-card:hover {
  background: #f0f0f0;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.rate-card span {
  font-size: 1rem;
}

.rate-card strong {
  font-size: 1.1rem;
  color: #2c3e50;
}

.note {
  text-align: center;
  font-weight: bold;
  font-size: 0.95rem;
  color: #1a237e;
  margin-top: 20px;
  text-decoration: underline;
}   

/* Rates backup plan */
/*
.rates-section {
  max-width: 1000px;
  margin: 0 auto;
  padding: 50px 25px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #222;
  background: linear-gradient(to bottom, #f0f4f8, #ffffff);
  border-radius: 20px;
}

.rates-section h1 {
  font-size: 3rem;
  text-align: center;
  font-weight: 800;
  margin-bottom: 40px;
  color: #1e3a5f;
}

.day-group {
  margin-bottom: 60px;
}

.day-group h2 {
  font-size: 1.8rem;
  margin-bottom: 25px;
  color: #37474f;
  border-left: 6px solid #1e88e5;
  padding-left: 12px;
}

.rate-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.rate-card {
  flex: 1 1 calc(45% - 20px);
  background: rgba(255, 255, 255, 0.85);
  border-radius: 16px;
  padding: 20px;
  border: 1px solid #e0e0e0;
  box-shadow: 0 8px 16px rgba(0,0,0,0.05);
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: all 0.3s ease;
  backdrop-filter: blur(4px);
}

.rate-card:hover {
  transform: scale(1.02);
  box-shadow: 0 12px 20px rgba(0,0,0,0.08);
  background-color: #e3f2fd;
}

.rate-card span {
  font-size: 1rem;
  display: flex;
  align-items: center;
  gap: 6px;
}

.rate-card strong {
  font-size: 1.2rem;
  color: #0d47a1;
}

.note {
  text-align: center;
  font-weight: bold;
  font-size: 1rem;
  color: #c62828;
  margin-top: 25px;
  text-decoration: underline;
}

.extra-info {
  margin-top: 30px;
  background-color: #fff8e1;
  border: 1px dashed #fbc02d;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  font-style: italic;
  font-weight: 600;
  color: #6d4c41;
} */





      

       

        


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
                        <h1>2025 Rates</h1>
                     <!--   <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="rates.php">2025 Rates</a></li>
                        </ul>  -->
                    </div>
                </div>
            </div>
        </section><br>

          <!-- Rates table 
        ================================================== -->
        
        <section class="rates-section">
  <h1>Rates</h1>

  <div class="day-group">
    <h2>Monday thru Thursday</h2>
    <div class="rate-cards">
      <div class="rate-card">
        <span>18 Holes w/ Cart</span>
        <strong>$28</strong>
      </div>
      <div class="rate-card">
        <span>18 Holes Walking</span>
        <strong>$22</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes w/ Cart</span>
        <strong>$20</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes Walking</span>
        <strong>$14</strong>
      </div>
    </div>
    <p class="note">** Senior and Junior rates available – Ask at Pro Shop **</p>
  </div>

  <div class="day-group">
    <h2>Friday</h2>
    <div class="rate-cards">
      <div class="rate-card">
        <span>18 Holes w/ Cart</span>
        <strong>$32</strong>
      </div>
      <div class="rate-card">
        <span>18 Holes Walking</span>
        <strong>$24</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes w/ Cart</span>
        <strong>$22</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes Walking</span>
        <strong>$15</strong>
      </div>
    </div>
    <p class="note">** Juniors Must Present Valid Drivers License to Rent Cart **</p>
  </div>
  
  <div class="day-group">
    <h2>Weekends & Holidays</h2>
    <div class="rate-cards">
      <div class="rate-card">
        <span>18 Holes w/ Cart</span>
        <strong>$39</strong>
      </div>
      <div class="rate-card">
        <span>18 Holes Walking</span>
        <strong>$26</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes w/ Cart</span>
        <strong>$24</strong>
      </div>
      <div class="rate-card">
        <span>9 Holes Walking</span>
        <strong>$16</strong>
      </div>
    </div><br>
    
    <div style="text-align: center; font-family: Arial, sans-serif; padding: 20px;">
  <p style="font-weight: bold; font-style: italic;">
    Pull Carts $2/Round
  </p>
  <p style="font-weight: bold; font-style: italic;">
    Club Rental $5.00 for 9 Holes &amp; $10.00 for 18 Holes
  </p>
  <p style="font-weight: bold; font-style: italic;">
    Non Golfer Cart Rental &nbsp; $5 for 9 Holes &amp; $10 for 18 Holes
  </p>
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