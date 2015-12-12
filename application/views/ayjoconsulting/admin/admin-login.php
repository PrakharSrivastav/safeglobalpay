<?php $this->load->view("ayjoconsulting/common/header") ?>
<div class="container-fluid">

    <?php if (isset($message) && $message) { ?>
        <div class="padding-top-20 ">
            <div class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                <div class="alert alert-success alert-dismissible" align="center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    <?php } ?>	
    <div class="row">
        <div id="login-box"  class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <form id="login_form" action="<?= site_url() ?>/admin/login" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <label for="sgp_username" class="col-sm-2 control-label">Username: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sgp_username" id="sgp_username" placeholder="Username" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sgp_password" class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="sgp_password" id="sgp_password" placeholder="Password" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div align="center">
                        <?php
                        echo validation_errors();
                        if (isset($error))
                            echo $error;
                        ?>
                    </div>
                    <div>
                        <button type="submit" id="login_btn" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </div>
                    <div align="center" class="padding-top-10"><a href="#" style="color:blue;cursor:hand;" data-toggle="modal" data-target="#forgot_username"><i>Forgot Username ?</i></a></div>
                    <div align="center" ><a href="#" style="color:blue;cursor:hand;" data-toggle="modal" data-target="#myModal"><i>Forgot Password ?</i></a></div>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal"  style="padding-top:5%;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Reset Password <br /><small>   <i>(A confirmation link will be sent to your registered email address.)</i> </small></h4>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url() ?>/admin/forget_pw" method="post" role="form" id="reset_pass_form"class="form-horizontal">
                        <div class="form-group">
                            <label for="sgp_f_email" class="col-sm-4 control-label">Email: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="sgp_f_email" id="sgp_f_email" placeholder="Enter Your Registered Email-id"  required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sgp_f_password" class="col-sm-4 control-label">New Password: </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="sgp_f_password" id="sgp_f_password" placeholder="Enter New Password"  required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sgp_c_password" class="col-sm-4 control-label">Confirm Password: </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="sgp_c_password" id="sgp_c_password" placeholder="Confirm New Password"  required="required"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block" id="reset_pw_btn">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="forgot_username"  style="padding-top:5%;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Send Username <br /><small>   <i>(Your Username will be sent to your registered email address.)</i> </small></h4>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url() ?>/admin/resend_username" method="post" role="form" id="resend_username"class="form-horizontal">
                        <div class="form-group">
                            <label for="sgp_r_email" class="col-sm-3 control-label">Email: </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="sgp_r_email" id="sgp_r_email" placeholder="Enter Your Registered Email-id" required="required"/>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                                <label for="sgp_f_password" class="col-sm-4 control-label">Password: </label>
                                <div class="col-sm-8">
                                        <input type="password" class="form-control" name="sgp_f_password" id="sgp_f_password" placeholder="Enter New Password" />
                                </div>
                        </div> -->

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block" id="resend_username_btn">
                                Email Username
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->load->view("ayjoconsulting/common/footer") ?>
