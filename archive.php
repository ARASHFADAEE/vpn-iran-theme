<?php get_template_part('/partials/head', 'head') ?>

<body>
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <?php get_header('single') ?>

        <!--page header section start-->
        <?php get_template_part( 'partials/archive/header', 'header' )?>
        <!--page header section end-->

        <!--blog section start-->
        <?php get_template_part( 'partials/archive/blog-card', 'blog-card' )?>

         <!--blog section end-->

<?php get_footer() ?>

    </div>


</body>

</html>