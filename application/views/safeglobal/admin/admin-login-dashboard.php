<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation") ?>
<div  class="container-fluid">
	<div class="table-responsive" id="vendor-create-form">
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Commission %</th>
					<th>Rolling Reserve</th>
					<th>Reserve Duration</th>
					<th>Refund Penalty</th>
					<th>Chargeback Penalty</th>
					<th>Payment Terms</th>
					<th>Initial Reserve</th>
					<th>Status</th>	
					<!-- <th>Send Email</th>	 -->
					<!-- <th>View</th> -->
					<!-- <th>Edit</th> -->
					<!-- <th>Deactivate</th>				 -->
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
							<td><?=$record['v_percent'];?></td>
							<td><?=$record['v_rolling_res'];?></td>
							<td><?=$record['v_rolling_res_duration']." Months";?></td>
							<td><?=$record['v_refund_penalty'];?></td>
							<td><?=$record['v_chargeback_penalty'];?></td>
							<td><?=$pay_term;?></td>
							<td><?=$record['v_initial_reserve'];?></td>
							<td><?=$status;?></td>
							<!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-envelope"></span></a></td> -->
							<!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-eye-open"></span></a></td> -->
							<!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-edit"></a></span></td> -->
							<!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-pause"></a></span></td> -->
						</tr>
					<?php endforeach; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>