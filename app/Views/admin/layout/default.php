<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <meta name="description" content="Internet Banking" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="<?= $title ?>" />
    <meta name="apple-mobile-web-app-title" content="<?= $title ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- plugin css -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />
    <link href="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- include alertify.css -->
    <!-- <link rel="stylesheet" href="<?= site_url(); ?>assets/css/alertify.css" />
        <link rel="stylesheet" href="<?= site_url(); ?>assets/css/default.min.css" /> -->
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $site_setting->site_name ?></span>
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= site_url() ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $site_setting->site_name ?></span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex">

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= site_url() ?>assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium"><?=session()->get('role');?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?= site_url('admin/profile') ?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>

                        <li>
                            <a href="<?=site_url('admin')?>">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-authentication">All users</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=site_url('admin/user-list')?>" data-key="t-recover-password">Users List</a></li>
                                <li><a href="<?=site_url('admin/register')?>" data-key="t-register">Register</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-transactions">Transactions</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=site_url('admin/transaction')?>" data-key="t-alerts">All Transaction</a></li>
                                <!-- <li><a href="<?=site_url('admin/pending-deposit')?>" data-key="t-buttons">Pending Deposit</a></li> -->
                                <!-- <li><a href="ui-cards" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel" data-key="t-carousel">Carousel</a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages">Transfers</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=site_url('admin/transfer')?>" data-key="t-starter-page">All transfers</a></li>
                                <li><a href="<?=site_url('admin/transfer-status')?>" data-key="t-maintenance">Transfer Status</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-components">Deposits</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=site_url('admin/deposit')?>" data-key="t-alerts">All Deposit</a></li>
                                <li><a href="<?=site_url('admin/pending-deposit')?>" data-key="t-buttons">Pending Deposit</a></li>
                                <!-- <li><a href="ui-cards" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel" data-key="t-carousel">Carousel</a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-otp">Cards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts" data-key="t-allcard">All cards</a></li>
                                <li><a href="ui-alerts" data-key="t-cardactivate">Activate cards</a></li>
                            </ul>
                        </li>

  

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <?= $this->renderSection('content') ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <?= $site_setting->site_name ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('.error-message').fadeOut('fast');
            $('.success-message').fadeOut('fast');
        }, 6000);
    </script>


    <!-- JAVASCRIPT -->

    <script src="<?= site_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= site_url() ?>assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="<?= site_url() ?>assets/libs/pace-js/pace.min.js"></script> <!-- password addon init -->
    <script src="<?= site_url() ?>assets/js/pages/pass-addon.init.js"></script>
    <!-- two-step-verification js -->
    <script src="<?= site_url() ?>assets/js/pages/two-step-verification.init.js"></script>
    <script src="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- App js -->
    <script src="<?= site_url() ?>assets/js/app.js"></script>
    <!-- <script src="<?= site_url(); ?>assets/js/alertify.js"></script> -->
    <!-- <script type="text/javascript">
        alertify.defaults.glossary.title = 'Disclaimer';
        alertify.defaults.theme.ok = "button button--primary";
        alertify.defaults.transition = "slide";
        alertify.alert()
            .setting({
                'label': 'Agree',
                'message': '<strong class="question">Protect Yourself: tips for banking safely Online</strong><p><strong>01.</strong> We will never ask you to disclose sensitive banking information such as your online login details or PIN Number.</p><p><strong>02.</strong> Beware of emails or text messages that ask you to confirm personal banking details</p><p><strong>03.</strong> Do not respond to suspicious emails and delete them from your mailbox immediately</p><p><strong>04.</strong> Do not click on any links in emails to connect to our online banking website</p><p><strong>05.</strong> Always click on the internet banking on our website (<a href="<?= site_url() ?>"><?= site_url() ?></a>) to access your Online Account </p>',
                'pinned': false,
                'movable': false,
                'closable': false,
                'modal': true,
            }).show();
    </script> -->

    <!-- <div id="google_translate_element" style="display:none"></div>
    <script type="text/javascript">
        function readCookie(name) {
            var c = document.cookie.split('; '),
                cookies = {},
                i, C;

            for (i = c.length - 1; i >= 0; i--) {
                C = c[i].split('=');
                cookies[C[0]] = C[1];
            }

            return cookies[name];
        }
        var lang = readCookie('googtrans').slice(-2);
        $('#language option[value="' + lang + '"]').prop('selected', true);

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: "en"
            }, 'google_translate_element');
        }

        function changeLanguageByButtonClick() {
            var language = document.getElementById("language").value;
            var selectField = document.querySelector("#google_translate_element select");
            for (var i = 0; i < selectField.children.length; i++) {
                var option = selectField.children[i];
                // find desired langauge and change the former language of the hidden selection-field 
                if (option.value == language) {
                    selectField.selectedIndex = i;
                    // trigger change event afterwards to make google-lib translate this side
                    selectField.dispatchEvent(new Event('change'));
                    break;
                }
            }
        }

        function changeLanguageByButtonClick2() {
            var language = document.getElementById("language2").value;
            var selectField = document.querySelector("#google_translate_element select");
            for (var i = 0; i < selectField.children.length; i++) {
                var option = selectField.children[i];
                // find desired langauge and change the former language of the hidden selection-field 
                if (option.value == language) {
                    selectField.selectedIndex = i;
                    // trigger change event afterwards to make google-lib translate this side
                    selectField.dispatchEvent(new Event('change'));
                    break;
                }
            }
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

</body>

</html>