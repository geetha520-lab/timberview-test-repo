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
<title>Scorecard | Timberview Golf Course  </title>
<meta name="description" content="View the Timberview Golf Course scorecard with yardages, pars, and hole details. Plan your game and get to know the layout before you tee off!">
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

        /* Scorecard */
        .scorecard-container {
  max-width: 1200px;
  margin: 40px auto;
  padding: 20px;
}

h1 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-align: center;
}

.scorecard-section {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  margin-bottom: 30px;
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  min-width: 600px;
}

th, td {
  padding: 14px 16px;
  text-align: center;
  border-bottom: 1px solid #eee;
}

th {
  background-color: #f0f0f5;
  font-weight: 600;
  color: #333;
}

td:first-child {
  font-weight: 500;
  background-color: #fafafa;
}

tr:hover {
  background-color: #f9f9f9;
}

@media (max-width: 768px) {
  table {
    font-size: 14px;
  }

  h1 {
    font-size: 2rem;
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
                        <h1>Scorecard</h1>
                      <!--  <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="scorecard.php">Scorecard</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>

          <!-- Scorecard table 
        ================================================== -->
        
        <div class="scorecard-container">
    <h1>Scorecard</h1>

    <div class="scorecard-section">
      <table class="overview-table">
        <thead>
          <tr>
            <th>Tee</th>
            <th>Yards</th>
            <th>Par</th>
            <th>USGA Rating</th>
            <th>Slope</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Blue</td><td>6202</td><td>71</td><td>69.1</td><td>111</td></tr>
          <tr><td>White</td><td>6022</td><td>71</td><td>68.1</td><td>110</td></tr>
          <tr><td>Gold</td><td>5164</td><td>71</td><td>67.9</td><td>109</td></tr>
          <tr><td>Red</td><td>5073</td><td>71</td><td>64.0</td><td>101</td></tr>
        </tbody>
      </table>
    </div>

    <div class="scorecard-section">
      <table class="holes-table">
        <thead>
          <tr>
            <th>Hole</th>
            <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Blue</td><td>441</td><td>370</td><td>499</td><td>362</td><td>185</td><td>318</td><td>191</td><td>391</td><td>492</td></tr>
          <tr><td>White</td><td>429</td><td>352</td><td>487</td><td>357</td><td>180</td><td>313</td><td>186</td><td>386</td><td>487</td></tr>
          <tr><td>Gold</td><td>342</td><td>316</td><td>432</td><td>284</td><td>151</td><td>294</td><td>166</td><td>331</td><td>424</td></tr>
          <tr><td>H’cp</td><td>2</td><td>7</td><td>13</td><td>4</td><td>12</td><td>18</td><td>8</td><td>10</td><td>14</td></tr>
        </tbody>
      </table>
    </div>
    <div class="scorecard-section">
  <table class="holes-table">
    <thead>
      <tr>
        <th>Hole</th>
        <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Blue</td><td>314</td><td>356</td><td>309</td><td>408</td><td>151</td><td>341</td><td>345</td><td>200</td><td>528</td></tr>
      <tr><td>White</td><td>310</td><td>351</td><td>304</td><td>383</td><td>146</td><td>336</td><td>340</td><td>174</td><td>501</td></tr>
      <tr><td>Gold</td><td>299</td><td>281</td><td>272</td><td>290</td><td>121</td><td>277</td><td>315</td><td>142</td><td>427</td></tr>
      <tr><td>H’cp</td><td>16</td><td>6</td><td>17</td><td>5</td><td>3</td><td>11</td><td>1</td><td>9</td><td>15</td></tr>
    </tbody>
  </table>
</div>

  </div>





       
        
       
            
        
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