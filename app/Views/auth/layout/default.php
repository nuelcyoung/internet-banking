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
    <div class="page-wrapper">
        <?= $this->renderSection('content') ?>
    </div>
    <script>
        setTimeout(function() {
            $('.error-message').fadeOut('fast');
            $('.success-message').fadeOut('fast');
        }, 6000);
    </script>


    <!-- JAVASCRIPT -->

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script> <!-- password addon init -->
    <script src="assets/js/pages/pass-addon.init.js"></script>
    <!-- two-step-verification js -->
    <script src="assets/js/pages/two-step-verification.init.js"></script>
    <script src="<?= site_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
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