<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/all-products-_.css') ?>" />
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url('assets/js/ionicons.js') ?>"></script>
    <title>All Products</title>
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
                $keranjang = '<i class="fas fa-shopping-cart"> </i> ' . $this->cart->total_items() . '' ?>
                <?= anchor('cart', $keranjang); ?>
            <li>
                <a href="<?= base_url('user') ?>">
                    <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <a href="<?= base_url('all_products') ?>">
            <h2>Shop / All Products</h2>
        </a>
    </div>

    <section>
        <div class="all-product">
            <div class="sidebar">
                <h2>Category</h2>

                <?= form_open('all_products/search') ?>
                <div class="search">
                    <input class="input-search" type="text" name="keyword" placeholder="Search" autocomplete="off">
                    <input class="btn-search" type="submit" name="search_submit" value="Search">
                </div>
                <?= form_close() ?>


                <ul>
                    <li><a href="<?= base_url('kategori/men') ?>">Men</a></li>
                    <li><a href="<?= base_url('kategori/women') ?>">Women</a></li>
                    <li><a href="<?= base_url('kategori/accessories') ?>">Accessories</a></li>
                </ul>
            </div>
            <div class="catalog">
                <?php foreach ($barang as $brg) : ?>
                    <div class="product">
                        <div class="imgbox">
                            <img src="<?= base_url('/uploads/products/' . $brg->gambar) ?>" alt="" />
                        </div>
                        <div class="details">
                            <h2><?= $brg->nama_brg; ?><br /><span><?= $brg->kategori; ?></span></h2>
                            <div class="price">IDR. <?= number_format($brg->harga, 0, ',', '.'); ?></div>
                            <a class="prod-details" href="<?= base_url('dashboard/detail/') . $brg->id_brg ?>">Product Details</a>
                            <a class="cart" href="<?= base_url('dashboard/tambah_ke_keranjang/' . $brg->id_brg); ?>">Add to Cart</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

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
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>