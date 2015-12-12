<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
            <div class="row">
                <div  id="tr_summary" class="col-lg-12">
                    <div class="text-center h5">Payment Details</div>
                    <table class="table table-condensed table-bordered" style="font-size:11px;">
                        <thead>
                            <tr class="info">
                                <th>Payment Type</th>
                                <th> Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="active"><td>Payments : </td><td><?= "$ " . number_format($payment, 2) ?></td></tr>
                            <tr class="active"><td>Rolling Reserve : </td><td><?= "$ " . number_format($old_rr_amount, 2) ?></td></tr>
                            <tr class="danger"><td>Refunds : </td><td><?= "$ " . number_format($refund, 2) ?></td></tr>
                            <tr class="danger"><td>Refund penalty: </td><td><?= "$ " . number_format($refund_penalty, 2) ?></td></tr>
                            <tr class="danger"><td>Charge-backs : </td><td><?= "$ " . number_format($chargeback, 2) ?></td></tr>
                            <tr class="danger"><td>Charge-back penalty : </td><td><?= "$ " . number_format($chargeback_penalty, 2) ?></td></tr>
                            <tr class="danger"><td>Service Charges : </td><td><?= "$ " . number_format($comission, 2) ?></td></tr>
                            <tr class="danger"><td>Current Rolling Reserve : </td><td><?= "$ " . number_format($current_rr_amount, 2) ?></td></tr>
                            <tr class="active"><td><strong>Total : </strong></td><td><strong><?= "$ " . number_format($total, 2) ?></strong></td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <form id="payout_form" action="<?= site_url() . '/admin/process_vendor_payout/' . $v_id ?>" method="post">

                        <div class="form-group col-lg-12">
                            <label for="transaction_amount">Provide Transaction description:</label>
                            <?php echo form_error('transaction_description'); ?>
                            <textarea name="transaction_description" rows="3"  id="transaction_description" class="input-sm form-control" placeholder="Please provide the transaction details and description"><?php echo set_value('transaction_description'); ?></textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="transaction_amount">Transaction Amount (USD):</label>
                            <?php echo form_error('transaction_amount'); ?>
                            <input value="<?= '$' . number_format((floatval(str_replace(",","",$total))), 2); ?>" type="text" disabled class="input-sm form-control"/>
                            <input value="<?= $total;  ?>" type="hidden" name="transaction_amount" id="transaction_amount" />
                            <input value="<?=  $current_rr_amount;  ?>" type="hidden" name="current_rr_amount" id="current_rr_amount" />
                            <input value="<?=  $refund;  ?>" type="hidden" name="refund" id="refund" />
                            <input value="<?=  $refund_penalty; ?>" type="hidden" name="refund_penalty" id="refund_penalty" />
                            <input value="<?= $chargeback; ?>" type="hidden" name="chargeback" id="chargeback" />
                            <input value="<?= $chargeback_penalty; ?>" type="hidden" name="chargeback_penalty" id="chargeback_penalty" />
                            <input value="<?= $comission; ?>" type="hidden" name="comission" id="comission" />
                            <input value="<?= $old_rr_amount; ?>" type="hidden" name="old_rr_amount" id="old_rr_amount" />
                            <input value="<?= $payment;?>" type="hidden" name="payment" id="payment" />
                            <input value="<?= $rr_id ?>" type="hidden" name="rr_id" id="rr_id" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="transaction_amount">Click to settle accounts:</label>
                            <input type="button" id="payout_form_submit" value="Settle Account"   class="form-control input-sm btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" id="show_view_tr">View / Hide transactions </small></a>
            <div class="table-responsive " id="transaction_details">
                <table class="table table-condensed table-bordered"  style="font-size:11px;margin-top:20px;">
                    <thead>
                    <th>TR #</th>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                    <th>Transaction Status</th>
                    <th>Timestamp</th>
                    </thead>
                    <tbody>
                        <?php
                        // $total = 0.00;
                        if (isset($transactions) && !empty($transactions)) {
                            ?>
                            <?php foreach ($transactions as $record) : ?>
                                <?php
                                $amount = "";
                                if ($record['tr_type'] == "0") {
                                    $trans_type = "Payment";
                                    // $total += floatval($record['tr_amount']);
                                    $amount = "+" . $record['tr_amount'];
                                } else if ($record['tr_type'] == "1") {
                                    $trans_type = "Refund";
                                    // $total -= floatval($record['tr_amount']);
                                    $amount = "-" . $record['tr_amount'];
                                } else if ($record['tr_type'] == "2") {
                                    $trans_type = "ChargeBack";
                                    // $total -= floatval($record['tr_amount']);
                                    $amount = "-" . $record['tr_amount'];
                                } else {
                                    $trans_type = "Payout";
                                    $amount = "<strong>**$" . $record['tr_amount'] . "**</strong>";
                                }

                                if ($record['tr_status'] == "0")
                                    $status = "Incomplete";
                                else if ($record['tr_status'] == "1")
                                    $status = "Complete";
                                else if ($record['tr_status'] == "3")
                                    $status = "Failed";
                                ?>

                                <?php if ($record['tr_type'] == "3") { ?>
                                    <tr class="info">
                                <?php } else { ?>
                                    <tr>
                                    <?php } ?>
                                    <td><?= $record['tr_id'] ?></td>
                                    <td><?= $amount ?></td>
                                    <td><?= $trans_type ?></td>
                                    <td><?= $status ?></td>
                                    <td><?= date("Y-m-d H:i:s", $record['tr_timestamp']) ?></td>
                                </tr>
    <?php endforeach; ?>
<?php } else { ?>
                        <div class="padding-top-10">
                            <div align="center" class="alert alert-danger">
                                No transactions available for settlement for this vendor.
                            </div>
                        </div>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>