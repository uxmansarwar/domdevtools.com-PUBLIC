<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '../../../autoload.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">


    <link rel="canonical" href="<?= SITE_URL . '/' . $route['slug'] . ROUTE_END_WITH ?>">


    <!-- page title -->
    <title><?= $route['title'] . ' - ' . SITE_TITLE ?></title>



    <!-- Primary Meta Tags -->
    <meta name="title" content="<?= $route['title'] ?>">
    <meta name="keywords" content="<?= $route['meta_keywords'] ?>">
    <meta name="description" content="<?= $route['meta_desc'] ?>">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_URL . '/' . $route['slug'] . ROUTE_END_WITH ?>">
    <meta property="og:title" content="<?= $route['title'] ?>">
    <meta property="og:site_name" content="<?= SITE_NAME ?>" />
    <meta property="og:description" content="<?= $route['og_desc'] ?>">
    <meta property="og:image" content="<?= $route['og_img'] ?>">


    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= SITE_URL . '/' . $route['slug'] . ROUTE_END_WITH ?>">
    <meta property="twitter:title" content="<?= $route['title'] ?>">
    <meta property="twitter:description" content="<?= $route['twitter_desc'] ?>">
    <meta property="twitter:image" content="<?= $route['og_img'] ?>">



    <!-- External style sheet -->
    <link rel="stylesheet" href="<?= THEME_URL ?>/third_parties/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/main.css?v=<?= $VERSION ?>">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/icons.css?v=<?= $VERSION ?>">


    <!-- favicons -->
    <link rel="shortcut icon" type="image/png" href="<?= IMAGES_URL ?>/favicon-32.png" />
    <link rel="icon" type="image/png" href="<?= IMAGES_URL ?>/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= IMAGES_URL ?>/favicon-64.png" sizes="64x64" />
    <link rel="icon" type="image/png" href="<?= IMAGES_URL ?>/favicon-192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" type="image/png" href="<?= IMAGES_URL ?>/favicon-180.png" />
    <meta name="msapplication-TileImage" content="<?= IMAGES_URL ?>/favicon-270.png" />




    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f5;
            /* background-color: #e0a800; */
            font-size: 13px;
        }

        .btn:focus {
            outline: none;
            box-shadow: none;
        }

        .form-control:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        .bg-header {
            background-color: <?= $SITE_COLOR ?> !important;
        }

        .site-color {
            background-color: <?= $SITE_COLOR ?> !important;
            color: #f4f4f5 !important;
        }

        .bg-warning {
            background-color: #caa013 !important;
        }

        .bg-info {
            /* background-color: rgb(93 182 233) !important; */
            background-color: rgb(72 168 222) !important;
            color: #f4f4f5;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 0rem !important;
        }
    </style>
    <?php echo $header_script; ?>

    <!-- Google tag (gtag.js) -->
    <?php
    if (!$IS_LOCALHOST) {
    ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZD69CGHKW4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-ZD69CGHKW4');
        </script>
        <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6055810429995172" crossorigin="anonymous"></script> -->
    <?php } ?>
</head>

<body>
    <div class="container-fluid bg-header">
        <div id="header" class="container">
            <div class="bg-header row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md bg-header py-0 text-white" aria-label="Fourth navbar example">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            MENU
                        </button>

                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?= SITE_URL ?>" style="text-decoration: none;">Home</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?= SITE_URL ?>/social-media-sharer<?= ROUTE_END_WITH ?>" style="text-decoration: none;">Social Media Sharer</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?= SITE_URL ?>/bulk-email-composer<?= ROUTE_END_WITH ?>" style="text-decoration: none;">Bulk Email Composer</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?= SITE_URL ?>/google-search-link-generator<?= ROUTE_END_WITH ?>" style="text-decoration: none;">Google Search Link Generator</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Latest Tools</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                        <li>
                                            <a class="dropdown-item" href="<?= SITE_URL ?>/remove-extra-spaces<?= ROUTE_END_WITH ?>">Remove Extra Spaces</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <!-- header close -->