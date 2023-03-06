<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            Products Detail
        </div>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>

                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/uploads/products/' . $brg->gambar ?>" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tr>
                                <td>Product Name</td>
                                <td><strong><?= $brg->nama_brg; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><strong><?= $brg->keterangan; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td><strong><?= $brg->kategori; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td><strong><?= $brg->stok; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">IDR. <?= number_format($brg->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-secondary">Add to Cart</div>'); ?>
                        <?= anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Back</div>'); ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>