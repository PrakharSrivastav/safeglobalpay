<?php $this->load->view("ayjoconsulting/common/header") ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/datepicker.css">
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div  class="container-fluid">
    <!--<input type="text" class="datepicker" >-->
    <div class="row">
        <h3 class="text-center">Please select the date duration for the reports</h3>

        <div class="col-sm-offset-4 col-sm-4 col-xs-12 table-responsive">
            <table class="table table-bordered table-condensed">
                <caption><span>Vendor Details</span></caption>
                <tbody>
                    <tr>
                        <td>Vendor name : </td><td><?= $vendor['v_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Vendor email : </td><td><?= $vendor['v_email']; ?></td>
                    </tr>
                    <tr>
                        <td>Account Name : </td><td><?= $vendor['v_account_name']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-offset-3 col-sm-6 col-xs-12" >
            <div class="text-center h2">Generate reports between</div>
            <div class="text-center h4 text-danger"><?=(isset($message))?$message:"";?></div>
            <form method="post" action="<?=  site_url()."/admin/payout_vendor/".$vendor['v_id']?>">
                <div class="form-group">
                    <label for="startdate" class=" control-label">Start Date</label>
                    <input type="text" required="" class="form-control datepicker text-center" data-date-format="yyyy-mm-dd" id="startdate" name="startdate" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <label for="enddate" class="control-label">End Date</label>
                    <input type="text"  required="" class="form-control datepicker text-center" data-date-format="yyyy-mm-dd" id="enddate" name="enddate" placeholder="yyyy-mm-dd">
                </div>
                <input type="submit" class="btn btn-block btn-success text-capitalize" value="Generate payout report">
            </form>
        </div>
    </div>
    <?php $this->load->view("ayjoconsulting/common/footer") ?>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-datepicker.js"></script>
    <script> $('.datepicker').datepicker()</script>