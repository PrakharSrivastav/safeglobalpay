<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div class="container-fluid">
    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <div class="padding-top-30">
            <a href = "<?= site_url() . '/admin/process_download/' . $result[0]['tr_ref_id'] . "/" . $type; ?>" class="btn btn-primary">Download Report</a>
        </div>
        
        <div class="table-responsive padding-top-20">
            <table class="table table-bordered table-condensed" style="font-size:11px;">
                <thead>
                    <tr>
                        <th class="text-center">Transaction Id</th>
                        <!-- <th>Transaction From</th> -->
                        <!-- <th>Transaction To</th>	 -->
                        <th class="text-center">Transaction Type</th>	
                        <th class="text-center">Transaction Amount</th>
                        <th class="text-center">Transaction Description</th>
                        <th class="text-center">Transaction Timestamp</th>
                        <th class="text-center">Transaction Status</th>
                        <th class="text-center">Response Text</th>
                        <th class="text-center">Response Details</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result !== false) { ?>
                        <?php foreach ($result as $record) : ?>
                            <?php
                            $amount = "";
                            
                            if ($record['tr_type'] == "0") {
                                $trans_type = "Payment";
                                $amount = "+" . $record['tr_amount'];
                            } else if ($record['tr_type'] == "1") {
                                $trans_type = "Refund";
                                $amount = "-" . $record['tr_amount'];
                            } else if ($record['tr_type'] == "2") {
                                $trans_type = "ChargeBack";
                                $amount = "-" . $record['tr_amount'];
                            } else {
                                $trans_type = "Payout";
                                $amount = "**$" . $record['tr_amount'] . "**";
                            }

                            if ($record['tr_status'] == "0")
                                $status = "Incomplete";
                            else if ($record['tr_status'] == "1")
                                $status = "Complete";
                            else if ($record['tr_status'] == "2")
                                $status = "Failed";
                            // if($record['v_id'] == "1")
                            // $from = 'Admin';
                            // else
                            // $from = $record['v_email'];
                            ?>
                            <?php if ($record['tr_type'] == "2" || $record['tr_type'] == "1") { ?>
                                <tr class="warning">
                            <?php } else if ($record['tr_type'] == "3" && $record['tr_status'] != "2") { ?>
                                <tr class="success">
                            <?php } else if ($record['tr_status'] == "2") { ?>
                                <tr class="danger">
                            <?php } else { ?>
                                <tr>
                                <?php } ?>
                                <td class="text-center"><?= html_escape($record['tr_id']) ?></td>
                                <td class="text-center"><?= html_escape($trans_type) ?></td>
                                <td class="text-center"><?= ($record['tr_type'] == "3") ? "<strong>" . $amount . "</strong>" : $amount ?></td>
                                <td style="width:30%"><?= html_escape($record['tr_description']) ?></td>
                                <td class="text-center"><?= date("Y-m-d H:i:s", $record['tr_timestamp']) ?></td>
                                <td class="text-center"><?= html_escape($status) ?></td>
                                <td class="text-center"><?= html_escape($record['x_response_reason_text']) ?></td>
                                <td class="text-center"><?= html_escape($record['Bank_Message']) ?></td>
                                <td class="text-center"><?= html_escape($record['c_name']) ?></td>
                                <td class="text-center"><?= html_escape($record['c_email']) ?></td>
                                <td class="text-center"><?= html_escape($record['c_contact']) ?></td>
                            </tr>

    <?php endforeach; ?>
<?php } else { ?>
                    <div align="center" class="alert alert-danger">
                        No transactions available for this customer in the system.
                    </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>