<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div  class="container-fluid">
    <div align="center" class="padding-top-20">
        <?php if (isset($email_status) && $email_status) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $email_status ?>
            </div>
        <?php } ?>
    </div>
    <div class="table-responsive" id="vendor-create-form">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Status</th>	
                    <th class="text-center">Send Activation email</th>	
                    <th class="text-center">View</th>
                    <th class="text-center">Edit</th>
                    <!-- <th>All Transactions</th> -->
                    <!-- <th>Refunds/Chargebacks</th> -->
                    <!-- <th>Payouts</th> -->
                    <!-- <th>Payment Report</th> -->
                    <th class="text-center">Change Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result !== false) { ?>
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
                    <td><?= html_escape($status); ?></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/email_vendor/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-envelope"></span></a></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/view_vendor_details/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td class="text-center"><a href="<?= site_url() . '/admin/edit_vendor_details/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-edit"></a></span></td>
                    <!-- <td class="text-center"><a href="<?= site_url() . '/admin/get_vendor_transactions/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-shopping-cart"></a></span></td> -->
                    <!-- <td class="text-center"><a href="<?= site_url() . '/admin/vendor_refund_chargeback/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-transfer"></a></span></td> -->
                    <!-- <td class="text-center"><a href="<?= site_url() . '/admin/payout_vendor/' . $record['v_id'] ?>" ><span style="color:black" class="glyphicon glyphicon-ok"></a></span></td> -->
                    <!-- <td class="text-center"><a href="" ><span style="color:black" class="glyphicon glyphicon-list-alt"></a></span></td> -->
        <?php if ($record['v_status'] == "1") { ?>
                        <td class="text-center"><a class="toggle" href="<?= site_url() . '/admin/toggle_vendor_status/' . $record['v_id'] . '/0' ?>" ><span style="color:black" class="glyphicon glyphicon-pause"></a></span></td>
        <?php } else { ?>
                        <td class="text-center"><a class="toggle" href="<?= site_url() . '/admin/toggle_vendor_status/' . $record['v_id'] ?>/1" ><span style="color:black" class="glyphicon glyphicon-play"></a></span></td>
        <?php } ?>
                    </tr>
    <?php endforeach; ?>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>