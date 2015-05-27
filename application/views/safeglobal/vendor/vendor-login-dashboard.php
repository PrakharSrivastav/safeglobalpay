<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation-vendor") ?>
<div  class="container-fluid">
	<div class="table-responsive" id="vendor-create-form">
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Alt Contact</th>
					<th>Amount</th>
					<th>Service</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<?php if($result !== false) {?>
					<?php foreach ($result as $record) : ?>
						  <?php
							// $status = "";$pay_term = "";
							// if($record['v_status'] == "0")		$status = "Inactive";
							// else								$status = "Active";
// 							
							// if($record['v_payment_term'] == "0")		$pay_term = "Weekly";
							// else if ($record['v_payment_term'] == "1")	$pay_term = "Bi Weekly";
							// else										$pay_term = "Monthly";
// 							
							// if($record['v_status'] == "0") echo "<tr class='warning'>";
							// else echo "<tr class='success'>";
						// ?>
						<tr>
							<td><?=$record['c_name'];?></td>
							<td><?=$record['c_email'];?></td>
							<td><?=$record['c_contact'];?></td>
							<td><?=$record['c_alt_contact'];?></td>
							<td><?=$record['c_amount'];?></td>
							<td><?=$record['c_service'];?></td>
							<td><?=$record['c_description'];?></td>
						</tr>
					<?php endforeach; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>