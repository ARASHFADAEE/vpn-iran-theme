<!--footer section start-->
        <footer class="footer-section">

            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 1402 وی پی ان ایران ؛ تمام حقوق محفوظ است . ارائه توسط <a href="https://google.com" class="text-decoration-none">mmmad</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <?php if (get_theme_mod('vpn_iran_facebook')) : ?>
                                        <li class="list-inline-item"><a href="<?php echo esc_url(get_theme_mod('vpn_iran_facebook')); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('vpn_iran_instagram')) : ?>
                                        <li class="list-inline-item"><a href="<?php echo esc_url(get_theme_mod('vpn_iran_instagram')); ?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('social_telegram')) : ?>
                                        <li class="list-inline-item"><a href="<?php echo esc_url(get_theme_mod('social_telegram')); ?>"><i class="fab fa-telegram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('contact_phone')) : ?>
                                        <li class="list-inline-item"><a href="tel:<?php echo esc_attr(get_theme_mod('contact_phone')); ?>"><i class="fas fa-phone"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('contact_email')) : ?>
                                        <li class="list-inline-item"><a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email')); ?>"><i class="fas fa-envelope"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
            <?php wp_footer() ?>
        </footer>

        <!--footer section end-->