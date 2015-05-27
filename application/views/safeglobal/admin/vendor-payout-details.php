<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
<div class="container-fluid">
	<div class="row padding-top-50">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
			<form class="form-horizontal" action="<?=base_url().'admin/process_vendor_payout/'.$v_id?>" method="post">
				<div class="form-group">
					<label for="transaction_amount" class="col-sm-2 control-label">Payout Amount (USD)</label>
					<div class="col-sm-10">
						<?php echo form_error('transaction_amount'); ?>
						<input value="<?php echo set_value('transaction_amount'); ?>" type="text" class="form-control" name="transaction_amount" id="transaction_amount" placeholder="eg 100.00">
					</div>
				</div>
				<div class="form-group">
					<label for="transaction_description" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-10">
						<?php echo form_error('transaction_description'); ?>
						<textarea name="transaction_description" rows="5"  id="transaction_description" class="form-control" placeholder="Please provide the transaction details and description"><?php echo set_value('transaction_description'); ?></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default btn-block">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")
?>