<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation-vendor") ?>
<div class="container-fluid">
	<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="table-responsive padding-top-50">
			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th class="text-center">Field</th>
						<th class="text-center">Value</th>
					</tr>
				</thead>
				<tbody>
				<?php if($result !== false) {?>
					<form action="<?=base_url().'vendor/update_customer_detail/'.$result['c_id']?>" method="post" class="form">
						<tr>
							<td class="text-left">Customer Name<br/><small><?php echo form_error('c_name'); ?></small></td>				    		
							<td class="text-center"><input type="text" name="c_name" class="form-control" value="<?=$result['c_name']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Customer Email<br/><small><?php echo form_error('c_email'); ?></small></td>						
							<td class="text-center"><input type="text" name="c_email" class="form-control" value="<?=$result['c_email']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Customer Contact<br/><small><?php echo form_error('c_contact'); ?></small></td>					
							<td class="text-center"><input type="text" name="c_contact" class="form-control" value="<?=$result['c_contact']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Customer Alternate Contact<br/><small><?php echo form_error('c_alt_contact'); ?></small></td>		
							<td class="text-center"><input type="text" name="c_alt_contact" class="form-control" value="<?=$result['c_alt_contact']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Customer Amount<br/><small><?php echo form_error('c_amount'); ?></small></td>						
							<td class="text-center"><input type="text" name="c_amount" class="form-control" value="<?=$result['c_amount']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Service Offered<br/><small><?php echo form_error('c_service'); ?></small></td>					
							<td class="text-center"><input type="text" name="c_service" class="form-control" value="<?=$result['c_service']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Service Description<br/><small><?php echo form_error('c_description'); ?></small></td>			
							<td class="text-center"><input type="text" name="c_description" class="form-control" value="<?=$result['c_description']?>" /></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" class="btn btn-primary btn-block"/></td>
						</tr>
					</form>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>