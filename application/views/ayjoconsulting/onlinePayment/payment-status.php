<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html  class="no-js" lang="en">
<head>
    <meta charset="utf-8">
	<title>Ayjo Consulting</title>
   <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="AyjoConsulting">
	<meta name="keywords" content="online payment, payment, payment gateway, gateway, AyjoConsulting">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/secure.submit-1.0.2.js"></script> 
	-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/main.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'> -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url(); ?>resources/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/vendor/jquery-1.11.2.min.js"></script>
	<!--<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>resources/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>-->	
	<script src="<?php echo base_url(); ?>resources/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/main.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/securesubmit/secure.submit-1.0.2.js"></script>
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">>-->
</head>
<body  style="background-color:#fff;">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div style="width:100%; margin:0 auto;background:#fff;overflow-x:hidden;border:solid #00CCFF 1px">
          <div style="width:100%; height:auto; margin:auto; clear:both; background-color:#00CCFF;color:#FFF; font-size:20px; font-weight:500;line-height:40px;" align="center"><a href="<?=base_url()?>" style="color:#FFF;text-decoration:none">AyjoConsulting</a> payments.
	</div>
	<br />
	<div class="container-fluid" style="padding:10px 0px 50px 0px;">
		<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
			<?php if($transaction['tr_status']=='1') {?>
			<div  class="h4 alert alert-info"><?=html_escape($status)?></div>
			<?php }else if($transaction['tr_status']=='2') {?>
			<div  class="h4 alert alert-danger"><?=html_escape($status)?></div>
			<?php } ?>
			<div class="h5 text-primary">Please note your transaction details below: </div>
			<br/>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-condensed">
					<tbody>
						<tr><td>Payment From</td><td><?=html_escape($customer['c_name'])." (".html_escape($customer['c_email']).") "?></td></tr>
						<tr><td>Payment To</td><td><?=html_escape($vendor['v_name'])." (".html_escape($vendor['v_email']).") "?></td></tr>
						<tr><td>Transaction Amount</td><td>$<?=html_escape($transaction['tr_amount'])?></td></tr>
						<tr><td>Invoice Number</td><td><?=html_escape($transaction['tr_id']);?></td></tr>
						<tr><td>Transaction-Id</td><td><?=html_escape($transaction['hps_tr_id'])?></td></tr>
						<tr><td>Transaction Status</td><td><?=html_escape($message)?></td></tr>
						<tr><td>Response Text</td><td><?=html_escape($transaction['hps_res_text'])?></td></tr>
						<tr><td>Response Code</td><td><?=html_escape($transaction['hps_res_code'])?></td></tr>
					</tbody>
				</table>
			</div>
			<br/><br/><br/>
			<div class="h4 text-center"> For any confusion regarding this payment, please mail us the query along with your invoice number</div>
		</div>
		<br/>
	</div>
	<br/>
	</div>
	<div style="clear:both; border-top:solid 2px #00CCFF; margin:0 auto; padding:0px 0px 0px 0px; width:100%;"></div>
   <div style="width:100%; height:auto; border:solid 1px #00CCFF; margin:0px 0px 0px 0px; padding:0px 0px 0px 0px; border-radius:0px 0px 5px 5px; background:#00CCFF;">
   <div style="width:100%; height:30px; background:#00CCFF;color:#FFF;line-height:30px; margin:0 auto; font-size:17px; font-weight:500;" align="center">&copy; <a href="<?php echo site_url(); ?>/home/contact" style="color:#FFF; text-decoration:none;" target="_blank">AyjoConsulting</a>
   <div style="clear:both;"></div>
	<div style="font-size:15px;font-weight:500;text-align:center;background:#00CCFF">
      <a href="<?php echo site_url(); ?>" style="color:#FFF; text-decoration:none;" target="_blank">Home</a> | <a href="<?php echo site_url(); ?>/home/services" style="color:#FFF; text-decoration:none;" target="_blank">Services</a> | <a href="<?php echo site_url(); ?>/home/pricing" style="color:#FFF; text-decoration:none;" target="_blank">Pricing</a> | <a href="<?php echo site_url(); ?>/home/contact" style="color:#FFF; text-decoration:none;" target="_blank">Contact</a> | <a href="<?php echo site_url(); ?>/admin/" style="color:#FFF; text-decoration:none;" target="_blank">Login</a>
	</div>
   </div>
   <div style="clear:both;"></div>
   <div style="clear:both;"></div>
   </div>
   <div style=" clear:both;"></div>
   </div>
</body>
</html>
