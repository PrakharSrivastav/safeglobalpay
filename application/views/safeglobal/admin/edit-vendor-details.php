<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
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
					<form action="<?=base_url().'admin/update_vendor_detail/'.$result['v_id']?>" method="post" class="form">
						<tr>
							<td class="text-left">Vendor Name<br/><small><?php echo form_error('v_name'); ?></small></td>				    		
							<td class="text-center"><input type="text" name="v_name" class="form-control" value="<?=$result['v_name']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Email<br/><small><?php echo form_error('v_email'); ?></small></td>						
							<td class="text-center"><input type="text" name="v_email" class="form-control" value="<?=$result['v_email']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Address<br/><small><?php echo form_error('v_address'); ?></small></td>					
							<td class="text-center"><input type="text" name="v_address" class="form-control" value="<?=$result['v_address']?>" /></td>
							</tr>
						<!-- <tr>
							<td class="text-left">Vendor Password<br/><small><?php echo form_error('v_password'); ?></small></td>		
							<td class="text-center"><input type="text" name="v_password" class="form-control" value="<?=$result['v_password']?>" /></td>
							</tr> -->
						<tr>
							<td class="text-left">Vendor Comission Percentage<br/><small><?php echo form_error('v_percent'); ?></small></td>						
							<td class="text-center"><input type="text" name="v_percent" class="form-control" value="<?=$result['v_percent']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Vendor Rolling Reserve<br/><small><?php echo form_error('v_rolling_res'); ?></small></td>					
							<td class="text-center"><input type="text" name="v_rolling_res" class="form-control" value="<?=$result['v_rolling_res']?>" /></td>
							</tr>
						<tr>
							<td class="text-left">Vendor Rolling Reserve Duration<br/><small><?php echo form_error('v_rolling_res_duration'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_rolling_res_duration" class="form-control" value="<?=$result['v_rolling_res_duration']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Refund Percentage<br/><small><?php echo form_error('v_refund_penalty'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_refund_penalty" class="form-control" value="<?=$result['v_refund_penalty']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Chargeback Percentage<br/><small><?php echo form_error('v_chargeback_penalty'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_chargeback_penalty" class="form-control" value="<?=$result['v_chargeback_penalty']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Payment Date<br/><small><?php echo form_error('v_payment_date'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_payment_date" class="form-control" value="<?=$result['v_payment_date']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Payment Term<br/><small><?php echo form_error('v_payment_term'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_payment_term" class="form-control" value="<?=$result['v_payment_term']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Initial Reserve Amount<br/><small><?php echo form_error('v_initial_reserve'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_initial_reserve" class="form-control" value="<?=$result['v_initial_reserve']?>" /></td>
						</tr>
						<!-- <tr>
							<td class="text-left">Vendor Status<br/><small><?php echo form_error('v_status'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_status" class="form-control" value="<?=$result['v_status']?>" /></td>
						</tr> -->
						<tr>
							<td class="text-left">Vendor Contact<br/><small><?php echo form_error('v_contact'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_contact" class="form-control" value="<?=$result['v_contact']?>" /></td>
						</tr>
						<tr>
							<td class="text-left">Vendor Alternate Contact<br/><small><?php echo form_error('v_alt_contact'); ?></small></td>			
							<td class="text-center"><input type="text" name="v_alt_contact" class="form-control" value="<?=$result['v_alt_contact']?>" /></td>
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