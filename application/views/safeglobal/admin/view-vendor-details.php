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
					<?php  
						$status = "";$payment_term = "";
						if($result['v_status'] == 0) $status = "Inactive"; else $status = "Active"; 
						if($result['v_payment_term'] == "0")
							$payment_term = "Weekly";
						else if($result['v_payment_term'] == "1")
							$payment_term = "Bi Weekly";
						else 
							$payment_term = "Monthly";
						
					?>
						<tr><td  class="text-center">Vendor Name</td>				<td class="text-center"><?=$result['v_name']?></td></tr>
						<tr><td class="text-center">Vendor Email</td>				<td class="text-center"><?=$result['v_email']?></td></tr>
						<tr><td class="text-center">Vendor Address</td>				<td class="text-center"><?=$result['v_address']?></td></tr>
						<tr><td class="text-center">Vendor Contact</td>				<td class="text-center"><?=$result['v_contact']?></td></tr>
						<tr><td class="text-center">Vendor Alternate Contact</td>	<td class="text-center"><?=$result['v_alt_contact']?></td></tr>
						<tr><td class="text-center">Percentage Comission</td>		<td class="text-center"><?=$result['v_percent']?></td></tr>
						<tr><td class="text-center">Rolling Reserve</td>			<td class="text-center"><?=$result['v_rolling_res']?></td></tr>
						<tr><td class="text-center">Rolling Reserve Duration</td>	<td class="text-center"><?=$result['v_rolling_res_duration']." Months"?></td></tr>
						<tr><td class="text-center">Refund Penalty</td>				<td class="text-center"><?=$result['v_refund_penalty']?></td></tr>
						<tr><td class="text-center">Chargeback Penalty</td>			<td class="text-center"><?=$result['v_chargeback_penalty']?></td></tr>
						<tr><td class="text-center">Payment Date</td>				<td class="text-center"><?=$result['v_payment_date']?></td></tr>
						<tr><td class="text-center">Payment Term</td>				<td class="text-center"><?=$payment_term?></td></tr>
						<tr><td class="text-center">Initial Reserve</td>			<td class="text-center"><?=$result['v_initial_reserve']?></td></tr>
						<tr><td class="text-center">Vendor Status</td>				<td class="text-center"><?=$status?></td></tr>
						
					<?php //endforeach; ?>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>