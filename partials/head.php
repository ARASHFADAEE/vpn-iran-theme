<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="robots" content="index, follow">
    
    <?php if (is_singular() && get_the_excerpt()) : ?>
        <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
    <?php else : ?>
        <meta name="description" content="<?php echo esc_attr(get_theme_mod('vpn_iran_site_description', get_bloginfo('description'))); ?>">
    <?php endif; ?>
    
    <meta name="author" content="<?php echo esc_attr(get_theme_mod('vpn_iran_site_title', get_bloginfo('name'))); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="<?php echo is_single() ? 'article' : 'website'; ?>">
    <meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(is_singular() && get_the_excerpt() ? wp_strip_all_tags(get_the_excerpt()) : get_bloginfo('description')); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    
    <?php if (has_post_thumbnail() && is_singular()) : ?>
        <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
    <?php endif; ?>
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.png'); ?>" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.png">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>