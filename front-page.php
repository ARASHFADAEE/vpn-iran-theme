<?php get_template_part('/partials/head', 'head') ?>


<body>

    <!--main content wrapper start-->
    <div class="main-wrapper">

        <?php get_header() ?>

        <!--hero section start-->

        <?php get_template_part('partials/home/hero-section', 'hero-section') ?>
        <!--hero section end-->

        <!--faq section start-->
        <?php get_template_part('partials/home/faq', 'faq') ?>
        <!--faq section end-->

        <!--feature promo section start-->
        <?php get_template_part('partials/home/feature', 'feature') ?>

        <!--feature promo section end-->

        <!--why-choose us section start-->
        <?php get_template_part('partials/home/why-choose', 'why-choose') ?>

        <!--why choose us section end-->

        <!--image-feature section start-->

        <?php get_template_part('partials/home/image-feature', 'image-feature') ?>

        <!--image feature section end-->

        <!--pricing section start-->

        <?php get_template_part('partials/home/pricing', 'pricing') ?>

        <!--pricing section end-->

        <!--related blog start-->

    <?php get_template_part('partials/home/blog-card', 'blog-card') ?>


    <!--related blog end-->


    <?php get_footer() ?>

    </div>
    <!--main content wrapper end-->

</body>

</html>