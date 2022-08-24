<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/flaticon.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/nice-select.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/odometer.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/front/css/responsive.css">

    <title><?= $title ?></title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "f21a1278-eedb-4754-9791-fa56df14c25b";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader Area -->
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="<?= site_url() ?>">
                            <img src="<?= site_url() ?>assets/front/img/logo-1.png" class="black-logo" alt="image">
                            <img src="<?= site_url() ?>assets/front/img/white-logo.png" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?= site_url() ?>">
                        <img src="<?= site_url() ?>assets/front/img/logo-1.png" class="black-logo" alt="image">
                        <img src="<?= site_url() ?>assets/front/img/white-logo.png" class="white-logo" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?= site_url() ?>" class="nav-link">
                                    Home
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?= site_url('about') ?>" class="nav-link">
                                    About
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= site_url('contact') ?>" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="<?= site_url('login') ?>" class="default-btn">Internet Banking</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="<?= site_url('client') ?>" class="default-btn">Internet Banking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
    <?= $this->renderSection('content') ?>

    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <h2><a href="<?= site_url() ?>"><?= $site_setting->site_name ?></a></h2>

                            <p>We’re a leading international banking group committed to building a sustainable business over the long-term. We operate in some of the world's most dynamic markets and have been for over 24 years.</p>

                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact</h3>

                        <ul class="footer-contact-info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <span>Phone</span>
                                <a href="tel:15147939-357">+1 (514) 7939-357</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>Email</span>
                                <span>info@ofusebank.com</span>
                            </li>
                            <li>
                                <i class='bx bx-map'></i>
                                <span>Address</span>
                                Sonnenweg 24, Martherenges, Switzerland.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Services</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="#">Bank accounts</a>
                            </li>
                            <li>
                                <a href="#">Savings</a>
                            </li>
                            <li>
                                <a href="#">Credit cards</a>
                            </li>
                            <li>
                                <a href="#">Loans</a>
                            </li>
                            <li>
                                <a href="#">Car finance</a>
                            </li>
                            <li>
                                <a href="#">Mobile banking</a>
                            </li>
                            <li>
                                <a href="#">Online banking</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Help & guidance</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="#">Privacy statement</a>
                            </li>
                            <li>
                                <a href="#">Corporate information</a>
                            </li>
                            <li>
                                <a href="#">Online banking help</a>
                            </li>
                            <li>
                                <a href="#">Managing your money</a>
                            </li>
                            <li>
                                <a href="#">Proving your identity</a>
                            </li>
                            <li>
                                <a href="#">International banking</a>
                            </li>
                            <li>
                                <a href="#">Help centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <?= $site_setting->site_name ?>. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= site_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.meanmenu.js"></script>
    <!-- Nice Select JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.nice-select.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?= site_url(); ?>assets/front/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.magnific-popup.min.js"></script>
    <!-- Odometer JS -->
    <script src="<?= site_url(); ?>assets/front/js/odometer.min.js"></script>
    <!-- Jquery Appear JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.appear.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="<?= site_url(); ?>assets/front/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="<?= site_url(); ?>assets/front/js/form-validator.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Contact JS -->
    <script src="<?= site_url(); ?>assets/front/js/contact-form-script.js"></script>
    <!-- Wow JS -->
    <script src="<?= site_url(); ?>assets/front/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= site_url(); ?>assets/front/js/main.js"></script>
</body>

</html>