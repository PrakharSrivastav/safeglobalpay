<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div class="container-fluid">
    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <div class="padding-top-30">
            <a href = "<?= site_url() . '/vendor/process_download/' . $result[0]['v_id'] . "/" . $type; ?>" class="btn btn-primary">Download Report</a>
        </div>

        <div class="table-responsive padding-top-20">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Transaction Id</th>
                        <!-- <th>Transaction From</th> -->
                        <!-- <th>Transaction To</th>	 -->
                        <th>Transaction Type</th>	
                        <th>Transaction Amount</th>
                        <th>Transaction Description</th>
                        <th>Transaction Timestamp</th>
                        <th>Transaction Status</th>
                        <th>Response Text</th>
                        <th>Response Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result !== false) { ?>
                        <?php foreach ($result as $record) : ?>
                            <?php
                            $status = "";
                            if ($record['tr_type'] == "0")
                                $trans_type = "Payment";
                            else if ($record['tr_type'] == "1")
                                $trans_type = "Refund";
                            else if ($record['tr_type'] == "2")
                                $trans_type = "ChargeBack";
                            else
                                $trans_type = "Payout";

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
                            <tr>
                                <td class="text-center"><?= html_escape($record['tr_id']); ?></td>
                                <!-- <td class="text-center"><?= html_escape($from); ?></td> -->
                                <!-- <td class="text-center"><?= html_escape($record['v_address']); ?></td> -->
                                <td class="text-center"><?= html_escape($trans_type); ?></td>
                                <td class="text-center"><?= html_escape($record['tr_amount']); ?></td>
                                <td class="text-center"><?= html_escape($record['tr_description']); ?></td>
                                <td class="text-center"><?= date("Y-m-d H:i:s", $record['tr_timestamp']); ?></td>
                                <td class="text-center"><?= html_escape($status); ?></td>
                                <td class="text-center"><?= html_escape($record['x_response_reason_text']); ?></td>
                                <td class="text-center"><?= html_escape($record['Bank_Message']); ?></td>
                            </tr>

                        <?php endforeach; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>