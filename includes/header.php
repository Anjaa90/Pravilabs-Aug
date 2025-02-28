<?php include('includes\config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="layerdrops">
    <meta name="description"
        content="Experience convenience with PraviLabs' home blood collection and comprehensive full body health checkups. We are ICMR and NABH Accredited.">
    <link rel="canonical" href="https://pravilabs.in/" />

    <!-- Page Title -->
    <title>
        <?php echo $title ?>
    </title>
    <meta name="description" content="<?php echo $description ?> " />

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M3HGNMSL');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicons/SiteIcon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/SiteIcon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/SiteIcon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/SiteIcon.png">
    <link rel="manifest" href="assets/images/favicons/site.html">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/laboix-icons/style.css">
    <link rel="stylesheet" href="assets/css/laboix.css">

    <!-- Custom Styles -->
    <style>
        .blink-text {
            color: red;
            animation: blink 2s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1443950586278984');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1443950586278984&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>