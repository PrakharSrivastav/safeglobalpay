<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div class="container-fluid">
    <form class="form-horizontal" id= "new_invoice_form" action="<?= site_url() ?>/vendor/send_invoice" method="post">
        <div class="row">
            <div class="padding-40 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label for="c_name" class="col-sm-3 control-label">Name * :</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $result[0]['c_name']; ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_email" class="col-sm-3 control-label">Email * :</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $result[0]['c_email']; ?>" class="form-control" disabled>
                    </div>
                </div>
                <input type="hidden" name="c_id" value = "<?php echo $result[0]['c_id']; ?>"/>
                <input type="hidden" name="c_email" value = "<?php echo $result[0]['c_email']; ?>"/>
                <input type="hidden" name="c_name" value = "<?php echo $result[0]['c_name']; ?>"/>
                <div class="form-group">
                    <label for="c_amount" class="col-sm-3 control-label"> Amount * :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="c_amount" name="c_amount" placeholder="Amount">
                        <?php echo form_error('c_amount'); ?>
                    </div>
                </div>
                <!--<div class="form-group">
                        <label for="c_service" class="col-sm-3 control-label"> Service * :</label>
                        <div class="col-sm-9">
                                <select class="form-control" id="c_service" name="c_service">
                                        <option value="0" <?php //echo set_select('c_service', '0', TRUE);  ?>>Product 1</option>
                                        <option value="1" <?php //echo set_select('c_service', '1');  ?>>Product 2</option>
                                        <option value="2" <?php //echo set_select('c_service', '2');  ?>>Product 3</option>
                                        <option value="3" <?php //echo set_select('c_service', '3');  ?>>Product 4</option>
                                        <option value="4" <?php //echo set_select('c_service', '4');  ?>>Product 5</option>
                                        <option value="5" <?php //echo set_select('c_service', '5');  ?>>Product 6</option>
                                        <option value="6" <?php //echo set_select('c_service', '6');  ?>>Product 7</option>
                                        <option value="7" <?php //echo set_select('c_service', '7');  ?>>Product 8</option>
                                        <option value="8" <?php //echo set_select('c_service', '8');  ?>>Product 9</option>
                                </select>
                <?php //echo form_error('c_service'); ?>
                        </div>
                </div>-->
                <div class="form-group">
                    <label for="c_desc" class="col-sm-3 control-label"> Details * :</label>
                    <div class="col-sm-9">
                        <textarea  class="form-control" rows=5 id="c_desc" name="c_desc" placeholder="Please provide description of service"><?php //echo set_value('c_desc', "", true); ?></textarea>
                        <?php echo form_error('c_desc'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-offset-3 col-lg-9 col-md-offset-3 col-md-9 col-sm-offset-3 col-sm-9">
                        <input  type="submit" id="send_invoice_btn" class="btn btn-primary btn-block" value="Send invoice to customer" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view("ayjoconsulting/common/footer")
?>
