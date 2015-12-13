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
                                <th> Description</th>
                                <th> Amount</th>
                            </tr>
                        </thead>
                        <tbody class="text-capitalize">
                            <tr class="active"><td>Payments : </td><td>Total Payments made</td><td><?= "$ " . number_format($payment, 2) ?></td></tr>
                            <tr class="active"><td>Rolling Reserve : </td><td>Rolling reserve credited this month</td><td><?= "$ " . number_format($old_rr_amount, 2) ?></td></tr>
                            <tr class="danger"><td>Refunds : </td><td>Refunds registered for the duration</td><td><?= "$ " . number_format($refund, 2) ?></td></tr>
                            <tr class="danger"><td>Refund penalty: </td><td>Penalty on processed refunds</td><td><?= "$ " . number_format($refund_penalty, 2) ?></td></tr>
                            <tr class="danger"><td>Charge-backs : </td><td>Chargebacks registered for the duration</td><td><?= "$ " . number_format($chargeback, 2) ?></td></tr>
                            <tr class="danger"><td>Charge-back penalty : </td><td>Penalty on processed refunds chargebacks</td><td><?= "$ " . number_format($chargeback_penalty, 2) ?></td></tr>
                            <tr class="danger"><td>Service Charges : </td><td>SGP Services Charges</td><td><?= "$ " . number_format($comission, 2) ?></td></tr>
                            <tr class="danger"><td>Current Rolling Reserve : </td><td>Rolling Reserve calculated so far for this duration</td><td><?= "$ " . number_format($current_rr_amount, 2) ?></td></tr>
                            <tr class="active"><td><strong>Total : </strong></td><td></td><td>$&nbsp;<strong id="ttl"><?= number_format($total, 2) ?></strong></td></tr>
                            <tr class="active"><td><strong>Adjustment 1 : </strong></td><td style="padding:0px"><input type="text" id="adj_txt_0" class="adj_txt form-control input-sm text-capitalize"></td><td style="padding:0px"><input type="text" pattern="\d*"class="adjustment form-control input-sm"></td></tr>
                            <tr class="active"><td><strong>Adjustment 2 : </strong></td><td style="padding:0px"><input type="text" id="adj_txt_1" class="adj_txt form-control input-sm text-capitalize"></td><td style="padding:0px"><input type="text" class="form-control adjustment input-sm"></td></tr>
                            <tr class="active"><td><strong>Adjustment 3 : </strong></td><td style="padding:0px"><input type="text" id="adj_txt_2" class="adj_txt form-control input-sm text-capitalize"></td><td style="padding:0px"><input type="text" class="form-control adjustment input-sm"></td></tr>
                            <tr class="active"><td><strong>Adjustment 4 : </strong></td><td style="padding:0px"><input type="text" id="adj_txt_3" class="adj_txt form-control input-sm text-capitalize"></td><td style="padding:0px"><input type="text" class="form-control adjustment input-sm"></td></tr>
                            <tr class="active"><td><strong>Grand Total : </strong></td><td></td><td><strong>$<span id="grand_ttl"><?= number_format($total, 2) ?></span></strong></td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <form id="payout_form" action="<?= site_url() . '/admin/process_vendor_payout/' . $v_id ?>" method="post">

                        <div class="form-group col-lg-12 text-capitalize">
                            <label for="transaction_amount">Provide Rolling Reserve Values:</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <select name="year" required="" id="year" class="form-control">
                                        <?php
                                        echo "<option value='' selected>Select Year</option>";
                                        for ($i = date("Y"); $i <= date("Y") + 1; $i++)
                                        {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <?php echo form_error('year'); ?>
                                </div>
                                <div class="col-sm-4">
                                    <select name="month" required="" id="month" class="form-control">
                                        <?php
                                        echo "<option value='' selected>Select month</option>";
                                        for ($i = 1; $i <= 12 + 1; $i++)
                                        {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <?php echo form_error('month'); ?>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="<?=str_replace(",", "", number_format($current_rr_amount,2));?>" name="rr_amount" id="rr_amount" placeholder="Please provide a RR value for this duration">
                                    <?php echo form_error('rr_amount'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="transaction_amount">Provide Transaction description:</label>
                            <?php echo form_error('transaction_description'); ?>
                            <textarea name="transaction_description" rows="3"  id="transaction_description" class="input-sm form-control" placeholder="Please provide the transaction details and description"><?php echo set_value('transaction_description'); ?></textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="transaction_amount">Transaction Amount (USD):</label>
                            <?php echo form_error('transaction_amount'); ?>
                            <input value="<?= '$' . number_format((floatval(str_replace(",", "", $total))), 2); ?>" type="text" id="tr_amnt_dis" disabled class="input-sm form-control"/>
                            <input value="<?= $total; ?>" type="hidden" name="transaction_amount" id="transaction_amount" />
                            <input value="<?= $current_rr_amount; ?>" type="hidden" name="current_rr_amount" id="current_rr_amount" />
                            <input value="<?= $refund; ?>" type="hidden" name="refund" id="refund" />
                            <input value="<?= $refund_penalty; ?>" type="hidden" name="refund_penalty" id="refund_penalty" />
                            <input value="<?= $chargeback; ?>" type="hidden" name="chargeback" id="chargeback" />
                            <input value="<?= $chargeback_penalty; ?>" type="hidden" name="chargeback_penalty" id="chargeback_penalty" />
                            <input value="<?= $comission; ?>" type="hidden" name="comission" id="comission" />
                            <input value="<?= $old_rr_amount; ?>" type="hidden" name="old_rr_amount" id="old_rr_amount" />
                            <input value="<?= $payment; ?>" type="hidden" name="payment" id="payment" />
                            <!--<input value="<?// $rr_id ?>" type="hidden" name="rr_id" id="rr_id" />-->
                            <input value="<?= $startdate ?>" type="hidden" name="startdate" id="startdate" />
                            <input value="<?= $enddate ?>" type="hidden" name="enddate" id="enddate" />
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
                        if (isset($transactions) && !empty($transactions))
                        {
                            ?>
                            <?php foreach ($transactions as $record) : ?>
                                <?php
                                $amount = "";
                                if ($record['tr_type'] == "0")
                                {
                                    $trans_type = "Payment";
                                    // $total += floatval($record['tr_amount']);
                                    $amount = "+" . $record['tr_amount'];
                                }
                                else if ($record['tr_type'] == "1")
                                {
                                    $trans_type = "Refund";
                                    // $total -= floatval($record['tr_amount']);
                                    $amount = "-" . $record['tr_amount'];
                                }
                                else if ($record['tr_type'] == "2")
                                {
                                    $trans_type = "ChargeBack";
                                    // $total -= floatval($record['tr_amount']);
                                    $amount = "-" . $record['tr_amount'];
                                }
                                else
                                {
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

                                <?php
                                if ($record['tr_type'] == "3")
                                {
                                    ?>
                                    <tr class="info">
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                    <tr>
                                    <?php } ?>
                                    <td><?= $record['tr_id'] ?></td>
                                    <td><?= $amount ?></td>
                                    <td><?= $trans_type ?></td>
                                    <td><?= $status ?></td>
                                    <td><?= date("Y-m-d H:i:s", $record['tr_timestamp']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php
                        }
                        else
                        {
                            ?>
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
<?php $this->load->view("ayjoconsulting/common/footer") ?>
<script>
    $(".adjustment,.adj_txt").on('focus , keyup', function () {
        var sum = 0.0;
        var descripion = "";
        ttl = parseFloat($("#ttl").text().replace(',', ''));
        $.each($(".adjustment"), function (i, v) {

            val = parseFloat($(v).val());
            if (val == $(this).val()) {
                sum += val;
            }
//            console.log($("#adj_txt_" + i).val());
//            if ($("#adj_txt_" + i).val().trim() != undefined || $("#adj_txt_" + i).val().trim() != "")
            descripion += "Adjustment " + i + " : " + $("#adj_txt_" + i).val() + " : " + $(this).val() + "            ";
        });
//        console.log(descripion);
        $("#grand_ttl").text(ttl + sum);
        $("#transaction_description").val(descripion);
        $("#transaction_amount").val(parseFloat((ttl + sum)/1.0).toFixed(2));
        $("#tr_amnt_dis").val(parseFloat((ttl + sum)/1.0).toFixed(2));
    });
</script>