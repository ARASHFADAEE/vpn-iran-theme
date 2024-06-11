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
                                            <a href="<?php the_permalink() ?>" class="d-inline-block text-dark badge bg-warning-soft"><?php echo get_category_name() ?></a>
                                        </div>
                                        <a href="<?php the_permalink() ?>">
                                            <h2 class="h5 article-title limit-2-line-text"><?php the_title() ?></h2>
                                        </a>
                                        <p class="limit-2-line-text"><?php the_excerpt() ?></p>

                                        <a href="<?php the_permalink() ?>">
                                            <div class="d-flex align-items-center pt-4">
                                                <div class="avatar">
                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2021/01/logo-footer.svg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                                </div>
                                                <div class="avatar-info">
                                                    <h6 class="mb-0 avatar-name">تولید کننده محتوا</h6>
                                                    <span class="small fw-medium text-muted"><?php the_date() ?></span>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
            </div>
        </section>

<?php
                    endwhile;
                endif; ?>