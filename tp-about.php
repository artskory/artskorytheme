<?php
/*
Template Name: À propos
*/
?>
            <!-- Header -->
            <?php get_header(); ?>
            <!-- Fin header -->

            <!-- Banner  -->
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div id="post" class="banner" style="background-image: url('<?php echo $thumb['0'];?>'); filter: grayscale(100%);">
                <div class="filter">
                    <div class="container">
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- Fin banner  -->

           <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p>Bonjour, désolé, mais il n'y a pas encore d'articles sur cette page </p>
            <?php endif; ?>

            <!-- Expertise -->
            <div class="container" role="main">
                <div class="row">
                    <section class="col mb-5">
                        <h2 class="mb-4 mt-5">Mon <strong>savoir-faire</strong></h2>
                            <div class="row text-center expertise">
                                <div class="col-md-6 col-lg-3">
                                    <div class="expertise-detail">
                                        <span class="ak-stack ak-4x">
                                            <i class="ak ak-circle ak-shadow ak-radius ak-color-white ak-stack-1x"></i>
                                            <i class="ak ak-desktop-tablet ak-color-blue ak-stack-1x"></i>
                                        </span>
                                        <h2>
                                            <strong>Web</strong>
                                        </h2>
                                        <ul>
                                            <li>Site vitrine</li>
                                            <li>E-commerce</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="expertise-detail">
                                        <span class="ak-stack ak-4x">
                                            <i class="ak ak-circle ak-shadow ak-radius ak-color-white ak-stack-1x"></i>
                                            <i class="ak ak-file-image ak-color-blue ak-stack-1x"></i>
                                        </span>
                                        <h2>
                                            <strong>Infographie</strong>
                                        </h2>
                                        <ul>
                                            <li>Logos</li>
                                            <li>Charte graphique</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="expertise-detail">
                                        <span class="ak-stack ak-4x">
                                            <i class="ak ak-circle ak-shadow ak-radius ak-color-white ak-stack-1x"></i>
                                            <i class="ak ak-map ak-color-blue ak-stack-1x"></i>
                                        </span>
                                        <h2>
                                            <strong>Print</strong>
                                        </h2>
                                        <ul>
                                            <li>Carte de visite</li>
                                            <li>Dépliant/Plaquette</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="expertise-detail">
                                        <span class="ak-stack ak-4x">
                                            <i class="ak ak-circle ak-shadow ak-radius ak-color-white ak-stack-1x"></i>
                                            <i class="ak ak-motion ak-color-blue ak-stack-1x"></i>
                                        </span>
                                        <h2>
                                            <strong>Animation</strong>
                                        </h2>
                                        <ul>
                                            <li>Motion design</li>
                                            <li>Montage vidéo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div><!-- Fin expertise -->

        </div><!-- Fin main -->

        <!-- Footer -->
        <?php get_footer(); ?>
        <!-- Fin footer -->
