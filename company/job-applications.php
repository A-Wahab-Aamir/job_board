<?php

// To Handle Session Variables on This Page
session_start();

// If user Not logged in then redirect them back to homepage. 
if (empty($_SESSION['id_company'])) {
    header("Location: ../index.php");
    exit();
}

require_once("../db.php");
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

    .card-title a {
        color: black;
        transition: all ease 0.2s;
    }

    .card-title a:hover {
        color: #fb246a;
    }
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
                    <img src="../assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header -->
    <header class="shadow-sm p-2 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-12 d-lg-none">
                    <div class="mobile_menu"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="content-wrapper">
        <section id="candidates" class="hero-section">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-md-3">
                        <div class="p-4 shadow-sm rounded">
                            <h3 class="box-title">Welcome <b><?php echo $_SESSION['name']; ?></b></h3>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center text-muted" href="index.php">
                                        <i class="fa fa-tachometer-alt"></i>&nbsp; Dashboard
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center text-muted" href="edit-company.php">
                                        <i class="fa fa-user"></i>&nbsp; My Company
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center text-muted" href="create-job-post.php">
                                        <i class="fa fa-briefcase"></i>&nbsp; Create Job Post
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center text-muted" href="my-job-post.php">
                                        <i class="fa fa-file-alt"></i>&nbsp; My Job Posts
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center active"
                                        href="job-applications.php">
                                        <i class="fa fa-envelope"></i>&nbsp; Job Applications
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link d-flex align-items-center text-muted" href="settings.php">
                                        <i class="fa fa-cog"></i>&nbsp; Account Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-muted" href="../logout.php">
                                        <i class="fa fa-sign-out-alt"></i>&nbsp; Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 shadow-sm rounded p-4">
                        <h2><b>Recent Applications</b></h2>

                        <?php
                        $sql = "SELECT * FROM job_post 
                                INNER JOIN apply_job_post ON job_post.id_jobpost = apply_job_post.id_jobpost  
                                INNER JOIN users ON users.id_user = apply_job_post.id_user 
                                WHERE apply_job_post.id_company = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $_SESSION['id_company']);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card mb-4 border-light shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a
                                        href="user-application.php?id=<?php echo $row['id_user']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" id="jt">
                                        <?php echo $row['jobtitle'] . ' @ (' . $row['firstname'] . ' ' . $row['lastname'] . ')'; ?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="fa fa-calendar mr-2"></i> Posted on: <?php echo $row['createdat']; ?>
                                    </small>
                                </p>
                                <div class="d-flex justify-content-end align-items-center">
                                    <span>Status: </span>
                                    <span class="ml-2">
                                        <?php
                                        if ($row['status'] == 0) {
                                            echo '<span class="badge badge-warning ml-2">Pending</span>';
                                        } else if ($row['status'] == 1) {
                                            echo '<span class="badge badge-danger ml-2">Rejected</span>';
                                        } else if ($row['status'] == 2) {
                                            echo '<span class="badge badge-success ml-2">Under Review</span>';
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            echo "<p>No recent applications found.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer Placeholder -->
    <div class="control-sidebar-bg"></div>

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