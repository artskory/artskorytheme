        </div><!-- Fin main -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container d-none d-md-block">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Widget area -->
                        <?php if ( is_active_sidebar( 'widget-text-area' ) ) : ?>
                            <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                                <?php dynamic_sidebar( 'widget-text-area' ); ?>
                            </div><!-- Fin widget area -->
                        <?php endif; ?>
                    </div>

                    <!-- Mini artwork -->
                    <div class="col-md-4">
                        <h3>Mes dernières réalisations</h3>
                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=3');
                        ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <div class="row mb-1">
                            <div class="col-md-3">
                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                    <?php
                                        if( has_post_thumbnail() ) {
                                          the_post_thumbnail('artskory_thumbnail_footer');
                                        } else {
                                          echo '<img src="' .  get_bloginfo('template_directory') . '/img/no-image.jpg" width="65" height="55"/>';
                                    }?>
                                </a>
                            </div>
                            <div class="col-md-9">
                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                    <h6><?php the_title(); ?></h6>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div><!-- Fin mini artwork -->

                    <div class="col-md-4">
                        <div class="row">

                            <!-- Search -->
                            <div class="col search-col">
                                <h3>Rechercher sur le site</h3>
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'secondary',
                                        'theme_location'    => 'secondary',
                                        'depth'             => 2,
                                        'container'         => '',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </div><!-- Fin search -->

                        </div>

                        <!-- Social -->
                        <div class="row social">
                            <div class="col-md-12">
                                <h3>Social</h3>
                                <a href="<?php echo get_theme_mod('facebook_link'); ?>" class="btn btn-social-icon btn-facebook" target="_blank"><span class="ak ak-facebook"></span></a>
                                <a href="<?php echo get_theme_mod('linkedin_link'); ?>" class="btn btn-social-icon btn-linkedin" target="_blank"><span class="ak ak-linkedin"></span></a>
                                <a href="<?php echo get_theme_mod('viadeo_link'); ?>" class="btn btn-social-icon btn-odnoklassniki" target="_blank"><span class="ak ak-viadeo"></span></a>
                                <a href="<?php echo get_theme_mod('pinterest_link'); ?>" class="btn btn-social-icon btn-pinterest" target="_blank"><span class="ak ak-pinterest"></span></a>
                                <a href="<?php echo get_theme_mod('github_link'); ?>" class="btn btn-social-icon btn-github" target="_blank"><span class="ak ak-github"></span></a>
                                <a href="<?php echo get_theme_mod('google_link'); ?>" class="btn btn-social-icon btn-google" target="_blank"><span class="ak ak-google"></span></a>
                                <a href="<?php echo get_theme_mod('adn_link'); ?>" class="btn btn-social-icon btn-adn" target="_blank"><span class="ak ak-adn"></span></a>
                                <a href="<?php echo get_theme_mod('bitbucket_link'); ?>" class="btn btn-social-icon btn-bitbucket" target="_blank"><span class="ak ak-bitbucket"></span></a>
                                <a href="<?php echo get_theme_mod('dropbox_link'); ?>" class="btn btn-social-icon btn-dropbox" target="_blank"><span class="ak ak-dropbox"></span></a>
                                <a href="<?php echo get_theme_mod('flickr_link'); ?>" class="btn btn-social-icon btn-flickr" target="_blank"><span class="ak ak-flickr"></span></a>
                                <a href="<?php echo get_theme_mod('foursquare_link'); ?>" class="btn btn-social-icon btn-foursquare" target="_blank"><span class="ak ak-foursquare"></span></a>
                                <a href="<?php echo get_theme_mod('instagram_link'); ?>" class="btn btn-social-icon btn-instagram" target="_blank"><span class="ak ak-instagram"></span></a>
                                <a href="<?php echo get_theme_mod('microsoft_link'); ?>" class="btn btn-social-icon btn-microsoft" target="_blank"><span class="ak ak-microsoft"></span></a>
                                <a href="<?php echo get_theme_mod('odnoklassniki_link'); ?>" class="btn btn-social-icon btn-odnoklassniki" target="_blank"><span class="ak ak-odnoklassniki"></span></a>
                                <a href="<?php echo get_theme_mod('openid_link'); ?>" class="btn btn-social-icon btn-openid" target="_blank"><span class="ak ak-openid"></span></a>
                                <a href="<?php echo get_theme_mod('reddit_link'); ?>" class="btn btn-social-icon btn-reddit" target="_blank"><span class="ak ak-reddit"></span></a>
                                <a href="<?php echo get_theme_mod('soundcloud_link'); ?>" class="btn btn-social-icon btn-soundcloud" target="_blank"><span class="ak ak-soundcloud"></span></a>
                                <a href="<?php echo get_theme_mod('tumblr_link'); ?>" class="btn btn-social-icon btn-tumblr" target="_blank"><span class="ak ak-tumblr"></span></a>
                                <a href="<?php echo get_theme_mod('twitter_link'); ?>" class="btn btn-social-icon btn-twitter" target="_blank"><span class="ak ak-twitter"></span></a>
                                <a href="<?php echo get_theme_mod('vimeo_link'); ?>" class="btn btn-social-icon btn-vimeo" target="_blank"><span class="ak ak-vimeo"></span></a>
                                <a href="<?php echo get_theme_mod('vk_link'); ?>" class="btn btn-social-icon btn-vk" target="_blank"><span class="ak ak-vk"></span></a>
                                <a href="<?php echo get_theme_mod('yahoo_link'); ?>" class="btn btn-social-icon btn-yahoo" target="_blank"><span class="ak ak-yahoo"></span></a>
                            </div>
                        </div><!-- Fin Social -->

                    </div>
                </div>
            </div>

            <!-- Mini footer -->
            <div class="row">
                <div class="col">
                    <div class="container main-footer-bottom main-footer-content">
                        <p><a href="<?php echo get_theme_mod('website_link'); ?>"><?php echo get_theme_mod('website_title'); ?></a> - <?php echo get_theme_mod('footer_text'); ?> - <a href="<?php echo get_theme_mod('legal_link'); ?>">Mentions Légales</a></p>
                    </div>
                </div>
            </div><!-- Fin mini footer -->

        </footer><!-- Fin footer -->

        <!-- ScrollToTop -->
        <button id="scrollToTop" onclick="scrolltop();" data-scroll="up">
            <i class="ak ak-chevron-up ak-color-white"></i>
        </button><!-- Fin scrollToTop -->

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- Cookiechoices -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/cookiechoices.min.js"></script>
        <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('<?php echo get_theme_mod('message'); ?>', '<?php echo get_theme_mod('validation'); ?>', '<?php echo get_theme_mod('more'); ?>', '<?php echo get_theme_mod('legal_link'); ?>');});</script>
        <!-- Google Analytics -->
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-83257814-1', 'auto');
            ga('send', 'pageview');</script>
        <!-- Wow -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/artskory.wow.min.js"></script>
        <!-- Maps -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/maps.min.js"></script>
    </body>
</html>
