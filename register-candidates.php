<?php 
session_start();

if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

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
  <!-- Custom CSS for Register Page -->
  <style>
    .register-box {
      width: 100%;
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    .register-box .box-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .register-box h1 {
      color: #28395A;
      font-weight: bold;
    }

    .register-box .form-group {
      margin-bottom: 20px;
    }

    .register-box .btn-register {
      background-color: #fb246a;
      color: white;
      border: none;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .register-box .btn-register:hover {
      background-color: #e0225b;
    }

    .register-box .error-message {
      color: red;
      margin-top: 10px;
      text-align: center;
    }

    .register-box .success-message {
      color: green;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Header Start -->
  <header class="header-area header-transparrent pt-2" style="box-shadow: 10px 10px 10px #EDEDED">
        <div class="header-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <!-- Header End -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <div class="register-box">
            <div class="box-header">
              <h1>CREATE YOUR PROFILE</h1>
            </div>
            <form method="post" id="registerCandidates" action="adduser.php" enctype="multipart/form-data">
              <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                  <!-- Personal Information -->
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="fname" name="fname" placeholder="First Name *" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="lname" name="lname" placeholder="Last Name *" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="email" id="email" name="email" placeholder="Email *" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control input-lg" rows="4" id="aboutme" name="aboutme" placeholder="Brief intro about yourself *" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Date Of Birth</label>
                    <input class="form-control input-lg" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="dob" placeholder="Date Of Birth">
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="age" name="age" placeholder="Age" readonly>
                  </div>
                  <div class="form-group">
                    <label>Passing Year</label>
                    <input class="form-control input-lg" type="date" id="passingyear" name="passingyear" placeholder="Passing Year">
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="qualification" name="qualification" placeholder="Highest Qualification">
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="stream" name="stream" placeholder="Stream">
                  </div>
                  <div class="form-group checkbox">
                    <label><input type="checkbox" required> I accept terms & conditions</label>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn  btn-lg">Register</button>
                  </div>
                  <!-- Display Register Error -->
                  <?php 
                  if(isset($_SESSION['registerError'])) {
                    ?>
                    <div class="error-message">
                      Email Already Exists! Choose A Different Email!
                    </div>
                  <?php
                   unset($_SESSION['registerError']); }
                  ?> 

                  <!-- Display Upload Error -->
                  <?php if(isset($_SESSION['uploadError'])) { ?>
                  <div class="error-message">
                      <?php echo htmlspecialchars($_SESSION['uploadError']); ?>
                  </div>
                  <?php unset($_SESSION['uploadError']); } ?>     
                </div>
                
                <!-- Right Column -->
                <div class="col-md-6">
                  <!-- Account Details -->
                  <div class="form-group">
                    <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Password *" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="password" id="cpassword" name="cpassword" placeholder="Confirm Password *" required>
                  </div>
                  <div id="passwordError" class="error-message hide-me">
                        Password Mismatch!! 
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="contactno" name="contactno" minlength="10" maxlength="10" onkeypress="return validatePhone(event);" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control input-lg" rows="4" id="address" name="address" placeholder="Address"></textarea>
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="city" name="city" placeholder="City">
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="state" name="state" placeholder="State">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control input-lg" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
                  </div>              
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="designation" name="designation" placeholder="Designation">
                  </div>
                  <div class="form-group">
                    <label style="color: red;">File Format PDF Only!</label>
                    <input type="file" name="resume" class="form-control input-lg" accept="application/pdf" required>
                  </div>
                </div>
              </div>
            </form>

            <!-- Display Session Messages -->
            <?php 
              // Success Message
              if(isset($_SESSION['registerCompleted'])) {
            ?>
                <div class="success-message">
                  You Have Registered Successfully! Your Account Approval Is Pending By Admin
                </div>
            <?php
               unset($_SESSION['registerCompleted']); 
              }
            ?>

            <?php 
              // Upload Error Message
              if(isset($_SESSION['uploadError'])) {
            ?>
                <div class="error-message">
                  <?php echo htmlspecialchars($_SESSION['uploadError']); ?>
                </div>
            <?php 
               unset($_SESSION['uploadError']); 
              } 
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Control Sidebar Background -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

<!-- Custom JavaScript -->
<script type="text/javascript">
  // Phone Number Validation
  function validatePhone(event) {
    var key = window.event ? event.keyCode : event.which;

    if(event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
      return true;
    } else if( key < 48 || key > 57 ) {
      return false;
    } else return true;
  }

  // Calculate Age based on Date of Birth
  $('#dob').on('change', function() {
    var today = new Date();
    var birthDate = new Date($(this).val());
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();

    if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }

    $('#age').val(age);
  });

  // Password Match Validation
  $("#registerCandidates").on("submit", function(e) {
    if( $('#password').val() != $('#cpassword').val() ) {
      e.preventDefault();
      $('#passwordError').show();
    } else {
      $('#passwordError').hide();
    }
  });
</script>
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

</body>
</html>
