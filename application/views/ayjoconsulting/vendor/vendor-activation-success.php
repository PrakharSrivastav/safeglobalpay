<?php $this->load->view("ayjoconsulting/common/header") ?>
<div class="container-fluid">
	<div class="padding-50">
		<div align="center">
			<div class="alert alert-success alert-dismissible padding-top-50" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Your account is activated. Please click on the link below to proceed to the login page.
				<br />
				<div class="padding-top-30"">
					<a href="<?=site_url()?>/admin" class="btn btn-primary">Go to Login Page</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("ayjoconsulting/common/footer")?>
