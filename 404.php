<?php get_template_part( '/partials/head', 'head' )?>

<?php get_header()?>
<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->

    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--404 section start-->
        <section class="error-section ptb-120 bg-dark min-vh-100 w-100 d-flex flex-column justify-content-center" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="error-page-content-wrap">
                            <h2 class="error-404 text-warning">404</h2>
                            <h1 class="display-5 fw-bold">صفحه پیدا نشد</h1>
                            <p class="lead"> به طور کارآمد سناریوهای نسل بعدی بدون شبکه های متمرکز را دوباره اختراع کنید. به صورت مشارکتی ، فناوری برتر را قبل از پتانسیل های قوی تولید کنید. </p>

                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary mt-4">برگشت به خانه</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mt-5 d-none d-md-block d-lg-block">
                        <div class="hero-img position-relative circle-shape-images">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element circle-shape-list">
                                <li class="layer" data-depth="0.03">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-0 hero-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-1 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-2 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-3 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-4 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/circle-1.svg" alt="shape" class="circle-shape-item type-5 hero-1">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/vpnimage.png" alt="hero img" class="img-fluid position-relative z-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--404 section end-->

    </div>
    <!--main content wrapper end-->

<?php get_footer() ?>

</body>

</html>