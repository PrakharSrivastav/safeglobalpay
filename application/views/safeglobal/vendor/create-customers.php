<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation-vendor") ?>
<div class="container-fluid">
	<form class="form-horizontal" action="<?=base_url() ?>vendor/create_customer" method="post">
		<div class="row" id="vendor-create-form">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="c_name" class="col-sm-2 control-label">Name * :</label>
					<div class="col-sm-10">
						<input value="<?php echo set_value('c_name'); ?>" type="text" class="form-control" id="c_name" name="c_name" placeholder="Customer Name">
						<?php echo form_error('c_name'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_email" class="col-sm-2 control-label">Email * :</label>
					<div class="col-sm-10">
						<input value="<?php echo set_value('c_email'); ?>" type="email" class="form-control" id="c_email" name="c_email" placeholder="Customer Email (Unique Value)">
						<?php echo form_error('c_email'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_contact" class="col-sm-2 control-label">Number * :</label>
					<div class="col-sm-10">
						<input value="<?php echo set_value('c_contact'); ?>" type="text" class="form-control" id="c_contact" name="c_contact" placeholder="Contact Number">
						<?php echo form_error('c_contact'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_contact" class="col-sm-2 control-label">Alt Number:</label>
					<div class="col-sm-10">
						<input value="<?php echo set_value('c_alt_contact'); ?>" type="text" class="form-control" id="c_alt_contact" name="c_alt_contact" placeholder="Customer Alternate Contact Number">
						<?php echo form_error('c_alt_contact'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_amount" class="col-sm-2 control-label"> Amount * :</label>
					<div class="col-sm-10">
						<input value="<?php echo set_value('c_amount'); ?>" type="text" class="form-control" id="c_amount" name="c_amount" placeholder="Amount">
						<?php echo form_error('c_amount'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_service" class="col-sm-2 control-label"> Service * :</label>
					<div class="col-sm-10">
						<select class="form-control" id="c_service" name="c_service">
							<option value="0" <?php echo set_select('c_service', '0', TRUE); ?>>Product 1</option>
							<option value="1" <?php echo set_select('c_service', '1'); ?>>Product 2</option>
							<option value="2" <?php echo set_select('c_service', '2'); ?>>Product 3</option>
							<option value="3" <?php echo set_select('c_service', '3'); ?>>Product 4</option>
							<option value="4" <?php echo set_select('c_service', '4'); ?>>Product 5</option>
							<option value="5" <?php echo set_select('c_service', '5'); ?>>Product 6</option>
							<option value="6" <?php echo set_select('c_service', '6'); ?>>Product 7</option>
							<option value="7" <?php echo set_select('c_service', '7'); ?>>Product 8</option>
							<option value="8" <?php echo set_select('c_service', '8'); ?>>Product 9</option>
						</select>
						<?php echo form_error('c_service'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="c_desc" class="col-sm-2 control-label"> Details * :</label>
					<div class="col-sm-10">
						<textarea  class="form-control" id="c_desc" name="c_desc" placeholder="Please provide description of service"><?php echo set_value('c_desc',"",true); ?></textarea>
						<?php echo form_error('c_desc'); ?>
					</div>
				</div>
				<div class="form-group">
					<input  type="submit" class="btn btn-primary btn-block" value="Create Customer" />
				</div>
			</div>
		</div>
	</form>
</div>

<?php $this->load->view("safeglobal/common/footer")
?>