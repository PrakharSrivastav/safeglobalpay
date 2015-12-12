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
        <?php
        $this->session->sess_destroy();
        $data = array(
            "transaction_id" => $invoice,
            "vendor_id" => $vendor_id,
            "customer_id" => $customer_id
        );
        
        $this->session->set_userdata($data);
//        print_r($_SESSION);
        $x_login = "HCO-AYJO-683"; // Take from Payment Page ID in Payment Pages interface
        $transaction_key = "mh54c6_1snMaPMvERCcm"; // Take from Payment Pages configuration interface
        $x_amount = $amount;
        $x_currency_code = "USD"; // Needs to agree with the currency of the payment page
        srand(time()); // initialize random generator for x_fp_sequence
        $x_fp_sequence = rand(1000, 100000) + 123456;
        $x_fp_timestamp = time(); // needs to be in UTC. Make sure webserver produces UTC
        $hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $x_fp_timestamp . "^" . $x_amount . "^" . $x_currency_code;
        $x_fp_hash = hash_hmac('MD5', $hmac_data, $transaction_key);
        ?>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div style="width:100%; margin:0 auto;background:#fff;overflow-x:hidden;border:solid #00CCFF 1px">
            <div style="padding:10px;width:100%; height:auto; margin:auto; clear:both; background-color:#00CCFF;color:#FFF; font-size:30px; font-weight:500;line-height:40px;" align="center"><a href="<?= site_url() ?>" style="color:#FFF;text-decoration:none">AyjoConsulting</a> payments.
            </div>
            <div class="container-fluid" style="padding:10px 0px 50px 0px;">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <h2 align="center">Welcome to AyJo Consulting Payment Page</h2>
                    <p style="margin-top:50px">
                    <h3>Welcome to our payment page. We have identified following details about this transaction:</h3>
                    </p>
                    <div class="row table-responsive">
                        <table role="table" class="table table-bordered table-hover table-striped table-condensed">
                            <tbody>
                                <tr><td>Client Name : </td><td><?= html_escape($first_name); ?></td></tr>
                                <tr><td>Client Email : </td><td><?= html_escape($email); ?></td></tr>
                                <tr><td>Client Contact Number : </td><td><?= html_escape($phone_number); ?></td></tr>
                                <tr><td>Vendor Name : </td><td><?= html_escape($v_name); ?></td></tr>
                                <tr><td>Vendor Email : </td><td><?= html_escape($v_email); ?></td></tr>
                                <tr><td>Invoice Number : </td><td><?= html_escape($invoice); ?></td></tr>
                                <tr><td>Invoice Amount : </td><td><?= html_escape($amount); ?></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <br /><br />
                    <p class='h5' style="margin-top:50px;margin-bottom:10px;">Clicking on the Pay now button will direct you to a secured server to initiate your payment.</p>
                    <div id="cp65e726facf" style="margin: 10px 0" onclick="document.getElementById('pay_now_form_58594022ea').submit()">
                        <form action="https://demo.globalgatewaye4.firstdata.com/pay" id="pay_now_form_58594022ea" method="post">
                            <input name="x_login" type="hidden" value="<?= $x_login; ?>" />
                            <input name="x_show_form" type="hidden" value="PAYMENT_FORM" />
                            <input name="x_fp_sequence" type="hidden" value="<?= $x_fp_sequence; ?>" />
                            <input name="x_fp_hash" type="hidden" value="<?= $x_fp_hash; ?>" />
                            <input name="x_amount" type="hidden" value="<?= $x_amount; ?>" />
                            <input name="x_fp_timestamp" type="hidden" value="<?= $x_fp_timestamp; ?>" />
                            <input name="x_currency_code" type="hidden" value="USD" />
                            <input name="x_invoice_num" type="hidden" value="<?= $invoice; ?>" />
                            <input name="x_test_request" type="hidden" value="TRUE" />
                            <input name="x_relay_response" type="hidden" value="" />
                            <input name="donation_prompt" type="hidden" value="" />
                            <input name="x_request_hash_i" value="<?= $invoice; ?>" type="hidden"> 
                            <input name="x_po_num" value="<?= $customer_id; ?>" type="hidden"> 
                            <input name="x_request_hash_c" value="<?= $customer_id; ?>" type="hidden"> 
                            <input name="x_request_hash_v" value="<?= $vendor_id ; ?>" type="hidden">
                            <input name="button_code" type="hidden" value="Pay Now Ayjo Consulting DEMO0537 Pa" />
                            <div class="cpwrap">
                                <button type="button">Pay Now</button>
                            </div>
                        </form>
                    </div>
                    <style type="text/css">div#cp65e726facf{width: 200px; background-color: #00CCFF;}div#cp65e726facf:hover{cursor: pointer}div#cp65e726facf * {background-color: #00CCFF;}div#cp65e726facf form{margin:0; padding:0;text-align:center}div#cp65e726facf div.cpwrap {width: 90%;border:0;margin:0 auto;padding: 0px; background-color: #00CCFF}div#cp65e726facf button{width: 95%;border:0;margin:0;padding: 3px 0; background-color: #00CCFF;text-align: center; color: #FFFFFF; }div#cp65e726facf:hover button {text-decoration: underline}div#cp65e726facf button:focus,div#cp65e726facf button:visited,div#cp65e726facf button:active{border:none;outline: none}div#cp65e726facf button {font-size: 16px}div#cp65e726facf {border: 2px solid #00CCFF}</style>
                    <p class='h5' style="margin-bottom:70px;margin-top:10px;">If you do not wish to make the payment, please close the browser.</p>
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