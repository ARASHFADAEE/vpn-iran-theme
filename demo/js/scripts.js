/*================
 Template Name: Hostlar Hosting Provider with WHMCS Template
 Description: All type of web hosting provider or company with WHMCS template.
 Version: 1.0
 Author: https://themeforest.net/user/themetags
=======================*/

// TABLE OF CONTENTS
// 1. preloader
// 2. mega menu js
// 3. headerroom
// 4. scroll bottom to top
// 5. custom vps hosting plan js
// 6. monthly and yearly pricing switch
// 7. tooltip
// 8. magnify popup video
// 9. hero slider one
// 10. hero slider two
// 11. client-testimonial carousel
// 12. client logo item carousel
// 13. team member carousel
// 14. video background
// 15. wow js
// 16. countdown or coming soon
// 17. sticky sidebar
// 18. chat api js


jQuery(function ($) {

    'use strict';

    // 1. preloader
    $(window).ready(function () {
        $('#preloader').delay(200).fadeOut('fade');
    });

    // 2. mega menu js
    $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
    });

    // 3. headerroom
    var Header = document.querySelector('#header');
    var headroom = new Headroom(Header, {
        "offset": 205,
        "tolerance": 5,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });
    headroom.init();

        // 4. scroll bottom to top
      $(window).on('scroll', function () {
        if ($(window).scrollTop() > $(window).height()) {
          $('.scroll-to-target').addClass('open');
        } else {
          $('.scroll-to-target').removeClass('open');
        }
        if ($('.scroll-to-target').length) {
          $(".scroll-to-target").on('click', function () {
            var target = $(this).attr('data-target');
            var new_time = new Date();
            if (!this.old_time || new_time - this.old_time > 1000) {
            // animate
              $('html, body').animate({
                scrollTop: $(target).offset().top
              }, 500);
              this.old_time = new_time;
            }
          });
        }
      });


    // 2. page scrolling feature - requires jQuery Easing plugin
    $(function () {
        $(document).on('click', 'a.page-custom-nav-link', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 58
            }, 900, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // 3. closes the responsive menu on menu item click
    $(".navbar-nav li a").on("click", function(event) {
        if (!$(this).parent().hasClass('dropdown'))
            $(".navbar-collapse").collapse('hide');
    });

    // 18. chat api js
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5e19bb9b27773e0d832d0621/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

}); // JQuery end