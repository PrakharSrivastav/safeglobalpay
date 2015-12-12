<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div class="container-fluid">
    <div class="padding-40 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php if ($result !== false) { ?>
            <form action="<?= site_url() . '/vendor/update_customer_detail/' . $result['c_id'] ?>" id="edit_customer_form" method="post" class="form">
                <div class="form-group">
                    <label for="c_email"> Customer Name * :</label>
                    <?php echo form_error('c_name'); ?>
                    <input value="<?=html_escape( $result['c_name']) ?>"  type="text" class="form-control" id="c_name" name="c_name" placeholder="Customer Name">
                </div>
                <div class="form-group">
                    <label for="c_email"> Customer Email * :</label>
                    <?php echo form_error('c_email'); ?>
                    <input value="<?=html_escape( $result['c_email']) ?>"  type="email" class="form-control" id="c_email" name="c_email" placeholder="Customer Email">
                </div>
                <div class="form-group">
                    <label for="c_contact"> Customer Contact * :</label>
                    <?php echo form_error('c_contact'); ?>
                    <input value="<?=html_escape( $result['c_contact']) ?>"  type="text" class="form-control" id="c_contact" name="c_contact" placeholder="Customer Contact Number">
                </div>
                <div class="form-group">
                    <label for="c_alt_contact"> Customer Alternate Contact :</label>
                    <?php echo form_error('c_alt_contact'); ?>
                    <input value="<?=html_escape( $result['c_alt_contact']) ?>"  type="text" class="form-control" id="c_alt_contact" name="c_alt_contact" placeholder="Customer Alternate Contact Number">
                </div>
<!--                <div class="form-group">
                    <label for="c_amount"> Customer Amount * :</label>
                    <?php// echo form_error('c_amount'); ?>
                    <input value="<?php //echo html_escape( $result['c_amount']) ?>"  type="text" class="form-control" id="c_amount" name="c_amount" placeholder="Amount eg 215.50">
                </div>-->
                <div class="form-group">
                    <label for="c_service"> Service Provided * :</label>
                    <?php echo form_error('c_service'); ?>
                    <input value="<?=html_escape( $result['c_service']) ?>"  type="text" class="form-control" id="c_service" name="c_service" placeholder="Service offered to customer">
                </div>
                <div class="form-group">
                    <label for="c_description"> Service Description * :</label>
                    <?php echo form_error('c_description'); ?>
                    <input value="<?=html_escape( $result['c_description']) ?>"  type="text" class="form-control" id="c_description" name="c_description" placeholder="Service Description">
                </div>
                <input id="update_customer_btn" type="submit" class="btn btn-primary btn-block" value="Update Customer Details"/>
            </form>
        <?php } ?>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>