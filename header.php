<!--header start-->
<header class="main-header position-absolute w-100">
    <nav class="navbar navbar-expand-xl navbar-dark sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="<?php echo get_home_url() ?>" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" alt="logo" class="img-fluid logo-white">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-color.png" alt="logo" class="img-fluid logo-color">
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
            </a>

            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php echo get_home_url() ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            خانه
                        </a>
                    </li>
                    <li><a href="<?php echo get_home_url() ?>/blog" class="nav-link">مقالات آموزشی</a></li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#price">تعرفه ها</a>

                    </li>
                    <li><a href="#faq" class="nav-link">سوالات متداول</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">درباره ما</a>

                    </li>
                </ul>
            </div>

            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <!-- <a href="login.html" class="btn btn-link text-decoration-none me-2">ورود</a> -->
                <a href="#price" class="btn btn-primary">خرید سرویس</a>
            </div>

            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-color.png" alt="logo" class="img-fluid ps-2">
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="far fa-close"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                خانه
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow-lg py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-half">
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">مقالات آموزشی</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#price" role="button">تعرفه ها</a>

                        </li>
                        <li><a href="#faq" class="nav-link">سوالات متداول</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">درباره ما</a>

                        </li>
                    </ul>
                    <div class="action-btns mt-4 pe-3">
                        <!-- <a href="login.html" class="btn btn-outline-primary me-2">ورود</a> -->
                        <a href="request-demo.html" class="btn btn-primary">درخواست</a>
                    </div>
                </div>

            </div>
            <!--offcanvas menu end-->
        </div>
    </nav>
</header>
<!--header end-->