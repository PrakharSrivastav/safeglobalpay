<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
    <head>
        <!-- Basic -->
        <title>AyJo Consulting | <?php echo $title ?></title>
        <!-- Define Charset -->
        <meta charset="utf-8">
        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Page Description and Author -->
        <meta name="description" content="AyJo Consulting - Responsive HTML5 Template">
        <meta name="author" content="iThemesLab">
        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.min.css" type="text/css" media="screen">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>css/font-awesome.min.css" type="text/css" media="screen">
        <!-- AyJo Consulting CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/style.css" media="screen">
        <!-- Responsive CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/responsive.css" media="screen">
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/animate.css" media="screen">
        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/colors/pink.css" title="pink" media="screen" />

        <link rel="stylesheet" href="<?= base_url() ?>dist/css/formValidation.css"/>


        <!-- AyJo Consulting JS  -->
        <script type="text/javascript" src="<?= base_url() ?>js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/modernizrr.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/nivo-lightbox.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.appear.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/count-to.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.textillate.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.lettering.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.easypiechart.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/mediaelement-and-player.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/script.js"></script>


        <script type="text/javascript" src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>dist/js/formValidation.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>dist/js/framework/bootstrap.js"></script>

<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <!-- Full Body Container -->
        <div id="container">
            <!-- Start Header Section --> 
            <div class="hidden-header"></div>
            <header class="clearfix">
                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker"></i> Sioux Falls. South Dakota </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o"></i> info@ayjoconsulting.com</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-phone"></i> +1-888 208 2788</a>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .top-bar -->
                <!-- End Top Bar -->
                <!-- Start  Logo & Naviagtion  -->
                <div class="navbar navbar-default navbar-top">
                    <div class="container">
                        <div class="navbar-header">
                            <!-- Stat Toggle Nav Link For Mobiles -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- End Toggle Nav Link For Mobiles -->
                            <a class="navbar-brand" href="<?= site_url() ?>"> 
                                AyJo Consulting
                                <!-- <img alt="" src="images/margo.png"> -->
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Stat Search -->
                            <!--    <div class="search-side">
                                    <a href="#" class="show-search"><i class="fa fa-search"></i></a>
                                    <div class="search-form">
                                        <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                            <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                        </form>
                                    </div>
                                </div>-->
                            <!-- End Search -->
                            <!-- Start Navigation List -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    if ($active == "home_page")
                                        echo "<a class='active' href='" . site_url() . "'>Home</a>";
                                    else
                                        echo "<a  href='" . site_url() . "'>Home</a>";
                                    ?>
                                </li>

                                <li>
                                    <?php
                                    if ($active == "services")
                                        echo "<a class='active' href='" . site_url() . "/home/services'>Services</a>";
                                    else
                                        echo "<a  href='" . site_url() . "/home/services'>Services</a>";
                                    ?>
                                </li>
                                <!-- <li>
                                    <a href="404.html">404 Page</a>
                                </li> -->
                                <li>
                                    <?php
                                    if ($active == "pricing")
                                        echo "<a class='active' href='" . site_url() . "/home/pricing'>Pricing</a>";
                                    else
                                        echo "<a  href='" . site_url() . "/home/pricing'>Pricing</a>";
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    if ($active == "contact")
                                        echo "<a class='active' href='" . site_url() . "/home/contact'>Contact</a>";
                                    else
                                        echo "<a  href='" . site_url() . "/home/contact'>Contact</a>";
                                    ?>
                                </li>
                            </ul>
                            <!-- End Navigation List -->
                        </div>
                    </div>
                </div>
                <!-- End Header Logo & Naviagtion -->
            </header>

            <!-- End Header Section -->