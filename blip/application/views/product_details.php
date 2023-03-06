<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/product_detail-.css') ?>">
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Product Details</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?= base_url('home') ?>">
                <h2>Blip</h2>
            </a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a href="<?= base_url('all_products') ?>">All Products</a></li>
            <li><a href="<?= base_url('auth') ?>">Account</a></li>
            <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
            <li>
                <?php
                $keranjang = '<i class="fas fa-shopping-cart"> </i> ' . $this->cart->total_items()  ?>
                <?= anchor('cart', $keranjang); ?>
            <li>
                <a href="<?= base_url('user') ?>">
                    <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <?php foreach ($barang as $brg) : ?>

        <div class="container">
            <center>
                <h2><?= $brg->nama_brg; ?> <span class="dot"></span></h2>
            </center>
        </div>


        <div class="wrapper">
            <div class="box1">
                <center>
                    <img src="<?= base_url() . '/uploads/products/' . $brg->gambar ?>" alt="">
                </center>
            </div>
            <div class="box2">
                <table class="content-table">
                    <tr>
                        <td class="title">Product Name</td>
                        <td><strong><?= $brg->nama_brg; ?></strong></td>
                    </tr>
                    <tr>
                        <td class="title">Description</td>
                        <td><strong><?= $brg->keterangan; ?></strong></td>
                    </tr>
                    <tr>
                        <td class="title">Category</td>
                        <td><strong><?= $brg->kategori; ?></strong></td>
                    </tr>
                    <tr>
                        <td class="title">Stock</td>
                        <td><strong><?= $brg->stok; ?></strong></td>
                    </tr>
                    <tr>
                        <td class="title">Price</td>
                        <td>
                            <strong>
                                <div class="btn btn-sm btn-success">IDR. <?= number_format($brg->harga, 0, ',', '.') ?></div>
                            </strong>
                        </td>
                    </tr>
                </table>
                <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn-add">Add to Cart</div>'); ?>
                <?= anchor('all_products', '<div class="btn-back">Back</div>'); ?>
            </div>
        </div>

    <?php endforeach; ?>

    <footer>
        <div class="footer-content">
            <p>
                &copy; 2020 Blip. Created by
                <a href="https://instagram.com/slyzyy" target="_blank">Auzan Zaky</a> &
                <a href="https://instagram.com/shiieta" target="_blank">Sita Evania.</a> All Rights
                Reserved.
            </p>
        </div>
    </footer>

    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>

</html>