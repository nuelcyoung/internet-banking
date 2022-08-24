<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <meta name="description" content="Web Banking" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/preloader.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- Bootstrap Css -->
    <link href="<?= site_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= site_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= site_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Sweet Alerts js -->
    <link href="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script src="<?= site_url() ?>assets/libs/jquery/jquery.min.js"></script>
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

<body data-layout="horizontal">
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="<?= site_url('client') ?>" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $site_setting->site_name ?></span>
                            </span>
                        </a>

                        <a href="index" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $site_setting->site_name ?></span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="<?= site_url() ?>assets/images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                <img src="<?= site_url() ?>assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="<?= site_url() ?>assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="<?= site_url() ?>assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="<?= site_url() ?>assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="<?= site_url() ?>assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i class="fas fa-moon icon-lg layout-mode-dark"></i>
                            <i class="fas fa-sun icon-lg layout-mode-light"></i>
                        </button>
                    </div>

                    <!-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> <?= lang('Files.Notifications') ?> </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> <?= lang('Files.Unread') ?> (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?= lang('Files.James_Lemire') ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"><?= lang('Files.It_will_seem_like_simplified_English') ?>.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?= lang('Files.1_hours_ago') ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?= lang('Files.Your_order_is_placed') ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"><?= lang('Files.If_several_languages_coalesce_the_grammar') ?></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?= lang('Files.3_min_ago') ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?= lang('Files.Your_item_is_shipped') ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"><?= lang('Files.If_several_languages_coalesce_the_grammar') ?></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?= lang('Files.3_min_ago') ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?= lang('Files.Salena_Layfield') ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"><?= lang('Files.As_a_skeptical_Cambridge_friend_of_mine_occidental') ?>.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?= lang('Files.1_hours_ago') ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span><?= lang('Files.View_More') ?>..</span>
                                </a>
                            </div>
                        </div>
                    </div> -->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= site_url('assets/images/empty.jpg')?>" alt="">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= session()->get('firstname') . ' ' . session()->get('lastname') ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?= site_url('client/details') ?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> <?= lang('Files.Profile') ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?= lang('Files.Logout') ?></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/client" id="topnav-dashboard" role="button">
                                    <i class="fas fa-home"></i> <span data-key="t-dashboards"><?= lang('Files.Dashboard') ?></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/client/transfer" id="topnav-uielement" role="button">
                                    <i class="fas fa-paper-plane"></i>
                                    <span data-key="t-components">Pay & Transfer</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/client/deposit" id="topnav-pages" role="button">
                                    <i class="fas fa-money-bill"></i> <span data-key="t-apps"><?= lang('Files.Deposit') ?></span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/client/statement" id="topnav-pages" role="button">
                                    <i class="fas fa-history"></i> <span data-key="t-apps"><?= lang('Files.Statement') ?></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/client/cards" id="topnav-components" role="button">
                                    <i class="fas fa-credit-card"></i> <span data-key="t-components"><?= lang('Files.Card') ?></span>
                                </a>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/clients/loans" id="topnav-more" role="button">
                                    <i class="fas fa-landmark"></i> <span data-key="t-extra-pages"><?= lang('Files.Loan') ?></span>
                                </a>
                            </li> -->

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                <div class="text-center">
                    <?= view('flashMessages') ?>
                </div>
            </div>
            <?= $this->renderSection('content') ?>
        </div>

    </div>
    <!-- JAVASCRIPT -->

    <script src="<?= site_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- pace js -->
    <script src="<?= site_url() ?>assets/libs/pace-js/pace.min.js"></script>
    <!-- apexcharts -->
    <script src="<?= site_url() ?>assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Sweet Alerts js -->
    <script src="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Plugins js-->
    <script src="<?= site_url() ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <!-- dashboard init -->
    <script src="<?= site_url() ?>assets/js/pages/dashboard.init.js"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="<?= site_url() ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- form wizard init -->
    <script src="<?= site_url() ?>assets/js/pages/form-wizard.init.js"></script>
    <script src="<?= site_url() ?>assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.error-message').fadeOut();
            }, 5000);

        })
    </script>
</body>

</html>