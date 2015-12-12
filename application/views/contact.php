<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("common/header");
?>

<script type="text/javascript">
    $(document).ready(function () {



        // Generate a simple captcha
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }
        ;
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

        $('#defaultForm').formValidation({
            message: 'This value is not valid',
            fields: {
                contact_name: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide us your contact name'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a purpose for writing to us'
                        },
                        stringLength: {
                            min: 6,
                            max: 100,
                            message: 'Please provide more than 10 and less than 100 characters long'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a message body'
                        },
                        stringLength: {
                            min: 10,
                            max: 1500,
                            message: 'The message  must be more than 10 and less than 1500 characters long'
                        }
                    }
                },
                contact_name: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Please provide us your name'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9 .!@?-]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        different: {
                            field: 'contact_name',
                            message: 'The password cannot be the same as username'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                },
                captcha: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'You must agree with the terms and conditions'
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            e.preventDefault();
            error = $("#error_message");
            success = $("#success_message");
            //var formdata = new FormData($('#defaultForm'));
            $.ajax({
                url: "<?= site_url() ?>/home/contact_message",
                type: "POST",
                data: $('#defaultForm').serialize(),
                dataType: 'json',
                success: function (a, b, c) {
                    // Clear the form
                    $('#defaultForm').formValidation('resetForm', true);
                    // Regenerate the captcha

                    // console.log(data);
                    if (a == 1001) {
                        error.empty();
                        error.html("Please provide Your name");
                        error.show();
                        success.empty();
                        success.hide();
                    }
                    else if (a == 1002) {
                        error.empty();
                        error.html("Please provide Your email");
                        error.show();
                        success.empty();
                        success.hide();
                    }
                    else if (a == 1003) {
                        error.empty();
                        error.html("Please provide email subject");
                        error.show();
                        success.empty();
                        success.hide();
                    }
                    else if (a == 1004) {
                        error.empty();
                        error.html("Please provide us an email message");
                        error.show();
                        success.empty();
                        success.hide();
                    }
                    else if (a == "success") {
                        error.empty();
                        error.hide();
                        success.empty();
                        success.html("Your message is recieved successfully");
                        success.show();
                        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
                    }
                },
                failure: function (a, b, c) {
                    console.log(a);
                    console.log(b);
                    console.log(c);
                }

            });
        });
    });
</script>

<!-- Start Map -->
<!-- Start Map -->
<div class="clearfix"> &nbsp; </div>
<div class="big-title">
    <h1><strong>  AyJo Consulting </strong></h1>
</div>

<!-- End Map -->

<!-- End Map -->




<!-- Start Content -->
<div id="content">
    <!--<div style="overflow:hidden;height:450px;width:100%;max-width:100%;">
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.660897420441!2d-96.7193333!3d43.551110099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x878eb5a67aae4a8d%3A0xe5c905f7a030da68!2sAyJo+Consulting!5e0!3m2!1sen!2sin!4v1439450107231" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>-->

    <div class="clearfix"> &nbsp; </div>

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <!-- Classic Heading --> 
                <h4 class="classic-title"><span>Contact Us</span></h4>

                <!-- Start Contact Form -->
                <form id="defaultForm" method="post" class="form-horizontal" action="<?= site_url() ?>/home/contact_message">
                    <div class="alert alert-warning text-center" id="error_message"></div>
                    <div class="alert alert-success text-center" id="success_message"></div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control"  placeholder="Your Name" required id="contact_name" name="contact_name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Your Active Email Address" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text"  class="form-control" placeholder="Your purpose to contact us" id="subject"  name="subject">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="controls">
                            <textarea rows="7"  placeholder="Message" class="form-control" id="message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" id="captchaOperation"></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-danger" name="save" value="Save"> Send </button>
                    </div>
                </form>
                <!-- End Contact Form -->

            </div>

            <div class="col-md-4">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Information</span></h4>

                <!-- Some Info -->
                <p>We are always open to making new contacts, friends and folks to bounce cool ideas with. To get in touch with us for general information, to discuss particulars of a project or simply toss around some interesting ideas, please contact us at the details provided below . We will do our best to get back to you as soon as we can.  </p>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:10px;"></div>

                <!-- Info - Icons List -->
                <ul class="icons-list">
                    <li><i class="fa fa-globe">  </i> <strong>Address:</strong> Sioux Falls. South Dakota.</li>
                    <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@ayjoconsulting.com </li>
                    <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +1-888 208 2788 </li>
                </ul>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:15px;"></div>

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Working Hours</span></h4>

                <!-- Info - List -->
                <ul class="list-unstyled">
                    <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
                    <li><strong>Saturday</strong> - 9am to 2pm</li>
                    <li><strong>Sunday</strong> - Closed</li>
                </ul>

            </div>

        </div>

    </div>
</div>
<!-- End content -->
<script>
    $(document).ready(function () {
        error = $("#error_message");
        success = $("#success_message");
        error.empty();
        error.hide();
        success.empty();
        success.hide();
    });
</script>
<?php
$this->load->view("common/footer");
?>
