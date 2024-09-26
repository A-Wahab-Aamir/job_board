<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
<body >


     

    <header class="mb-5 pb-1 pt-1 shadow-sm">
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
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





<div class="wrapper">

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
        <div class="col-md-3">
                            <div class="box box-solid p-4 shadow-sm rounded">
                                <div class="box-header with-border pb-2 mb-3">
                                    <h4><b>Menu</b></h4>
                                </div>
                                <div class="box-body no-padding">
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a class="nav-link d-flex align-items-center active"
                                                href="edit-profile.php">
                                                <i class="fa fa-user mr-2"></i> Edit Profile
                                            </a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a class="nav-link d-flex align-items-center text-muted" href="index.php">
                                                <i class="fa fa-address-card mr-2"></i> My Applications
                                            </a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a class="nav-link d-flex align-items-center text-muted" href="jobs.php">
                                                <i class="fa fa-briefcase mr-2"></i> Jobs
                                            </a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a class="nav-link d-flex align-items-center text-muted"
                                                href="settings.php">
                                                <i class="fa fa-cog mr-2"></i> Settings
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center text-muted"
                                                href="../logout.php">
                                                <i class="fa fa-sign-out-alt mr-2"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
          <div class="col-md-9 bg-white padding-2">
            <h2><i>Change Password</i></h2>
            <p>Type in new password that you want to use</p>
            <div class="row">
              <div class="col-md-6">
                <form id="changePassword" action="change-password.php" method="post">
                  <div class="form-group">
                    <input id="password" class="form-control input-lg" type="password" name="password" autocomplete="off" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input id="cpassword" class="form-control input-lg" type="password" autocomplete="off" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success">Change Password</button>
                  </div>
                  <div id="passwordError" class="color-red text-center hide-me">
                    Password Mismatch!!
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <form action="deactivate-account.php" method="post">
                  <label><input type="checkbox" required> I Want To Deactivate My Account</label>
                  <button type="submit" class="btn btn-danger btn-flat btn-lg">Deactivate My Account</button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->



  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<script>
  $("#changePassword").on("submit", function(e) {
    e.preventDefault();
    if( $('#password').val() != $('#cpassword').val() ) {
      $('#passwordError').show();
    } else {
      $(this).unbind('submit').submit();
    }
  });
</script>
</body>
</html>
