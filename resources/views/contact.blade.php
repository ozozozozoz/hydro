<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hydro.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">HYDRO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li><a href="/about">ABOUT US</a></li>
          <li class="dropdown"><a href="#"><span>OUR PROJECT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Project 1</a></li>
              {{-- <li class="dropdown"><a href="#"><span>OUR PROJECT</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
              <li><a href="#">Project 2</a></li>
              <li><a href="#">Project 3</a></li>
              {{-- <li><a href="#">Project 4</a></li> --}}
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="/testi">TESTIMONIALS</a></li>
          <li><a class="nav-link scrollto" href="/news">NEWS</a></li>
          <li><a class="nav-link scrollto" href="/contact">CONTACT US</a></li>
          <!--<li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{-- <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol class="">
          <li><a href="/">Home</a></li>
          <li>Contact Us</li>
        </ol>
        <h2>Contact Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
            @yield('content')
        </p>
      </div>
    </section>

  </main><!-- End #main --> --}}

  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol class="crumbs">
        <li><a href="/">Home</a></li>
        <li>Contact Us</li>
      </ol>
      <h2>Contact Us</h2>

    </div>
  </section><!-- End Breadcrumbs -->
  
       <!-- ======= Contact Section ======= -->
       <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Send a Message</h2>
            <p>Use the form below to ask any enquiries and concerns. We would like to hear it from you!</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="testadd" method="post" class="php-email-form">
                @csrf
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="Name">Your Name</label>
                    <input type="text" name="Name" class="form-control" id="Name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Email">Your Email</label>
                    <input type="text" class="form-control" name="Email" id="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Subject">Subject</label>
                  <input type="text" class="form-control" name="Subject" id="Subject" required>
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" name="Message" rows="10" id="Message" required></textarea>
                </div>
                <div class="my-3">
                  {{-- <div class="loading">Loading</div> --}}
                  {{-- <div class="error-message"></div> --}}
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Address</h4>
                    <p>Jalan Thamrin no.1, Jakarta 12000</p>
                  </div>
    
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Phone</h4>
                    <p>+62 21 43215678</p>
                  </div>
    
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email</h4>
                    <p>info@hydro.com</p>
                  </div>
    
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>WhatsApp</h4>
                    <!-- <div class="social-links mt-3"> -->
                    <!-- </div> -->
                  </div>
                  <div class="social-links">
                  {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
                  <a href="https://api.whatsapp.com/send?phone=6281288572408" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                  {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                </div>
                  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
                </div>            
    
              </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        2022 &copy; Copyright <strong><span>Hydro</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>