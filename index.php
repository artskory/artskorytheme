<?php get_header(); ?>

            <!-- Background video -->
            <section class="bgvideo d-none d-md-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="filter-video embed-responsive embed-responsive-16by9-index">
                            <div id="coordinates">
                                <input type="hidden" id="video_1" value=<?php echo echo_theme_movie_1(); ?>>
                                <input type="hidden" id="video_2" value=<?php echo echo_theme_movie_2(); ?>>
                                <input type="hidden" id="video_3" value=<?php echo echo_theme_movie_3(); ?>>
                            </div>
                            <video preload="auto" autoplay="true" loop="true" width="100%">
                                 <script type="text/javascript">randomVideo();</script>
                            </video>
                        </div>

                        <!-- Text superposé -->
                        <div class="flex-center">
                            <center class="superpose">
                                <h1>
                                    <?php
                                        echo get_theme_mod('setting_title_h1', "Changer ce texte");
                                    ?>
                                </h1>
                                <h2>
                                    <?php
                                        echo get_theme_mod('setting_title_h2', "Changer ce texte");
                                    ?>
                                </h2>
                                <p>
                                    <?php
                                        echo get_theme_mod('setting_paragraph', "Changer ce texte");
                                    ?>
                                </p>
                                <a class="btn white" href="<?php echo get_theme_mod('setting_link'); ?>">
                                    <?php
                                        echo get_theme_mod('setting_button', "Changer ce texte");
                                    ?>
                                </a>
                            </center>
                        </div><!-- Fin text superposé -->

                    </div>
                </div>
            </section><!-- Fin background video -->

            <!-- Jumbotron -->
            <div class="jumbotron d-md-none">
                <center class="container">
                    <h1>
                        <?php
                            echo get_theme_mod('setting_title_h1', "Changer ce texte");
                        ?>
                    </h1>
                    <h2>
                        <?php
                            echo get_theme_mod('setting_title_h2', "Changer ce texte");
                        ?>
                    </h2>
                    <p>
                        <?php
                            echo get_theme_mod('setting_paragraph', "Changer ce texte");
                        ?>
                    </p>
                    <a class="btn white" href="<?php echo get_theme_mod('setting_link'); ?>">
                        <?php
                            echo get_theme_mod('setting_button', "Changer ce texte");
                        ?>
                    </a>
                </center>
            </div><!-- Fin jumbotron -->

            <!-- Artwork -->
            <section class="project-designs">
                <div class="container" role="main">
                    <h2 class="mb-4 mt-5">Mes <strong>dernières réalisations</strong></h2>
                    <div class="row mt-5 mb-5">
                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=3');
                        ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <article class="col-md-4 grow">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="card mb-4 box-shadow">
                                    <?php
                                            if( has_post_thumbnail() ) {
                                              the_post_thumbnail();
                                            } else {
                                              echo '<img src="' .  get_bloginfo('template_directory') . '/img/no-image.jpg" />';
                                        }?>
                                    <div class="card-body">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section><!-- Fin artwork -->

            <!-- Références -->
            <div class="container" role="main">
                <div class="row">
                    <section class="col mt-5 mb-5">
                        <h3 class="mb-4 mt-4">Mes <strong>références</strong></h3>

                        <!-- Sidebar -->
                        <?php get_sidebar(); ?>
                        <!-- Fin sidebar -->

                    </section>
                </div>
            </div><!-- Fin références -->

<?php get_footer(); ?>
