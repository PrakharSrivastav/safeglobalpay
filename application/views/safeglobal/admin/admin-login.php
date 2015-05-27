<?php $this->load->view("safeglobal/common/header") ?>
<div class="container-fluid">
	<div class="row">
		<div id="login-box"  class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
			<form action="<?=base_url()?>admin/login" method="post" role="form" class="form-horizontal">
				<div class="form-group">
					<label for="sgp_username" class="col-sm-2 control-label">Username: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sgp_username" id="sgp_username" placeholder="Admin Username" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="sgp_password" class="col-sm-2 control-label">Password: </label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="sgp_password" id="sgp_password" placeholder="Admin Password" required="required">
					</div>
				</div
				
				<div class="form-group">
					<div align="center">
					<?php 
						echo validation_errors(); 
						if(isset($error))
							echo $error;
					?>
				</div>
					<div>
						<button type="submit" class="btn btn-primary btn-block">
							Login
						</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
<?php $this->load->view("safeglobal/common/footer")?>