<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">

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
    <style>
    #jt {
        text-transform: capitalize;
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
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky shadow-sm">
                <div class="container">
                    <div class="row align-items-center mt-2 pb-2">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">

                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
                                    <!-- Register Button -->
                                    <a href="#" class="btn head-btn1" data-toggle="modal"
                                        data-target="#registerModal">Register</a>
                                    <!-- Register Modal -->
                                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                                        aria-labelledby="registerModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Choose your registration type:</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="register-candidates.php" class="btn  btn-block">As
                                                                a Candidate</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="register-company.php" class="btn  btn-block">As a
                                                                Company</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Login Button -->
                                    <a class="btn head-btn2" data-toggle="modal" data-target="#loginModal">Login</a>
                                    <!-- Login Modal -->
                                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                        aria-labelledby="loginModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="registerModalLabel">Login</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Choose your login credential:</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="login-candidates.php" class="btn  btn-block">As a
                                                                Candidate</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="login-company.php" class="btn  btn-block">As a
                                                                Company</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { 
                                        if(isset($_SESSION['id_user'])) { 
                                            ?>
                                    <a href="user/index.php" class="btn head-btn1">Dashboard</a>
                                    <?php
                                      } else if(isset($_SESSION['id_company'])) { 
                                        ?>
                                    <a href="company/index.php" class="btn head-btn1">Dashboard</a>
                                    <?php } ?>
                                    <a href="logout.php" class="btn head-btn2">Logout</a>
                                    <?php } ?>
                                </div>
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

    <!-- Main Content -->
    <div class="content-wrapper mt-5">
        <?php
      $sql = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <section id="job-details" class="container">
            <div class="row">
                <!-- Job Details Section -->
                <div class="col-md-9">
                    <div class="card mb-4 shadow-sm p-4">
                        <div class="d-flex justify-content-between">
                            <h2 class="card-title" id="jt"><b><?php echo $row['jobtitle']; ?></b></h2>
                        </div>
                        <hr>
                        <div>
                            <p id="jt"><i class="fas fa-map-marker-alt text-muted me-2"></i><?php echo $row['city']; ?>
                            </p>
                            <p><i
                                    class="fas fa-calendar-alt text-muted me-2"></i> Posted on: <?php echo date("d-M-Y", strtotime($row['createdat'])); ?>
                            </p>
                            <span class="attachment-heading pull-right">$<?php echo $row['minimumsalary']; ?> -
                                $<?php echo $row['maximumsalary']; ?>/Month</span>
                        </div>
                        <div class="mt-4">
                            <p><?php echo stripcslashes($row['description']); ?></p>
                        </div>

                        <?php if(isset($_SESSION["id_user"]) && empty($_SESSION['companyLogged'])) { ?>
                        <div class="mt-4">
                            <a href="apply.php?id=<?php echo $row['id_jobpost']; ?>" class="btn btn-flat">Apply Now</a>
                        </div>
                        <?php 
            }  else{
               ?>
                        <button class="btn" onclick="alert('Login Before Apply Job')">Apply Now</buttton>
                            <?php } ?>
                    </div>
                </div>

                <!-- Company Info Section -->
                <div class="col-md-3">
                    <div class="card text-center">
                        <div style="border: 3px solid #fb246a">
                            <img src="uploads/logo/<?php echo $row['logo']; ?>" class="card-img-top" alt="Company Logo">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="jt"><?php echo $row['companyname']; ?></h5>
                            <!-- <button onclick="alert('Login Before Apply Job')" class="btn">More Info</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }
      }
    ?>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="container text-center">
            <p class="mt-140">© 2024 Job Portal. All rights reserved.</p>
        </div>
    </footer>

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