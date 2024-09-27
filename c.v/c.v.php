<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Builder</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/price_rangs.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="css/custom.css">
      
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 20px;
        }
        /* h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        } */
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        } */

        /* new  */
        #jt {
          text-transform: capitalize;
      }

      .nav-link {
          color: #6c757d;
          font-size: 1rem;
          transition: all 0.3s ease;
          padding: 10px 15px;
          border-radius: 5px;
          transition: all 0.5s ease;
      }

      .nav-link:hover {
          background-color: #f8f9fa;
      }

      .nav-link.active {
          background-color: #f8f9fa;
          color: #fb246a;
      }

      .nav-link i {
          margin-right: 10px;
      }

      .card-title a {
          color: black;
          transition: all ease 0.2s;
      }

      .card-title a:hover {
          color: #fb246a;
      }
        
        </style>
</head>
<body>
  <!-- Preloader Start -->
  <div id="preloader-active">
          <div class="preloader d-flex align-items-center justify-content-center">
              <div class="preloader-inner position-relative">
                  <div class="preloader-circle"></div>
                  <div class="preloader-img pere-text">
                      <img src="assets/img/logo/logo.png" alt="">
                  </div>
              </div>
          </div>
      </div>
      <!-- Preloader Start -->
      <header class="mt-2">
          <!-- Header Start -->
          <div class="header-area header-transparrent">
              <div class="headder-top header-sticky">
                  <div class="container">
                      <div class="row align-items-center">
                          <div class="col-lg-3 col-md-2">
                              <!-- Logo -->
                              <div class="logo">
                                  <a href="../index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                              </div>
                          </div>
                          <!-- Mobile Menu -->
                          <div class="col-12">
                              <div class="mobile_menu d-block d-lg-none"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Header End -->
      </header>



    <h1 class="h1 text-center"><b>CV Builder</b></h1>
    <form id="cvForm" action="generate_cv.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  class="form-control"  required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"  class="form-control" required>

        <label for="education">Education:</label>
        <textarea id="education" name="education" rows="4" class="form-control"  required></textarea>

        <label for="experience">Experience:</label>
        <textarea id="experience" name="experience" rows="4" class="form-control"  required></textarea>

        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" rows="4"  class="form-control" required></textarea>

        <button type="submit" class="btn btn-block">Generate CV</button>
    </form>





       <!-- JS here -->

      <!-- All JS Custom Plugins Link Here here -->
      <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
      <!-- Jquery, Popper, Bootstrap -->
      <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
      <!-- Jquery Mobile Menu -->
      <script src="./assets/js/jquery.slicknav.min.js"></script>

      <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>
      <script src="./assets/js/price_rangs.js"></script>

      <!-- One Page, Animated-HeadLin -->
      <script src="./assets/js/wow.min.js"></script>
      <script src="./assets/js/animated.headline.js"></script>
      <script src="./assets/js/jquery.magnific-popup.js"></script>

      <!-- Scrollup, nice-select, sticky -->
      <script src="./assets/js/jquery.scrollUp.min.js"></script>
      <script src="./assets/js/jquery.nice-select.min.js"></script>
      <script src="./assets/js/jquery.sticky.js"></script>

      <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/jquery.form.js"></script>
      <script src="./assets/js/jquery.validate.min.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

      <!-- Jquery Plugins, main Jquery -->
      <script src="./assets/js/plugins.js"></script>
      <script src="./assets/js/main.js"></script>
      <!-- jQuery 3 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../js/adminlte.min.js"></script>
</body>
</html>
