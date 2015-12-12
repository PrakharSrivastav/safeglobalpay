<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div class="container-fluid">
    <form class="form-horizontal" id= "create_vendor_form" action="<?= site_url() ?>/vendor/create_customer" method="post">
        <div class="row" id="vendor-create-form">
            <div class="padding-40 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label for="c_name" class="col-sm-3 control-label">Name * :</label>
                    <div class="col-sm-9">
                        <input value="<?php echo set_value('c_name'); ?>" type="text" class="form-control" id="c_name" name="c_name" placeholder="Customer Name">
                        <?php echo form_error('c_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_email" class="col-sm-3 control-label">Email * :</label>
                    <div class="col-sm-9">
                        <input value="<?php echo set_value('c_email'); ?>" type="email" class="form-control" id="c_email" name="c_email" placeholder="Customer Email (Unique Value)">
                        <?php echo form_error('c_email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_contact" class="col-sm-3 control-label">Number * :</label>
                    <div class="col-sm-9">
                        <input value="<?php echo set_value('c_contact'); ?>" type="text" class="form-control" id="c_contact" name="c_contact" placeholder="Contact Number">
                        <?php echo form_error('c_contact'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_alt_contact" class="col-sm-3 control-label">Alt Number:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo set_value('c_alt_contact'); ?>" type="text" class="form-control" id="c_alt_contact" name="c_alt_contact" placeholder="Customer Alternate Contact Number">
                        <?php echo form_error('c_alt_contact'); ?>
                    </div>
                </div>

                <input value="0.00" type="hidden" class="form-control" id="c_amount" name="c_amount" placeholder="Amount">
                <input value="Online Consulting" type="hidden" class="form-control" id="c_service" name="c_service" placeholder="Amount">

                <div class="form-group">
                    <label for="c_desc" class="col-sm-3 control-label"> Details * :</label>
                    <div class="col-sm-9">
                        <textarea  class="form-control" id="c_desc" name="c_desc" placeholder="Please provide description of service"><?php echo set_value('c_desc', "", true); ?></textarea>
                        <?php echo form_error('c_desc'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-offset-3 col-lg-9 col-md-offset-3 col-md-9 col-sm-offset-3 col-sm-9">
                        <input  type="submit" id="create_vendor_btn" class="btn btn-primary btn-block" value="Create Customer" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view("ayjoconsulting/common/footer")
?>
