<div class="container-fluid">
    <h4>Your Shopping Cart</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Total Items</th>
            <th>Price</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) :
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name'] ?></td>
                <td><?= $items['qty'] ?></td>
                <td align="right">IDR. <?= number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">IDR. <?= number_format($items['subtotal'], 0, ',', '.')  ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">IDR. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>

    </table>

    <div colspan="4" align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Delete Cart</div>
        </a>
        <a href="<?= base_url('dashboard/index') ?>">
            <div class="btn btn-sm btn-secondary">Continue Shopping</div>
        </a>
        <a href="<?= base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-primary">Check Out</div>
        </a>
    </div>
</div>