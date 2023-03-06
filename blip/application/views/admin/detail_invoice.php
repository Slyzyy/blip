<div class="container-fluid">
    <h4>Invoice Detail <div class="btn btn-sm btn-secondary">No. Invoice : <?= $invoice->id; ?></div>
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Total Items</th>
            <th>Unit Price</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $total = 0;
        if ($pesanan) {
            foreach ($pesanan as $psn) :
                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal;
        ?>

                <tr>
                    <td><?= $psn->id_brg; ?></td>
                    <td><?= $psn->nama_brg; ?></td>
                    <td><?= $psn->jumlah; ?></td>
                    <td><?= number_format($psn->harga, 0, ',', '.'); ?></td>
                    <td><?= number_format($subtotal, 0, ',', '.'); ?></td>
                </tr>

        <?php endforeach;
        } ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">IDR. <?= number_format($total, 0, ',', '.'); ?></td>
        </tr>

    </table>

    <a href="<?= base_url('admin_cart/invoice/index'); ?>">
        <div class="btn btn-sm btn-secondary">Back</div>
    </a>
</div>