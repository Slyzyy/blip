<div class="main_content">
    <div class="header">
        <ul>
            <li class="text-dark">
                <?php
                $keranjang = '<i class="fas fa-shopping-cart text-dark"></i><span class="text-dark mr-3"> ' . $this->cart->total_items() . ' items</span>' ?>
                <?= anchor('cart', $keranjang); ?>
            </li>
            <li class="mr-3"><?= $user['name']; ?></li>
            <li><img style="width: 5%;" class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"></li>
        </ul>
    </div>