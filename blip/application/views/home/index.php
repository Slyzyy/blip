<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?= base_url('assets/css/home--.css') ?>" />
    <!-- Slick -->
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css') ?>" />

    <!-- icons -->
    <script src="<?= base_url('assets/js/ionicons.js') ?>"></script>

    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/v4-shims.css') ?>" />
    <title>Index</title>
</head>

<body id="body">
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
            </li>
            <li>
                <a href="<?= base_url('user') ?>">
                    <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="slider">
        <div class="carousel">
            <div class="text-slider-wrapper">
                <div class="text-slider">
                    <div class="text-slide">
                        <h1>
                            We don't design clothes. <br />
                            We design dreams.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            Feel trendy. <br />
                            feel authentic.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            Explore your true style. <br />
                            Uniquely you.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            Be brilliant. Be bold. <br />
                            Be you.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            Shop <br />
                            Your style.
                        </h1>
                    </div>
                </div>
            </div>

            <div class="slider-control">
                <div class="prev">
                    <button type="button">
                        <ion-icon name="arrow-back"></ion-icon>
                    </button>
                </div>
                <div class="next">
                    <button type="button">
                        <ion-icon name="arrow-forward"></ion-icon>
                    </button>
                </div>
            </div>

            <div class="blocks">
                <div class="block-1"></div>
                <div class="block-2"></div>
                <div class="block-3"></div>
            </div>

            <div class="overlay"></div>

            <div class="image-slider">
                <div class="image-slide" id="one" style="background: url(img/slider/1.jpg) no-repeat;">
                    <img src="<?= base_url('assets/img/slider/1.jpg') ?>" alt="">
                </div>
                <div class="image-slide" id="two" style="background: url(img/slider-test/2-fixed.jpg) no-repeat;">
                    <img src="<?= base_url('assets/img/slider/2-1-1-1.jpg') ?>" alt="">
                </div>
                <div class="image-slide" id="three" style="background: url(img/slider-test/3-fixed.jpg) no-repeat;">
                    <img src="<?= base_url('assets/img/slider/3.jpg') ?>" alt="">
                </div>
                <div class="image-slide" id="four" style="background: url(img/slider-img-4.jpg) no-repeat;">
                    <img src="<?= base_url('assets/img/slider/4.jpg') ?>" alt=""></div>
                <div class="image-slide" id="five" style="background: url(img/slider-img-5.jpg) no-repeat;">
                    <img src="<?= base_url('assets/img/slider/5.jpg') ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="wrapper1">
            <div class="box1">
                <h2>New <br>Products <span class="dot"></span></h2>
            </div>
            <div class="box2">
                <a href="<?= base_url('dashboard/detail/14') ?>">
                    <h2>LEAF PRINT JACKET</h2>
                    <img src="<?= base_url('assets/img/thumbnail/10.jpg') ?>" alt="">
                </a>
            </div>
            <div class="box3">
                <a href="<?= base_url('dashboard/detail/33') ?>">
                    <h2>FABRIC HIGH-TOP HIKING SNEAKERS</h2>
                    <img src="<?= base_url('assets/img/thumbnail/3.jpg') ?>" alt="">
                </a>
            </div>
        </div>

        <div class="btn">
            <a href="<?= base_url('all_products ') ?>">
                <button type="button">SHOP ALL</button>
            </a>
        </div>

        <section class="category">
            <h2>Category <span class="dot"></span></h2>
            <center>
                <div class="wrapper2">
                    <div class="box1">
                        <a href="<?= base_url('kategori/men') ?>">
                            <h2>Men</h2>
                            <img src="<?= base_url('assets/img/thumbnail/12.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="box2">
                        <a href="<?= base_url('kategori/women') ?>">
                            <h2>Women</h2>
                            <img src="<?= base_url('assets/img/thumbnail/11.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="box3">
                        <a href="<?= base_url('kategori/accessories') ?>">
                            <h2>Accessories</h2>
                            <img src="<?= base_url('assets/img/thumbnail/14.jpg') ?>" alt="">
                        </a>
                    </div>
                </div>
            </center>
        </section>

        <div class="btn-footer">
            <button type="button" onclick="window.location.href='#body'">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>

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

    </div>

    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>

    <script>
        var sickPrimary = {
            autoplay: true,
            autoplaySpeed: 2400,
            slidesToShow: 2,
            slidesToScroll: 1,
            speed: 1800,
            cssEase: "cubic-bezier(.84, 0, .08, .99)",
            asNavFor: ".text-slider",
            centerMode: true,
            prevArrow: $(".prev"),
            nextArrow: $(".next")
        };

        var sickSecondary = {
            autoplay: true,
            autoplaySpeed: 2400,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1800,
            cssEase: "cubic-bezier(.84, 0, .08, .99)",
            asNavFor: ".image-slider",
            prevArrow: $(".prev"),
            nextArrow: $(".next")
        };

        $(".image-slider").slick(sickPrimary);
        $(".text-slider").slick(sickSecondary);
    </script>
</body>

</html>