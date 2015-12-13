<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation") ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
            <div class="row padding-top-50">

                <form id="refund_chargeback_form" action="<?= site_url() . '/admin/process_refund_chargeback/' . $v_id ?>" method="post">
                    <div class="row">
                        <div class="form-group">
                            <label for="invoice" class="control-label col-sm-3 pull-left">Enter Invoice number</label>
                            <div class="col-sm-4">
                                <input name="invoice" id="invoice" class="form-control input-sm" type="text">
                            </div>
                        </div>
                        <br>
                        <hr />
                        <div class="form-group col-lg-12">
                            <label for="chargeback_refund_amount">Amount:</label>
                            <?php echo form_error('chargeback_refund_amount'); ?>
                            <input type="text" id="chargeback_refund_amount" name="chargeback_refund_amount" class="input-sm form-control" placeholder="Please provide the amount" value="<?php echo set_value('chargeback_refund_amount'); ?>" required />
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="chargeback_refund">Refund/ChargeBack:</label>
                            <select class="input-sm form-control" name="chargeback_refund" id="chargeback_refund">
                                <option value='2'>ChargeBack</option>
                                <option value='1'>Refund</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="description">Description:</label>
                            <?php echo form_error('description'); ?>
                            <textarea name="description" id="description"  class="input-sm form-control" rows=4 required><?php echo set_value("description") ?></textarea>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Insert Refund / Chargeback"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("ayjoconsulting/common/footer") ?>
<script>
    $("#invoice").keyup(function () {
        invoice = $("#invoice").val();
        $.get("<?= site_url() ?>/admin/get_invoice_details/" + invoice+"/"+<?=$v_id;?>, function (data, status) {
            msg = "";
            if (data !== "fail")
            {
                $("#chargeback_refund_amount").val(data);
                msg = "Invoice number : " + invoice + " Amount : " + data;
                $("#chargeback_refund_amount").val(data);
                $("#description").val(msg);
                // $("#refund_chargeback_form").append("<input type='hidden' name='invoice_num' id='invoice_num' value")
            }
            else {
                $("#chargeback_refund_amount").val(0.0);
                $("#description").val(msg);
            }

        });
    });
</script>