<div class="container-fluid">
    <h4>Payment Invoice</h4>
    <a href="<?php echo site_url('admin_cart/invoice/print_invoice/') ?>" class="btn btn-secondary mb-3 mt-1">Export to PDF</a>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Invoice Id</th>
            <th>Buyer's Name</th>
            <th>Shipping Address</th>
            <th>Payment Date</th>
            <th>Payment Limit</th>
            <th>Action</th>
        </tr>
        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td>
                    <?= anchor('admin_cart/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-secondary">Detail</div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>