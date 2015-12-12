<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>admin">AyjoConsulting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vendors <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=site_url()?>/admin/vendor_create_form">Create Vendors</a></li>
            <li><a href="<?=site_url()?>/admin/vendor_manage_form">Manage Vendors</a></li>
          </ul>
        </li>
        <li><a href="<?=site_url()?>/admin/vendor_reports">Reports <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=site_url()?>/utilities/db_backup">Backup and Download</a></li>
          <li style="padding:0px 10px 0px 10px"><a href="<?=site_url()?>/admin/logout" class="btn btn-danger btn-block" id="logout_btn">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
