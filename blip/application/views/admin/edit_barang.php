<div class="container-fluid">
    <h2><i class="fas fa-edit"></i>Product Edit</h2>

    <?php foreach ($barang as $brg) : ?>

        <form method="POST" action="<?= base_url('admin_cart/data_barang/update'); ?> ">

            <div class="for-group">
                <label for="">Product Name</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
            </div>

            <div class="for-group">
                <label class="mt-3" for="">Description</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan; ?>">
            </div>

            <div class="for-group">
                <label class="mt-3" for="">Category</label>
                <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori; ?>">
            </div>

            <div class="for-group">
                <label class="mt-3" for="">Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg->harga; ?>">
            </div>

            <div class="for-group">
                <label class="mt-3" for="">Stock</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg->stok; ?>">
            </div>

            <button type="submit" class="btn btn-secondary mt-4" value="simpan">Save</button>

        </form>

    <?php endforeach; ?>

</div>