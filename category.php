
<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->

    <!--main content wrapper start-->
    <div class="main-wrapper">
<?php get_header('single')?>

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-heading text-center">
                            <h1 class="display-5 fw-bold"><?php the_category()?></h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8">
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">مارکتینگ</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">حراجی</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">طراحی</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">توسعه</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">طراحی محصول</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">مشتریان</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">آژانس</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">سرمایه گذاران</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">پژوهش</a>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog section start-->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
            <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft"><?php the_category()?></a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text"><?php the_title()?></h2>
                                </a>
                                <p class="limit-2-line-text"><?php the_excerpt()?></p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name"><?php the_author()?></h6>
                                            <span class="small fw-medium text-muted"><?php the_date()?></span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

                <!--pagination start-->
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-auto my-1">
                        <a href="#" class="btn btn-soft-primary btn-sm">قبلی</a>
                    </div>
                    <div class="col-auto my-1">
                        <nav>
                            <ul class="pagination rounded mb-0">
                                <li class="page-item"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto my-1">
                        <a href="#" class="btn btn-soft-primary btn-sm">بعدی</a>
                    </div>
                </div>
                <!--pagination end-->
            </div>
        </section>

        <?php
    endwhile;
endif;?>
        <!--blog section end-->

<?php get_footer() ?>

    </div>


</body>

</html>