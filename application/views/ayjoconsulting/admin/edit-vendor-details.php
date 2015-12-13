<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div class="container-fluid">
    <div class="padding-40 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php if ($result !== false) { ?>
            <form action="<?= site_url() . '/admin/update_vendor_detail/' . $result['v_id'] ?>" method="post" class="form-horizontal" id="editVendorForm">
                <div class="form-group">
                    <label for="v_name"> Username * :</label>
                    <?php echo form_error('v_name'); ?>
                    <input value="<?= $result['v_name'] ?>"  type="text" class="form-control" id="v_name" name="v_name" placeholder="Username (Unique Value)">
                </div>
                <div class="form-group">
                    <label for="v_email"> Email * :</label>
                    <?php echo form_error('v_email'); ?>
                    <input value="<?= $result['v_email'] ?>" type="email" class="form-control" id="v_email" name="v_email" placeholder="Email (Unique Value)">
                </div>
                <div class="form-group">
                    <label for="v_address"> Address:</label>
                    <?php echo form_error('v_address'); ?>
                    <input value="<?= $result['v_address'] ?>" type="text" class="form-control" id="v_address" name="v_address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="v_contact"> Contact Number * :</label>
                    <?php echo form_error('v_contact'); ?>
                    <input value="<?= $result['v_contact'] ?>" type="text" class="form-control" id="v_contact" name="v_contact" placeholder="Contact Number (eg 123456789)">
                </div>
                <div class="form-group">
                    <label for="v_alt_contact"> Alternate Contact Number:</label>
                    <?php echo form_error('v_alt_contact'); ?>
                    <input value="<?= $result['v_alt_contact'] ?>" type="text" class="form-control" id="v_alt_contact" name="v_alt_contact" placeholder="Alternate Contact Number (eg 123456789)">
                </div>
                <div class="form-group">
                    <label for="v_percent">SGP Service Charge (in %) * :</label>
                    <?php echo form_error('v_percent'); ?>
                    <input value="<?= $result['v_percent'] ?>" type="text" class="form-control" id="v_percent" name="v_percent" placeholder="Percentage Commission on each transaction (eg 15.50)">
                </div>
                <div class="form-group">
                    <label for="v_rolling_res"> Rolling reserve * (in %):</label>
                    <?php echo form_error('v_rolling_res'); ?>
                    <input value="<?= $result['v_rolling_res'] ?>" type="text" class="form-control" id="v_rolling_res" name="v_rolling_res" placeholder="Vendor Rolling Reserve (eg 12.00)">
                </div>
                <div class="form-group">
                    <label for="v_rolling_res_duration"> Rolling Reserve Duration * (in months):</label>
                    <?php echo form_error('v_rolling_res_duration'); ?>
                    <input value="<?= $result['v_rolling_res_duration'] ?>" type="text" class="form-control" id="v_rolling_res_duration" name="v_rolling_res_duration" placeholder="Vendor Rolling Reserve Duration (eg 3)">
                </div>
                <div class="form-group">
                    <label for="v_refund_penalty"> Refund Processing Fee * :</label>
                    <?php echo form_error('v_refund_penalty'); ?>
                    <input value="<?= $result['v_refund_penalty'] ?>" type="text" class="form-control" id="v_refund_penalty" name="v_refund_penalty" placeholder="Percentage Deduction on Refund (eg 15.50)">
                </div>
                <div class="form-group">
                    <label for="v_chargeback_penalty"> Chargeback Processing Fee * :</label>
                    <?php echo form_error('v_chargeback_penalty'); ?>
                    <input value="<?= $result['v_chargeback_penalty'] ?>" type="text" class="form-control" id="v_chargeback_penalty" name="v_chargeback_penalty" placeholder="Percentage Deduction on Chargeback (eg 15.50)">
                </div>
                <div class="form-group">
                    <label for="v_min_chargeback"> Min Chargeback Amount * :</label>
                    <?php echo form_error('v_min_chargeback'); ?>
                    <input value="<?php echo $result['v_min_chargeback']; ?>" type="text" class="form-control" id="v_min_chargeback" name="v_min_chargeback" placeholder="Minimum Chargeback Deduction in USD (eg 60.00)">
                </div>
                <div class="form-group">
                    <label for="v_payment_term"> Payment Terms * :</label>
                    <?php echo form_error('v_payment_term'); ?>
                    <!-- <input value="<?= $result['v_payment_term'] ?>" type="text" class="form-control" id="v_payment_term" name="v_payment_term" placeholder="Monthly , Weekly or Bi-Monthly"> -->
                    <select class="form-control" id="v_payment_term" name="v_payment_term">
                        <option value="0" <?php if (isset($result['v_payment_term']) && $result['v_payment_term'] == "0") echo "selected"; ?>>Weekly</option>
                        <option value="1" <?php if (isset($result['v_payment_term']) && $result['v_payment_term'] == "1") echo "selected"; ?>>Bi Monthly</option>
                        <option value="2" <?php if (isset($result['v_payment_term']) && $result['v_payment_term'] == "2") echo "selected"; ?>>Monthly</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="v_initial_reserve">Security Deposit (in USD) * :</label>
                    <?php echo form_error('v_initial_reserve'); ?>
                    <input value="<?= $result['v_initial_reserve'] ?>" type="text" class="form-control" id="v_initial_reserve" name="v_initial_reserve" placeholder="Security Deposit (eg 1500.00)">
                </div>

                <div class="form-group">
                    <label for="v_init_setup_reserve">Setup Fees (in USD) * :</label>
                    <?php echo form_error('v_init_setup_reserve'); ?>
                    <input value="<?= $result['v_init_setup_reserve'] ?>" type="text" class="form-control" id="v_init_setup_reserve" name="v_init_setup_reserve" placeholder="Setup Fees (eg 1500.00)">
                </div>

                <div class="form-group">
                    <label for="v_payment_date"> Payment Date :</label>
                    <?php echo form_error('v_payment_date'); ?>
                    <input value="<?= $result['v_payment_date'] ?>" type="text" class="form-control" id="v_payment_date" name="v_payment_date" placeholder="Payment Date">
                </div>
                <div class="form-group">
                    <label for="v_account_name"> Account Name * :</label>
                    <?php echo form_error('v_account_name'); ?>
                    <input value="<?= $result['v_account_name'] ?>" type="text" class="form-control" id="v_account_name" name="v_account_name" placeholder="Vendor's Account Name">
                </div>
                <div class="form-group">
                    <label for="v_account_num"> Account Number * :</label>
                    <?php echo form_error('v_account_num'); ?>
                    <input value="<?= $result['v_account_num'] ?>" type="text" class="form-control" id="v_account_num" name="v_account_num" placeholder="Vendor's Account Number">
                </div>
                <div class="form-group">
                    <label for="v_bank_name"> Bank Name * :</label>
                    <?php echo form_error('v_bank_name'); ?>
                    <input value="<?= $result['v_bank_name'] ?>" type="text" class="form-control" id="v_bank_name" name="v_bank_name" placeholder="Vendor's Bank Name">
                </div>
                <div class="form-group">
                    <label for="v_bank_code"> Bank IFSC Code :</label>
                    <?php echo form_error('v_bank_code'); ?>
                    <input value="<?= $result['v_bank_code'] ?>" type="text" class="form-control" id="v_bank_code" name="v_bank_code" placeholder="Vendor's Bank IFSC Code">
                </div>

                <div class="form-group">
                    <label for="v_bank_swift_code"> Bank Swift Code :</label>
                    <?php echo form_error('v_bank_swift_code'); ?>
                    <input value="<?= $result['v_bank_swift_code'] ?>" type="text" class="form-control" id="v_bank_swift_code" name="v_bank_swift_code" placeholder="Vendor's Bank Swift Code">
                </div>

                <div class="form-group">
                    <label for="v_bank_details"> Other Bank Details :</label>
                    <?php echo form_error('v_bank_details'); ?>
                    <textarea class="form-control" name="v_bank_details" id ="v_bank_details" rows=4 placeholder="Other bank details which are not captured above."><?= $result['v_bank_details'] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="button" id="editVendorButton" class="form-control btn btn-primary btn-block" value="Edit Vendor Details"/>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
<?php $this->load->view("ayjoconsulting/common/footer")
?>