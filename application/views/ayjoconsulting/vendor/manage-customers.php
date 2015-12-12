<?php $this->load->view("ayjoconsulting/common/header") ?>
<?php $this->load->view("ayjoconsulting/common/navigation-vendor") ?>
<div  class="container-fluid">
    <?php if (isset($message) && isset($link) && !empty($message) && !empty($link)) { ?>
        <div align="center" class="alert alert-success" style ="margin-top:25px">
            <?= $message; ?><br /><a href="<?= $link; ?>"><?= $link; ?></a>
        </div>
    <?php } ?>

    <div class="table-responsive" id="vendor-create-form">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <!--<th class="text-center">Delete Customer</th>-->
                    <th class="text-center">Send New Invoice</th>
                    <th class="text-center">View Customer</th>
                    <th class="text-center">Edit Customer</th>
                    <th class="text-center">View Past Transaction</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result !== false) { ?>
                    <?php foreach ($result as $record) : ?>
                        <tr>
                            <td><?=html_escape( $record['c_name']); ?></td>
                            <td><?=html_escape( $record['c_email']); ?></td>
                            <!--<td class="text-center delete"><a href="<?php //echo site_url() . '/vendor/delete_customer_details/' . html_escape($record['c_id']) ?>" ><span style="color:black" class="glyphicon glyphicon-trash"></span></a></td>-->
                            <td class="text-center"><a href="<?= site_url() . '/vendor/send_new_invoice/' . html_escape($record['c_id']) ?>" ><span style="color:black" class="glyphicon glyphicon-envelope"></span></a></td>
                            <td class="text-center"><a href="<?= site_url() . '/vendor/view_customer_details/' . html_escape($record['c_id']) ?>" ><span style="color:black" class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td class="text-center"><a href="<?= site_url() . '/vendor/edit_customer_details/' . html_escape($record['c_id']) ?>" ><span style="color:black" class="glyphicon glyphicon-edit"></span></a></td>
                            <td class="text-center"><a href="<?= site_url() . '/vendor/get_all_reports/' . html_escape($record['c_id']) ?>" ><span style="color:black" class="glyphicon glyphicon-list-alt"></span></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$this->load->view("ayjoconsulting/common/footer")?>