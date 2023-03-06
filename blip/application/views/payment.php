<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/payment.css') ?>">
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Payment</title>
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
                $keranjang = 'Cart : ' . $this->cart->total_items() . ' items' ?>
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
            <h2>Contact Information & Shipping Address</h2>
        </a>
    </div>

    <div class="alignment">
        <div class="price-info">
            <?php
            $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h2>Total : IDR. " . number_format($grand_total, 0, ',', '.');
            ?>
        </div>
        <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="POST">
            <div class="form-group">
                <label for="">Full Name</label><br>
                <input name="nama" type="text" placeholder="Enter Your Full Name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Shipping Address</label><br>
                <input name="alamat" type="text" placeholder="Enter Your Shipping Address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label><br>
                <input type="number" placeholder="Enter Your Phone Number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Shipping</label><br>
                <select name="" id="" class="form-control" required>
                    <option value="" disabled>Select Shipping Services</option>
                    <option value="">JNE</option>
                    <option value="">J&T</option>
                    <option value="">POS</option>
                    <option value="">GOJEK</option>
                    <option value="">GRAB</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Payment</label><br>
                <select name="" id="" class="form-control" required>
                    <option value="" disabled>Select Payment Services</option>
                    <option value="">BCA - XXXXXX</option>
                    <option value="">BNI - XXXXXX</option>
                    <option value="">BRI - XXXXXX</option>
                    <option value="">Mandiri - XXXXXX</option>
                </select>
            </div>
            <button class="btn-checkout" type="submit">Checkout</button>
        </form>
    <?php
            } else {
                echo "<h4>Your Cart is Empty !";
            }
    ?>
    </div>
</body>

</html>