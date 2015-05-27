<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<title>Safe Global Pay</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Safeglobalpay">
		<meta name="keywords" content="online payment, payment, payment gateway, gateway, safeglobalpay">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/main.css">
		<!-- <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url(); ?>resources/js/vendor/modernizr-2.8.3.min.js"></script>
		<style>body {padding-top: 50px;padding-bottom: 20px;}</style>
	</head>
	<body>
		<!--[if lt IE 8]>
		    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		    			<span class="sr-only">Toggle navigation</span>
		    			<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand text-primary" href="<?php echo base_url(); ?>">SafeGlobalPay</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav navbar-right">
		              	<li><a href="#">About Us</a></li>
		              	<li><a href="#">Pricing</a></li>
		              	<li><a href="#">Contact Us</a></li>
		          	</ul>
		        </div><!--/.navbar-collapse -->
		    </div>
		</nav>
		<div style="min-height:30px"></div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="container carousel-main">
		        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			        <!-- Indicators -->
			        <ol class="carousel-indicators">
			            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			        </ol>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="<?php echo base_url(); ?>resources/img/car-1.png" style="height:400px;">
			            	<div class="carousel-caption row">
				            	<div class="col-lg-8">
				            		<div class="pull-left" style="color:black">Ultra safe payments</div><br />
				            		<div class="pull-left" style="color:black">Anytime, Anywhere</div>
				            	</div>	
			            	</div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url(); ?>resources/img/car-3.png" style="height:400px;">
			            	<div class="carousel-caption row">
				            	<div class="col-lg-8">
				            		<div class="pull-left" style="color:white">Accepting Credit Cards Online</div><br />
				            		<div class="pull-left" style="color:white">has never been this easy</div>
				            	</div>	
			            	</div>
			            </div>
			            <div class="item ">
			            	<img src="<?php echo base_url(); ?>resources/img/car-2.png" style="height:400px;">
			            	<div class="carousel-caption row">
				            	<div class="col-lg-8">
				            		<div class="pull-left" style="color:black">Keep Track of your Business</div>
				            		<div class="pull-left" style="color:black">with our intuitive merchant backend</div>
				            	</div>	
			            	</div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
		</div>
		<div class="container features">
		    <!-- Example row of columns -->
		    <div class="row">
		    	<div class="col-md-12">
		    	 	<h1 class="text-center feature-header"> Why SafeGlobalPay ? </h1>
		    		<p class="h3 text-center">Right from the very beginning, SafeGlobalPay was led by a vision of providing convenient and secure e-commerce options for small/medium merchants all around the world. To this day, our key principles of business are aimed at helping you realize your payments effectively and efficiently.</p>
		    	</div>
		    	<div class="col-md-12">
		    		<div class="col-md-4">
		            <h2 class="text-center">Affordability <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h2>
		            <p >
		            	SafeGlobalPay offers a simple pricing plan with low fees for services. We cater to both high and low risk merchants for their overall payment solutions.
					<br /><br /><br />
		            </p>
		            <p class="text-center">
		            	<a class="btn btn-default " href="#" role="button">View details &raquo;</a>
		            </p>
		        </div>
		        <div class="col-md-4">
		            <h2 class="text-center">Security <span class="glyphicon glyphicon-lock" aria-hidden="true"></h2>
		            <p >
		            	SafeGlobalPay understands not just your challenges but also the concerns of your customers. With the most modern safety protocols we ensure that all transactions are legit and secure. We ensure that making a payment online is just as safe as making a payment at a local store. 
		            </p>
		            <p class="text-center">
		            	<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
		            </p>
		        </div>
		        <div class="col-md-4">
		            <h2 class="text-center">Support <span class="glyphicon glyphicon-user" aria-hidden="true"></h2>
		            <p  >SafeGlobalPay is invested in your success. We help you set-up and start realizing payments in no time. And all the while our dedicated customer service team is ready to answer all your queries. <br /><br /></p>
		            <p class="text-center">
		            	<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
		            </p>
		        </div>
		    	</div>
		    </div>
		</div> 
		<div class="container-fluid" style="background:purple;color:white;min-height:500px">
			<div class="row">
				<div class="col-lg-6" style="margin-top:40px">
					<div class="h1 text-center">What we do ?</div>
					<p style="font-size:1.25em;">
						We believe that when you buy from a small/medium business, you are not helping a CEO buy a third vacation home.
You are helping a little girl get dance lessons, a little boy get his team jersey, a mom or dad put food on the table, a family pay a mortgage, or a student pay for college.
					</p>
				</div>
				<div class="col-lg-6" style="border-left: dotted 1px white; margin-top:40px">
					<div class="h1 text-center">Our Belief System</div>
					<p style="font-size:1.25em;">
						We help small/medium businesses CONNECT with their customers and enable Secure and Affordable Payment Processing.
At SafeGlobalPay, we are constantly led by a vision of providing convenient and secure e-commerce options for merchants all around the world. We catalyze the process of doing business over the internet and make it so simple that even Aunt Polly can sail through any transaction.
SafeGlobalPay not only helps you realize payments for your products/services but also takes care of the entire billing and invoicing, both to you and to your clients on your behalf.
					</p>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="text-center" style="margin-top:30px;font-size:1.25em;">
					Right from the very beginning, SafeGlobalPay was led by a vision of providing convenient and secure e-commerce options for small/medium merchants all around the world. To this day, our key principles of business are aimed at helping you realize your payments effectively and efficiently.
				</div>
			</div>
		</div>
		<footer style="background:black;color:white;min-height:450px;margin-bottom:-50px">
			<div class="row">
				<div class="col-lg-6" style="padding:0px 100px 0px 100px">
                <h2 class="text-center" style="margin-bottom:0px">Head Office</h2>
                <!-- <div  class="text-center"> -->
                	<p class="h3 text-center" style="margin-top:0px">Address line 1, City, State</p>
                	<br />
	                <ul class="h4" style="list-style: none;padding-left:200px">
	                    <li>
	                        <span class="glyphicon glyphicon-map-marker"></span>
	                        Adddress Line 2<br> Address line 3, 123456<br>City<br> State.<br>
	                    </li>
	                    <br>
	                    <li>
	                        <span class="glyphicon glyphicon-earphone"></span>
	                        Phone: +123-1233-112321 <br> International Line: +1-1231-1232-2213 
	                    </li>
	                </ul>
                <!-- </div> -->
            </div>
				<div class="col-lg-6" style="padding:0px 100px 0px 100px">
				<h2 class="text-center">Contact Us</h2>
					<form class="form-horizontal" style="margin-top:30px;">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-lg-2 col-sm-2  control-label">Name</label>
					    <div class="col-lg-8 col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Your Full Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-lg-2 col-sm-2 control-label">Email</label>
					    <div class="col-lg-8 col-sm-10">
					      <input type="email" class="form-control" id="inputPassword3" placeholder="Your Email Address">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-lg-2 col-sm-2 control-label">Message</label>
					    <div class="col-lg-8 col-sm-10">
					      <textarea class="form-control" rows="5" placeholder="Tell us how can we help you?"></textarea>
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <div class="col-lg-offset-2 col-lg-8 col-sm-10 ">
					      <button type="submit" class="btn btn-primary btn-block">Send Message</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
			<hr style="width:90%" />
		    <p class="text-center" style="font-size:1.5em">&copy; SafeGlobalPay 2015</p>
		</footer>
		<!-- /container -->        
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->  
		<script src="<?php echo base_url(); ?>resources/js/vendor/jquery-1.11.2.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>resources/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="<?php echo base_url(); ?>resources/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>resources/js/main.js"></script>
	</body>
</html>