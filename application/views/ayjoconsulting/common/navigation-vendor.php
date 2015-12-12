<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=site_url()?>/admin">AyjoConsulting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Customers <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=site_url()?>/vendor/customer_create_form">Create Customers</a></li>
            <li><a href="<?=site_url()?>/vendor/customer_manage_form">Manage Customers</a></li>
          </ul>
        </li>
        <li><a target="_blank" href="<?=site_url()?>/home/agreements">Terms and Conditions</a></li>
		
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
	  <li style="padding:15px 0px 10px 0px;color:#FFF"><span> Welcome <?=html_escape($this->session->userdata('v_name'));?></span></li>
        <li style="padding:0px 10px 0px 10px"><a href="<?=site_url()?>/admin/logout" class="btn btn-danger btn-block" id="logout_btn">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
