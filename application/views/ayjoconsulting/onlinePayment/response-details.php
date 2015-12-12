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
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">>-->
    </head>
    <body  style="background-color:#fff;">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div style="width:100%; margin:0 auto;background:#fff;overflow-x:hidden;border:solid #00CCFF 1px">
            <div style="padding:10px;width:100%; height:auto; margin:auto; clear:both; background-color:#00CCFF;color:#FFF; font-size:30px; font-weight:500;line-height:40px;" align="center"><a href="<?= site_url() ?>" style="color:#FFF;text-decoration:none">AyjoConsulting</a> payments.
            </div>
            <div class="container-fluid" style="padding:10px 0px 50px 0px;">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <h1>Payment Status</h1>
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Response Field</th><th>Response Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Invoice Number</td><td><?= html_escape($this->input->post('x_invoice_num')); ?></td></tr>
                            <tr><td>Transaction Approved</td><td><?= html_escape($this->input->post('Transaction_Approved')); ?></td></tr>
                            <tr><td>Transaction Status</td><td><?= html_escape($this->input->post('x_response_reason_text')); ?></td></tr>
                            <tr><td>Transaction Amount</td><td>$ <?= html_escape($this->input->post('x_amount')); ?></td></tr>
                            <tr><td>Transaction Card Type</td><td><?= html_escape($this->input->post('TransactionCardType')); ?></td></tr>
                            <tr><td>Payment Gateway Transaction Id</td><td><?= html_escape($this->input->post('x_trans_id')); ?></td></tr>
                            <tr><td>Client Number</td><td><?= html_escape($this->input->post('x_request_hash_c')); ?></td></tr>
                            <tr><td>Client Address</td><td><?= html_escape($this->input->post('x_address')); ?></td></tr>
                            <tr><td>Client City</td><td><?= html_escape($this->input->post('x_city')); ?></td></tr>
                            <tr><td>Client State</td><td><?= html_escape($this->input->post('x_state')); ?></td></tr>
                            <tr><td>Client ZipCode</td><td><?= html_escape($this->input->post('x_zip')); ?></td></tr>
                            <tr><td>Client IP</td><td><?= html_escape($this->input->post('Client_IP')); ?></td></tr>
                            <tr><td>Transaction Summary</td><td><div><?= str_replace(array("<br/>AYJOCONSULTING", "<br/>4001 S BENJAMEN DR", "<br/>SIOUX FALLS, SD 57103", "<br/>United States","<br/>WWW.AYJOCONSULTING.COM"), "", str_replace(array("\n\n", "\n"), "<br/>", trim($this->input->post('exact_ctr')))); ?></div></td></tr>
                        </tbody>
                    </table>
                    <div class="h4 text-center"> For any confusion regarding this payment, please mail us the query along with your invoice number</div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both; border-top:solid 2px #00CCFF; margin:0 auto; padding:0px 0px 0px 0px; width:100%;"></div>
    <div style="width:100%; height:auto; border:solid 1px #00CCFF; margin:0px 0px 0px 0px; padding:0px 0px 0px 0px; border-radius:0px 0px 5px 5px; background:#00CCFF;">
        <div style="width:100%; height:30px; background:#00CCFF;color:#FFF;line-height:30px; margin:0 auto; font-size:17px; font-weight:500;" align="center">&copy; <a href="<?php echo base_url(); ?>#contact" style="color:#FFF; text-decoration:none;" target="_blank">AyjoConsulting</a>
            <div style="clear:both;"></div>
            <div style="font-size:15px;font-weight:500;text-align:center;background:#00CCFF">
                <a href="<?php echo site_url(); ?>" style="color:#FFF; text-decoration:none;" target="_blank">Home</a> | <a href="<?php echo site_url() . '/home/services'; ?>" style="color:#FFF; text-decoration:none;" target="_blank">Services</a> | <a href="<?php echo site_url() . '/home/pricing'; ?>" style="color:#FFF; text-decoration:none;" target="_blank">Pricing</a> | <a href="<?php echo site_url() . '/home/contact'; ?>" style="color:#FFF; text-decoration:none;" target="_blank">Contact</a> | <a href="<?php echo site_url(); ?>/admin/" style="color:#FFF; text-decoration:none;" target="_blank">Login</a>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
    </div>
    <div style=" clear:both;"></div>
</div>
</body>
</html>