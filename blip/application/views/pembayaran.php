<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h2>Total : IDR. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h3>Contact Information & Shipping Address</h3>
            <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="POST">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input name="nama" type="text" placeholder="Enter Your Full Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <input name="alamat" type="text" placeholder="Enter Your Shipping Address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="number" placeholder="Enter Your Phone Number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Shipping</label>
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
                    <label for="">Payment</label>
                    <select name="" id="" class="form-control" required>
                        <option value="" disabled>Select Payment Services</option>
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BNI - XXXXXX</option>
                        <option value="">BRI - XXXXXX</option>
                        <option value="">Mandiri - XXXXXX</option>
                    </select>
                </div>
                <button class="btn btn-sm btn-secondary" type="submit">Checkout</button>
            </form>

        <?php
                } else {
                    echo "<h4>Your Cart is Empty !";
                }
        ?>

        </div>
    </div>
</div>