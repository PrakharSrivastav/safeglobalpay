<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div  class="container-fluid">
    <div align="center" class="padding-top-20">
        <?php if (isset($email_status) && $email_status)
        { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $email_status ?>
            </div>
<?php } ?>
    </div>
    <div class="row">
        <ul>
            <li><strong>Payouts : </strong> Make a vendor payout ( Admin -> Vendor )</li>
            <li><strong>All Transactions : </strong> Summary of all transaction related to this vendor</li>
            <li><strong>Payment Report : </strong> Summary of all the customer payments through this vendor ( Customer -> Admin )</li>
            <li><strong>Refunds/Chargebacks : </strong> Summary of all the refunds and chargebacks ( Bank,Admin -> Customer )</li>
            <li><strong>Payout Reports : </strong> Summary of all payouts made to this vendor ( Admin->Vendor )</li>
        </ul>
    </div>
    <div class="table-responsive" id="vendor-create-form">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>	
                    <th>Payouts</th>
                    <th>Register Refunds/Chargebacks</th>
                    <th>All Reports</th>
                    <th>Invoice Report</th>
                    <th>Refunds/Chargebacks</th>
                    <th>Payout Report</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result !== false)
                { ?>
                    <?php foreach ($result as $record) : ?>
                        <?php
                        $status = "";
                        $pay_term = "";
                        if ($record['v_status'] == "0")
                            $status = "Inactive";
                        else
                            $status = "Active";

                        if ($record['v_payment_term'] == "0")
                            $pay_term = "Weekly";
                        else if ($record['v_payment_term'] == "1")
                            $pay_term = "Bi Weekly";
                        else
                            $pay_term = "Monthly";

                        if ($record['v_status'] == "0")
                            echo "<tr class='warning'>";
                        else
                            echo "<tr class='success'>";
                        ?>
                    <td><?= html_escape($record['v_name']); ?></td>
                    <td><?= html_escape($record['v_email']); ?></td>
                    <td><?= html_escape($status); ?></td><!--payout_vendor-->
                    <td class="text-center"><a href="<?= site_url() . '/admin/select_report_dates/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon glyphicon-check"></a></span></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/cb_ref_vendor/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon glyphicon-minus-sign"></a></span></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/get_vendor_transactions/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-credit-card"></a></span></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/vendor_payment_reports/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-tasks"></a></span></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/vendor_refund_chargeback/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-retweet"></a></span></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/vendor_payout_reports/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-list-alt"></a></span></td>
                    <!-- <td class="text-center"><a href="<?= site_url() . '/admin/toggle_vendor_status/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-pause"></a></span></td> -->
                    </tr>
    <?php endforeach; ?>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>