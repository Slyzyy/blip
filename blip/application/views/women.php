<div class="container-fluid">
    <div class="row text-center m-3">
        <?php foreach ($women as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('/uploads/products/' . $brg->gambar) ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_brg; ?></h5>
                    <small><?= $brg->keterangan; ?></small><br>
                    <span class="badge badge-secondary mb-3">IDR. <?= number_format($brg->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-secondary">Add to Cart</div>'); ?>
                    <?= anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Product Details</div>'); ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>