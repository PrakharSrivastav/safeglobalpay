<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
    <head>
        <!-- Basic -->
        <title>Page Not Found</title>
        <!-- Define Charset -->
        <meta charset="utf-8">
        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Page Description and Author -->
        <meta name="description" content="Margo - Responsive HTML5 Template">
        <meta name="author" content="iThemesLab">
        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="http://ayjoconsulting.com/asset/css/bootstrap.min.css" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="http://ayjoconsulting.com/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="http://ayjoconsulting.com/css/colors/blue.css" media="screen">
        <!-- Margo JS  -->
        <script type="text/javascript" src="http://ayjoconsulting.com/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://ayjoconsulting.com/js/modernizrr.js"></script>
        <script type="text/javascript" src="http://ayjoconsulting.com/asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ayjoconsulting.com/js/script.js"></script>
<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <!-- Container -->
        <div id="container">
            <!-- Start Header -->
            <div class="hidden-header"></div>
            <!-- Start Content -->
            <div id="content">
                <div class="container">
                    <div class="page-content">
                        <div class="error-page">
                            <h3><?php echo $heading; ?></h3>
                            <!-- <h4>File not Found</h4> -->
                            <p><?php echo $message; ?></p>
                            <div class="text-center"><a href="http://ayjoconsulting.com/index.php/" class="btn-system btn-small">Back To Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <!-- End Container -->
        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        <div id="loader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
</body>
</html>