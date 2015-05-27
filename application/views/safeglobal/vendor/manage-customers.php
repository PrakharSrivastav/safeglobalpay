<?php $this->load->view("safeglobal/common/header") ?>
<?php $this->load->view("safeglobal/common/navigation-vendor") ?>
<div  class="container-fluid">
	<div class="table-responsive" id="vendor-create-form">
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Delete Customer</th>
					<th>Send New Invoice</th>
					<th>View Customer</th>
					<th>Edit Customer</th>
					<th>View Past Transaction</th>
				</tr>
			</thead>
			<tbody>
				<?php if($result !== false) {?>
					<?php foreach ($result as $record) : ?>
						<tr>
							<td><?=$record['c_name'];?></td>
							<td><?=$record['c_email'];?></td>
							<td class="text-center delete"><a href="<?=base_url().'vendor/delete_customer_details/'.$record['c_id']?>" ><span style="color:black" class="glyphicon glyphicon-trash"></span></a></td>
							<td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-envelope"></span></a></td>
							<td class="text-center"><a href="<?=base_url().'vendor/view_customer_details/'.$record['c_id']?>" ><span style="color:black" class="glyphicon glyphicon-eye-open"></span></a></td>
							<td class="text-center"><a href="<?=base_url().'vendor/edit_customer_details/'.$record['c_id']?>" ><span style="color:black" class="glyphicon glyphicon-edit"></span></a></td>
							<td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-list-alt"></span></a></td>
						</tr>
					<?php endforeach; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>