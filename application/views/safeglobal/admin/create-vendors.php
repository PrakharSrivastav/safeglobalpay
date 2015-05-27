<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
<div class="container-fluid">
	<form class="form" action="<?=base_url()?>admin/create_vendor" method="post" id="vendorCreateForm">
		<div class="row padding-top-50" >
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="v_name"> Username * :</label>
					<?php echo form_error('v_name'); ?>
					<input value="<?php echo set_value('v_name'); ?>" type="text" class="form-control" id="v_name" name="v_name" placeholder="Username (Unique Value)">
				</div>
				<div class="form-group">
					<label for="v_email"> Email * :</label>
					<?php echo form_error('v_email'); ?>
					<input value="<?php echo set_value('v_email'); ?>" type="email" class="form-control" id="v_email" name="v_email" placeholder="Email (Unique Value)">
				</div>
				<div class="form-group">
					<label for="v_pass"> Password * :</label>
					<?php echo form_error('v_pass'); ?>
					<input value="<?php echo set_value('v_pass'); ?>" type="text" class="form-control" id="v_pass" name="v_pass" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="c_pass"> Confirm Password * :</label>
					<?php echo form_error('c_pass'); ?>
					<input value="<?php echo set_value('c_pass'); ?>" type="text" class="form-control" id="c_pass" name="c_pass" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<label for="v_addr"> Address:</label>
					<?php echo form_error('v_addr'); ?>
					<input value="<?php echo set_value('v_addr'); ?>" type="text" class="form-control" id="v_addr" name="v_addr" placeholder="Address">
				</div>
				<div class="form-group">
					<label for="v_cont"> Contact Number * :</label>
					<?php echo form_error('v_cont'); ?>
					<input value="<?php echo set_value('v_cont'); ?>" type="text" class="form-control" id="v_cont" name="v_cont" placeholder="Contact Number (eg 123456789)">
				</div>
				<div class="form-group">
					<label for="v_alt_cont"> Alternate Contact Number:</label>
					<?php echo form_error('v_alt_cont'); ?>
					<input value="<?php echo set_value('v_alt_cont'); ?>" type="text" class="form-control" id="v_alt_cont" name="v_alt_cont" placeholder="Alternate Contact Number (eg 123456789)">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				
				<div class="form-group">
					<label for="v_percent"> Percentage Commission (in %) * :</label>
					<?php echo form_error('v_percent'); ?>
					<input value="<?php echo set_value('v_percent'); ?>" type="text" class="form-control" id="v_percent" name="v_percent" placeholder="Percentage Commission on each transaction (eg 15.50)">
				</div>
				<div class="form-group">
					<label for="v_reser"> Rolling reserve * (in USD):</label>
					<?php echo form_error('v_reser'); ?>
					<input value="<?php echo set_value('v_reser'); ?>" type="text" class="form-control" id="v_reser" name="v_reser" placeholder="Vendor Rolling Reserve (eg 1500.00)">
				</div>
				<div class="form-group">
					<label for="v_time"> Rolling Reserve Duration * (in months):</label>
					<?php echo form_error('v_time'); ?>
					<input value="<?php echo set_value('v_time'); ?>" type="text" class="form-control" id="v_time" name="v_time" placeholder="Vendor Rolling Reserve Duration (eg 3)">
				</div>
				<div class="form-group">
					<label for="v_refund"> Refund Penalty Percentage * :</label>
					<?php echo form_error('v_refund'); ?>
					<input value="<?php echo set_value('v_refund'); ?>" type="text" class="form-control" id="v_refund" name="v_refund" placeholder="Percentage Deduction on Refund (eg 15.50)">
				</div>
				<div class="form-group">
					<label for="v_chargeback"> Chargeback Penalty Percentage * :</label>
					<?php echo form_error('v_chargeback'); ?>
					<input value="<?php echo set_value('v_chargeback'); ?>" type="text" class="form-control" id="v_chargeback" name="v_chargeback" placeholder="Percentage Deduction on Chargeback (eg 15.50)">
				</div>
				<div class="form-group">
					<label for="v_cont"> Payment Terms * :</label>
					<?php echo form_error('v_payment_term'); ?>
					<!-- <input value="<?php echo set_value('username'); ?>" type="text" class="form-control" id="v_cont" name="v_cont" placeholder="Mobile Number"> -->
					<select class="form-control" id="v_payment_term" name="v_payment_term">
						<option value="0" <?php echo set_select('v_payment_term', 'one', TRUE); ?>>Weekly</option>
						<option value="1" <?php echo set_select('v_payment_term', 'one'); ?>>Bi Monthly</option>
						<option value="2" <?php echo set_select('v_payment_term', 'one'); ?>>Monthly</option>
					</select>
				</div>
				<div class="form-group">
					<label for="v_init_reserve"> Initial Reserve (in USD) * :</label>
					<?php echo form_error('v_init_reserve'); ?>
					<input value="<?php echo set_value('v_init_reserve'); ?>" type="text" class="form-control" id="v_init_reserve" name="v_init_reserve" placeholder="Initial Security charged to Vendor (eg 1500.00)">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				
				<div class="form-group">
					<label for="v_payment_date"> Payment Date :</label>
					<?php echo form_error('v_payment_date'); ?>
					<input value="<?php echo set_value('v_payment_date'); ?>" type="text" class="form-control" id="v_payment_date" name="v_payment_date" placeholder="Payment Date">
				</div>
				<div class="form-group">
					<label for="v_account_name"> Account Name * :</label>
					<?php echo form_error('v_account_name'); ?>
					<input value="<?php echo set_value('v_account_name'); ?>" type="text" class="form-control" id="v_account_name" name="v_account_name" placeholder="Vendor's Account Name">
				</div>
				<div class="form-group">
					<label for="v_account_num"> Account Number * :</label>
					<?php echo form_error('v_account_num'); ?>
					<input value="<?php echo set_value('v_account_num'); ?>" type="text" class="form-control" id="v_account_num" name="v_account_num" placeholder="Vendor's Account Number">
				</div>
				<div class="form-group">
					<label for="v_bank_name"> Bank Name * :</label>
					<?php echo form_error('v_bank_name'); ?>
					<input value="<?php echo set_value('v_bank_name'); ?>" type="text" class="form-control" id="v_bank_name" name="v_bank_name" placeholder="Vendor's Bank Name">
				</div>
				<div class="form-group">
					<label for="v_bank_code"> Bank Code :</label>
					<?php echo form_error('v_bank_code'); ?>
					<input value="<?php echo set_value('v_bank_code'); ?>" type="text" class="form-control" id="v_bank_code" name="v_bank_code" placeholder="Vendor's Bank Code">
				</div>
				<div class="form-group">
					<label for="v_bank_details"> Other Bank Details :</label>
					<?php echo form_error('v_bank_details'); ?>
					<textarea class="form-control" name="v_bank_details" id ="v_bank_details" rows=4 placeholder="Other bank details which are not captured above."><?php echo set_value('v_bank_details'); ?></textarea>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<input  type="button" id="createVendorButton" class="btn btn-primary btn-block" value="Create Vendor" />
				</div>
			</div>
		</div>
	</form>

</div>

<?php $this->load->view("safeglobal/common/footer")
?>