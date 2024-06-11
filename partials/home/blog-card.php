<section class="related-blog-list ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">مقالات آموزشی</h4>
                            <h2>آخرین مقالات آموزشی در سایت</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                            <a href="blog.html" class="btn btn-primary">مشاهده همه مقالات</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);

                    ?>

                    <?php if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-article rounded-custom mb-4 mb-lg-0">
                                    <a href="<?php the_permalink() ?>" class="article-img">
                                        <?php the_post_thumbnail('large', ['class' => 'img-fluid', 'title' => 'Feature image']) ?>
                                    </a>
                                    <div class="article-content p-4">
                                        <div class="article-category mb-4 d-block">
                                            <?php echo get_category_name(); ?></a>
                                        </div>
                                        <a href="<?php the_permalink() ?>">
                                            <h2 class="h5 article-title limit-2-line-text"><?php the_title(); ?></h2>
                                        </a>
                                        <p class="limit-2-line-text"><?php the_excerpt(); ?></p>

                                        <a href="javascript:;">
                                            <div class="d-flex align-items-center pt-4">
                                                <div class="avatar">
                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2021/01/logo-footer.svg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                                </div>
                                                <div class="avatar-info">
                                                    <h6 class="mb-0 avatar-name">تولید کننده محتوا</h6>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>

                </div>
            </div>
    </div>
    </section>