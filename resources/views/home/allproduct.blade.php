<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SmartWay- home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="home/img/favicon.png" rel="icon">
  <link href="home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/vendor/aos/aos.css" rel="stylesheet">
  <link href="home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="home/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>

<body>

  @include('sweetalert::alert')
  

  <!-- ======= Header ======= -->
   @include('home.header')
  <!-- End Header -->

 <!-- End Hero Section -->

  <main id="main">

   
    

    
    <!-- ======= catgory Section ======= -->
      @include('home.catagory')
      <!-- ======= catgory Section ======= -->
      
        
      @include('home.product')
    

    
    <!-- ======= offers Section ======= -->
    
     @include('home.offers')

    <!-- ======= Gallery Section ======= -->
    @include('home.Gallery')
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.70936988695!2d80.40487631721864!3d8.331649385471012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf5a9c7fe4da7%3A0x32e76c491f7d13be!2sCargills%20Food%20City%20-%20Anuradhapura%201!5e0!3m2!1sen!2slk!4v1667514464682!5m2!1sen!2slk" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>228,Senanayake Mawatha, Anuradhapura</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>SmartWay@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>025 4567 877</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 07AM - 22PM;
                  
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              228,Senanayake Mawatha,<br>
              Anuradhapura<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> 025 4567 877<br>
              <strong>Email:</strong> SmartWay@gmail.com<br>
            </p>
          </div>      
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 07AM</strong> - 22PM<br>
             
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SmartWay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
     
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="home/vendor/aos/aos.js"></script>
  <script src="home/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="home/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="home/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="home/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="home/js/main.js"></script>

</body>

</html>