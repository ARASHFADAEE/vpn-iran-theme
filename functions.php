
<?php
// جلوگیری از دسترسی مستقیم
if (!defined('ABSPATH')) {
    exit;
}

// تعریف ثابت‌های قالب
define('VPN_IRAN_THEME_VERSION', '2.0.0');
define('VPN_IRAN_THEME_DIR', get_template_directory());
define('VPN_IRAN_THEME_URI', get_template_directory_uri());

// بارگذاری فایل‌های CSS و JS
function vpn_iran_enqueue_scripts() {
    // اضافه کردن ورژن برای cache busting
    $theme_version = wp_get_theme()->get('Version');
    
    // CSS Files
    wp_enqueue_style('vpn-iran-custom', VPN_IRAN_THEME_URI . '/assets/css/custom.css', array(), VPN_IRAN_THEME_VERSION);
    wp_enqueue_style('vpn-iran-main-rtl', VPN_IRAN_THEME_URI . '/assets/css/main-rtl.min.css', array(), VPN_IRAN_THEME_VERSION);
    
    // JavaScript Files
    wp_deregister_script('jquery'); // حذف jQuery پیش‌فرض وردپرس
    wp_enqueue_script('jquery', VPN_IRAN_THEME_URI . '/assets/js/vendors/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap-bundle', VPN_IRAN_THEME_URI . '/assets/js/vendors/bootstrap.bundle.min.js', array('jquery'), VPN_IRAN_THEME_VERSION, true);
    wp_enqueue_script('swiper', VPN_IRAN_THEME_URI . '/assets/js/vendors/swiper-bundle.min.js', array(), VPN_IRAN_THEME_VERSION, true);
    wp_enqueue_script('magnific-popup', VPN_IRAN_THEME_URI . '/assets/js/vendors/jquery.magnific-popup.min.js', array('jquery'), VPN_IRAN_THEME_VERSION, true);
    wp_enqueue_script('parallax', VPN_IRAN_THEME_URI . '/assets/js/vendors/parallax.min.js', array(), VPN_IRAN_THEME_VERSION, true);
    wp_enqueue_script('aos', VPN_IRAN_THEME_URI . '/assets/js/vendors/aos.js', array(), VPN_IRAN_THEME_VERSION, true);
    wp_enqueue_script('vpn-iran-app', VPN_IRAN_THEME_URI . '/assets/js/app.js', array('jquery'), VPN_IRAN_THEME_VERSION, true);
    
    // Localize script for AJAX
    wp_localize_script('vpn-iran-app', 'vpn_iran_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('vpn_iran_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'vpn_iran_enqueue_scripts');

// تنظیمات اولیه قالب
function vpn_iran_theme_setup() {
    // پشتیبانی از title tag
    add_theme_support('title-tag');
    
    // پشتیبانی از فیدهای خودکار
    add_theme_support('automatic-feed-links');
    
    // پشتیبانی از تصاویر شاخص
    add_theme_support('post-thumbnails');
    
    // پشتیبانی از منوهای وردپرس
    add_theme_support('menus');
    
    // ثبت منوهای قالب
    register_nav_menus(array(
        'primary' => __('منوی اصلی', 'vpn-iran'),
        'footer' => __('منوی فوتر', 'vpn-iran'),
    ));
    
    // پشتیبانی از HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // پشتیبانی از لوگوی سفارشی
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'vpn_iran_theme_setup');

// تنظیم طول خلاصه نوشته
function custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// تنظیم متن بعد از خلاصه
function custom_excerpt_more($more) {
    return ' ...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// نمایش نام دسته‌بندی
function get_category_name() {
    $categories = get_the_category();
    if (!empty($categories)) {
        return esc_html($categories[0]->name);
    }
    return false;
}

// تابع fallback برای منوی اصلی
function vpn_iran_fallback_menu() {
    echo '<ul class="nav col-12 col-md-auto justify-content-center main-menu">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">خانه</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/blog')) . '">مقالات آموزشی</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#price">تعرفه ها</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#faq">سوالات متداول</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#contact">تماس با ما</a></li>';
    echo '</ul>';
}

