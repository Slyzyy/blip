<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/cart__.css') ?>">
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url('assets/js/ionicons.js') ?>"></script>
    <title>Cart</title>
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
                $keranjang = '<i class="fas fa-shopping-cart"> </i> ' . $this->cart->total_items() ?>
                <?= anchor('cart', $keranjang); ?>
            <li>
                <a href="<?= base_url('user') ?>">
                    <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <center>
            <h2>Your Cart</h2>
        </center>
    </div>

    <div class="alignment">
        <table class="table">
            <center>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Total Item</th>
                        <th>Price</th>
                        <th>Sub - Total</th>
                    </tr>
                </thead>

                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) :
                ?>

                    <tbody>
                        <tr>
                            <td data-label="S.No"><?= $no++ ?></td>
                            <td data-label="S.No"><?= $items['name'] ?></td>
                            <td data-label="S.No"><?= $items['qty'] ?></td>
                            <td data-label="S.No">IDR. <?= number_format($items['price'], 0, ',', '.') ?></td>
                            <td data-label="S.No">IDR. <?= number_format($items['subtotal'], 0, ',', '.')  ?></td>
                        </tr>

                    <?php endforeach; ?>

                    <tr>
                        <td colspan="4"></td>
                        <td align="right">IDR. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
                    </tr>
                    </tbody>

            </center>
        </table>
        <div colspan="4" class="button" align="right">
            <a href="<?= base_url('dashboard/hapus_keranjang') ?>">
                <div class="btn-delete">Delete Cart</div>
            </a>
            <a href="<?= base_url('all_products') ?>">
                <div class="btn-continue">Continue Shopping</div>
            </a>
            <a href="<?= base_url('payment') ?>">
                <div class="btn-check-out">Check Out</div>
            </a>
        </div>
    </div>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>