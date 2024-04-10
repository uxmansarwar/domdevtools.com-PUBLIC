<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/login.auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- page title -->

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">


    <!-- External style sheet -->
    <link rel="stylesheet" href="https://domdevtools.com/themes/common/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://domdevtools.com/themes/startup/css/main.css?v=1.0.1">
    <link rel="stylesheet" href="https://domdevtools.com/themes/startup/css/icons.css?v=1.0.1">


    <!-- favicons -->
    <link rel="shortcut icon" type="image/png" href="https://domdevtools.com/images/favicon-32.png" />
    <link rel="icon" type="image/png" href="https://domdevtools.com/images/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://domdevtools.com/images/favicon-64.png" sizes="64x64" />
    <link rel="icon" type="image/png" href="https://domdevtools.com/images/favicon-192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" type="image/png" href="https://domdevtools.com/images/favicon-180.png" />
    <meta name="msapplication-TileImage" content="https://domdevtools.com/images/favicon-270.png" />




    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f5;
            /* background-color: #e0a800; */
            /* font-size: 14px; */
            font-size: 1rem;
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
            background-color: rgb(74, 145, 186) !important;
        }

        .site-color {
            background-color: rgb(74, 145, 186) !important;
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
    <!-- <script src="https://cdn.tiny.cloud/1/47gvojfe2maq908zytg4dumyiix63nscvxci3zkp50fczr8m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
</head>

<body>
    <div class="container-fluid bg-header">
        <div id="header" class="container">
            <div class="bg-header row">
                <!-- <div class="col-12">
                    <h1><a class="link-light" href="https://domdevtools.com" style="text-decoration: none;">DOM Dev Tools</a></h1>
                </div> -->
                <div class="col-12">
                    <nav class="navbar navbar-expand-md bg-header py-0 text-white" aria-label="Fourth navbar example">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            MENU
                        </button>

                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="https://domdevtools.com/admin/index.php" style="text-decoration: none;">Home</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link text-white" href="https://domdevtools.com/admin/insert-new-route.php" style="text-decoration: none;">Insert New Route</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link text-white" href="https://domdevtools.com/admin/route-list.php" style="text-decoration: none;">Route List</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link text-white" href="https://domdevtools.com/admin/cron-list.php" style="text-decoration: none;">Cron List</a>
                                </li>



                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Latest Tools</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                        <li>
                                            <a class="dropdown-item" href="https://domdevtools.com/remove-extra-spaces">Remove Extra Spaces</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="https://domdevtools.com/admin/logout.php" style="text-decoration: none;">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <!-- header close -->


    <style>
        .tools-list,
        a:link {
            text-decoration: none !important;
        }

        .tool_card:hover {
            background-color: rgb(74, 145, 186) !important;
            color: white !important;
            box-shadow: 10px 10px B9F3F3 !important;

        }

        .tool_card:hover a {
            color: white !important;


        }
    </style>


    <div id="working_area" class="container-fluid px-0">
        <div class="row px-2">