// تنظیمات Theme Customizer
function vpn_iran_customize_register($wp_customize) {
    // بخش تنظیمات عمومی
    $wp_customize->add_section('vpn_iran_general', array(
        'title' => __('تنظیمات عمومی', 'vpn-iran'),
        'priority' => 30,
    ));
    
    // تنظیم لوگوی سفید
    $wp_customize->add_setting('vpn_iran_logo_white', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vpn_iran_logo_white', array(
        'label' => __('لوگوی سفید (برای هدر)', 'vpn-iran'),
        'section' => 'vpn_iran_general',
        'settings' => 'vpn_iran_logo_white',
    )));
    
    // تنظیم لوگوی رنگی
    $wp_customize->add_setting('vpn_iran_logo_color', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vpn_iran_logo_color', array(
        'label' => __('لوگوی رنگی (برای منوی موبایل)', 'vpn-iran'),
        'section' => 'vpn_iran_general',
        'settings' => 'vpn_iran_logo_color',
    )));
    
    // تنظیم عنوان سایت
    $wp_customize->add_setting('vpn_iran_site_title', array(
        'default' => 'وی پی ان ایران',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_site_title', array(
        'label' => __('عنوان سایت', 'vpn-iran'),
        'section' => 'vpn_iran_general',
        'type' => 'text',
    ));
    
    // تنظیم توضیحات سایت
    $wp_customize->add_setting('vpn_iran_site_description', array(
        'default' => 'خرید vpn ایران بدون محدودیت و بدون مشکل در اتصال',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('vpn_iran_site_description', array(
        'label' => __('توضیحات سایت', 'vpn-iran'),
        'section' => 'vpn_iran_general',
        'type' => 'textarea',
    ));
    
    // بخش تنظیمات صفحه اصلی
    $wp_customize->add_section('vpn_iran_homepage', array(
        'title' => __('تنظیمات صفحه اصلی', 'vpn-iran'),
        'priority' => 31,
    ));
    
    // عنوان بخش Hero
    $wp_customize->add_setting('vpn_iran_hero_title', array(
        'default' => 'وی پی ان ایران بدون محدودیت',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_hero_title', array(
        'label' => __('عنوان بخش اصلی', 'vpn-iran'),
        'section' => 'vpn_iran_homepage',
        'type' => 'text',
    ));
    
    // توضیحات بخش Hero
    $wp_customize->add_setting('vpn_iran_hero_description', array(
        'default' => 'خرید vpn ایران بدون محدودیت و بدون مشکل در اتصال',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('vpn_iran_hero_description', array(
        'label' => __('توضیحات بخش اصلی', 'vpn-iran'),
        'section' => 'vpn_iran_homepage',
        'type' => 'textarea',
    ));
    
    // بخش تنظیمات ویژگی‌ها
    $wp_customize->add_section('vpn_iran_features', array(
        'title' => __('تنظیمات ویژگی‌ها', 'vpn-iran'),
        'priority' => 32,
    ));
    
    // عنوان بخش ویژگی‌ها
    $wp_customize->add_setting('vpn_iran_features_title', array(
        'default' => 'با تمام ویژگی های مورد نیاز شما',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_features_title', array(
        'label' => __('عنوان بخش ویژگی‌ها', 'vpn-iran'),
        'section' => 'vpn_iran_features',
        'type' => 'text',
    ));
    
    // بخش تنظیمات قیمت‌گذاری
    $wp_customize->add_section('vpn_iran_pricing', array(
        'title' => __('تنظیمات قیمت‌گذاری', 'vpn-iran'),
        'priority' => 33,
    ));
    
    // قیمت پلن اول
    $wp_customize->add_setting('vpn_iran_price_basic', array(
        'default' => '25',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_price_basic', array(
        'label' => __('قیمت پلن پایه (تومان)', 'vpn-iran'),
        'section' => 'vpn_iran_pricing',
        'type' => 'number',
    ));
    
    // قیمت پلن دوم
    $wp_customize->add_setting('vpn_iran_price_pro', array(
        'default' => '50',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_price_pro', array(
        'label' => __('قیمت پلن حرفه‌ای (تومان)', 'vpn-iran'),
        'section' => 'vpn_iran_pricing',
        'type' => 'number',
    ));
    
    // قیمت پلن سوم
    $wp_customize->add_setting('vpn_iran_price_premium', array(
        'default' => '75',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vpn_iran_price_premium', array(
        'label' => __('قیمت پلن اختصاصی (تومان)', 'vpn-iran'),
        'section' => 'vpn_iran_pricing',
        'type' => 'number',
    ));
    
    // بخش تنظیمات تماس
    $wp_customize->add_section('vpn_iran_contact', array(
        'title' => __('تنظیمات تماس', 'vpn-iran'),
        'priority' => 34,
    ));
    
    // شبکه‌های اجتماعی
    $wp_customize->add_setting('vpn_iran_facebook', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('vpn_iran_facebook', array(
        'label' => __('لینک فیسبوک', 'vpn-iran'),
        'section' => 'vpn_iran_contact',
        'type' => 'url',
    ));
    
    $wp_customize->add_setting('vpn_iran_instagram', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('vpn_iran_instagram', array(
        'label' => __('لینک اینستاگرام', 'vpn-iran'),
        'section' => 'vpn_iran_contact',
        'type' => 'url',
    ));
}
add_action('customize_register', 'vpn_iran_customize_register');

// ثبت ناحیه‌های ویجت
function vpn_iran_widgets_init() {
    register_sidebar(array(
        'name'          => __('ساید بار اصلی', 'vpn-iran'),
        'id'            => 'sidebar-1',
        'description'   => __('ناحیه ویجت ساید بار اصلی', 'vpn-iran'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('فوتر ستون 1', 'vpn-iran'),
        'id'            => 'footer-1',
        'description'   => __('ناحیه ویجت فوتر ستون اول', 'vpn-iran'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('فوتر ستون 2', 'vpn-iran'),
        'id'            => 'footer-2',
        'description'   => __('ناحیه ویجت فوتر ستون دوم', 'vpn-iran'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('فوتر ستون 3', 'vpn-iran'),
        'id'            => 'footer-3',
        'description'   => __('ناحیه ویجت فوتر ستون سوم', 'vpn-iran'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'vpn_iran_widgets_init');

// تابع امنیتی برای escape کردن متن
function vpn_iran_esc($text) {
    return esc_html($text);
}

// تابع دریافت تصویر پیش‌فرض
function vpn_iran_get_default_image() {
    return get_template_directory_uri() . '/assets/img/default-blog.jpg';
}

// تابع بررسی وجود تصویر شاخص
function vpn_iran_has_featured_image() {
    return has_post_thumbnail() && get_the_post_thumbnail_url();
}

// تابع نمایش تصویر شاخص یا پیش‌فرض
function vpn_iran_display_post_image($size = 'large', $class = 'img-fluid') {
    if (vpn_iran_has_featured_image()) {
        the_post_thumbnail($size, array('class' => $class, 'alt' => get_the_title()));
    } else {
        echo '<img src="' . esc_url(vpn_iran_get_default_image()) . '" alt="' . esc_attr(get_the_title()) . '" class="' . esc_attr($class) . '">';
    }
}

// تابع دریافت لینک امن
function vpn_iran_get_safe_url($url, $fallback = '#') {
    return !empty($url) ? esc_url($url) : $fallback;
}

// تابع دریافت متن امن
function vpn_iran_get_safe_text($text, $fallback = '') {
    return !empty($text) ? esc_html($text) : $fallback;
}
