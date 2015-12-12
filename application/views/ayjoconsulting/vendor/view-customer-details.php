<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div class="container-fluid">
    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="table-responsive padding-top-50">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">Field</th>
                        <th class="text-center">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result !== false) { ?>
                        <tr><td class="text-center">Customer Name</td>				<td class="text-center"><?= html_escape($result['c_name']) ?></td></tr>
                        <tr><td class="text-center">Customer Email</td>				<td class="text-center"><?= html_escape($result['c_email']) ?></td></tr>
                        <tr><td class="text-center">Customer Contact</td>			<td class="text-center"><?= html_escape($result['c_contact']) ?></td></tr>
                        <tr><td class="text-center">Customer Alternate Contact</td>	<td class="text-center"><?= html_escape($result['c_alt_contact']) ?></td></tr>
                        <!--<tr><td class="text-center">Customer Amount</td>			<td class="text-center"><?php //echo $result['c_amount'] ?></td></tr>-->
                        <tr><td class="text-center">Service Offered</td>			<td class="text-center"><?= html_escape($result['c_service']) ?></td></tr>
                        <tr><td class="text-center">Service Description</td>				<td class="text-center"><?php echo html_escape($result['c_description']); ?></td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>