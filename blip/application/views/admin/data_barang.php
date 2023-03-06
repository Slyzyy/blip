<div class="container-fluid mt-3">
    <button class="btn btn-secondary" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Add Items</button>

    <table class="table table-bordered mt-3">
        <tr>
            <th>Number</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th colspan="3">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $brg->nama_brg; ?></td>
                <td><?= $brg->keterangan; ?></td>
                <td><?= $brg->kategori; ?></td>
                <td><?= $brg->harga; ?></td>
                <td><?= $brg->stok; ?></td>
                <td>
                    <div class="btn btn-dark"><i class="fas fa-search-plus"></i> </div>
                </td>
                <td>
                    <?= anchor('admin_cart/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-secondary"><i class="fas fa-edit"></i> </div>') ?>
                </td>
                <td>
                    <?= anchor('admin_cart/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger"><i class="fas fa-trash"></i> </div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin_cart/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="kategori">
                            <option>Men</option>
                            <option>Women</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Product Image</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Add Product</button>
            </div>
            </form>
        </div>
    </div>
</div>