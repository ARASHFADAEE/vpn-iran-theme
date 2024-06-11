
<?php get_template_part('/partials/head', 'head') ?>

<body>



    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header start-->
<?php get_header('single')?>
        <!--header end-->

<?php
        if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    
    
?>
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('<?php echo get_template_directory_uri()?>/assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <h1 class="fw-bold display-5"><?php the_title()?></h1>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog details section start-->
        <section class="blog-details ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 pe-5">
                        <div class="blog-details-wrap">


                            <?php the_content(); ?>
      

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="author-wrap text-center bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
                            <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/01/logo-footer.svg" alt="author" width="120" class="img-fluid shadow-sm rounded-circle">
                            <div class="author-info my-4">
                                <h5 class="mb-0">تولید کننده محتوا</h5>
                                <span class="small">نویسنده</span>
                            </div>
                            <p><?php get_the_author_meta()?></p>
   
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--blog details section end-->

        <!--related blog start-->

        
        <!--related blog end-->


        <!--footer section start-->
<?php get_footer() ?>
        <!--footer section end-->

    </div>


</body>
<?php
    endwhile;
endif;

?>
</html>