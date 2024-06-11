<section class="masonary-blog-section ptb-120">
            <div class="container">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-article rounded-custom my-3">
                                    <a href="<?php the_permalink() ?>" class="article-img">
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="article" class="img-fluid">
                                    </a>
                                    <div class="article-content p-4">
                                        <div class="article-category mb-4 d-block">
                                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft"><?php the_category() ?></a>
                                        </div>
                                        <a href="blog-single.html">
                                            <h2 class="h5 article-title limit-2-line-text"><?php the_title() ?></h2>
                                        </a>
                                        <p class="limit-2-line-text"><?php the_excerpt() ?></p>

                                        <a href="javascript:;">
                                            <div class="d-flex align-items-center pt-4">
                                                <div class="avatar">
                                                    <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                                </div>
                                                <div class="avatar-info">
                                                    <h6 class="mb-0 avatar-name"><?php the_author() ?></h6>
                                                    <span class="small fw-medium text-muted"><?php the_date() ?></span>
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
                endif; ?>