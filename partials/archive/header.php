<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-heading text-center">
                            <h1 class="display-5 fw-bold"><?php the_archive_title() ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8">

                        <?php
                        $categories = get_categories(array(
                            'hide_empty' => false,
                        ));

                        foreach ($categories as $category) {
                            $category_link = get_category_link($category->term_id);
                            echo '<a href=" ' . esc_url($category_link) . '" class="btn btn-soft-primary btn-pill btn-sm m-2">' . esc_html($category->name) . '</a>
        ';
                        }
                        ?>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
            </div>
        </section>