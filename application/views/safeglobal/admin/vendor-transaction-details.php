<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
<div class="container-fluid">
	<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-12">
		<div class="table-responsive padding-top-50">
			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th>Transaction Id</th>
						<!-- <th>Transaction From</th> -->
						<!-- <th>Transaction To</th>	 -->
						<th>Transaction Type</th>	
						<th>Transaction Amount</th>
						<th>Transaction Description</th>
						<th>Transaction Timestamp</th>
					</tr>
				</thead>
				<tbody>
				<?php if($result !== false) {?>
					<?php foreach ($result as $record) : ?>
					<?php  
						
						if($record['tr_type'] == "0")
							$trans_type = "Payment";
						else if($record['tr_type'] == "1")
							$trans_type = "Refund";
						else if($record['tr_type'] == "2")
							$trans_type = "ChargeBack";
						else {
							$trans_type = "Payout";
						}
						
						// if($record['v_id'] == "1")
							// $from = 'Admin';
						// else
							// $from = $record['v_email'];
					?>
						<tr>
							<td class="text-center"><?=$record['tr_id']?></td>
							<!-- <td class="text-center"><?=$from?></td> -->
							<!-- <td class="text-center"><?=$record['v_address']?></td> -->
							<td class="text-center"><?=$trans_type?></td>
							<td class="text-center"><?=$record['tr_amount']?></td>
							<td class="text-center"><?=$record['tr_description']?></td>
							<td class="text-center"><?=date("Y-m-d H:I:s",$record['tr_timestamp'])?></td>
						</tr>
						
					<?php endforeach; ?>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>