<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
<div  class="container-fluid">
	<div class="table-responsive" id="vendor-create-form">
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>	
					<th>Send Email</th>	
					<th>View</th>
					<th>Edit</th>
					<th>All Transactions</th>
					<!-- <th>Refunds/Chargebacks</th> -->
					<th>Payouts</th>
					<!-- <th>Payment Report</th> -->
					<th>Deactivate</th>
				</tr>
			</thead>
			<tbody>
				<?php if($result !== false) {?>
					<?php foreach ($result as $record) : ?>
						<?php
							$status = "";$pay_term = "";
							if($record['v_status'] == "0")		$status = "Inactive";
							else								$status = "Active";
							
							if($record['v_payment_term'] == "0")		$pay_term = "Weekly";
							else if ($record['v_payment_term'] == "1")	$pay_term = "Bi Weekly";
							else										$pay_term = "Monthly";
							
							if($record['v_status'] == "0") echo "<tr class='warning'>";
							else echo "<tr class='success'>";
						?>
							<td><?=$record['v_name'];?></td>
							<td><?=$record['v_email'];?></td>
							<td><?=$status;?></td>
							<td class="text-center"><a href="<?=base_url().'admin/email_vendor/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-envelope"></span></a></td>
							<td class="text-center"><a href="<?=base_url().'admin/view_vendor_details/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-eye-open"></span></a></td>
							<td class="text-center"><a href="<?=base_url().'admin/edit_vendor_details/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-edit"></a></span></td>
							<td class="text-center"><a href="<?=base_url().'admin/get_vendor_transactions/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-shopping-cart"></a></span></td>
							<!-- <td class="text-center"><a href="<?=base_url().'admin/vendor_refund_chargeback/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-transfer"></a></span></td> -->
							<td class="text-center"><a href="<?=base_url().'admin/payout_vendor/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-ok"></a></span></td>
							<!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-list-alt"></a></span></td> -->
							<td class="text-center"><a href="<?=base_url().'admin/toggle_vendor_status/'.$record['v_id']?>" ><span style="color:black" class="glyphicon glyphicon-pause"></a></span></td>
						</tr>
					<?php endforeach; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>