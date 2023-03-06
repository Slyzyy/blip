<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/contact--.css') ?>">
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url('assets/js/ionicons.js') ?>"></script>
    <title>Contact Us</title>
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

    <div class="container">
        <a href="<?= base_url('all_products') ?>">
            <h2>Write us a message . . .</h2>
        </a>
    </div>

    <form action="<?php echo base_url() . 'contact/tambah_aksi'; ?>" method="post">
        <div class="contact">
            <div class="form">
                <div class="box1">
                    <input placeholder="Name" type="text" name="name" id="name" input autocomplete="off">
                </div>
                <div class="box2">
                    <input placeholder="Email" type="text" name="email" id="email" autocomplete="off">
                </div>
            </div>
            <div class="message">
                <div class="input" autocomplete="off">
                    <input class="message-input" placeholder="Message" type="text" name="messages" id="messages" autocomplete="off">
                </div>
            </div>
            <div class="button">
                <button class="submit-contact" type="submit">
                    Submit
                </button>
            </div>
        </div>
    </form>

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